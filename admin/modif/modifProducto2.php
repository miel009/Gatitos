<?php
include_once("../../componnents/security/admin.php");
include_once("../../complementos/header.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link rel="stylesheet" type="text/css" href="../../css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">

</head>

<body>



<section class="hero">
<?php

require_once("../../componnents/config.php");

if ($con) {
    if (isset($_POST['codigoProducto'], $_POST['nombreProducto'], $_POST['precioProducto'])) {
        $codigo = $_POST['codigoProducto'];
        $nombre = mysqli_real_escape_string($con, $_POST['nombreProducto']);
        $precio = $_POST['precioProducto'];

        // obtiene la imagen
        $consultaActual = "SELECT imagenProducto FROM productos WHERE codigoProducto='$codigo'";
        $resultadoActual = mysqli_query($con, $consultaActual);
        $fila = mysqli_fetch_assoc($resultadoActual);
        $imagenActual = $fila['imagenProducto']; 
        // verif si se subio 
        if (!empty($_FILES['archivo']['name']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
            $nombreImagen = time() . "_" . basename($_FILES["archivo"]["name"]); 
            $rutaDestino = "../../img/" . $nombreImagen;
            $temporal = $_FILES["archivo"]["tmp_name"];

            // Mover la nueva imagen
            if (move_uploaded_file($temporal, $rutaDestino)) {
                // si existia, elimina imagen anterior 
                if (!empty($imagenActual) && file_exists("../../img/" . $imagenActual)) {
                    unlink("../../img/" . $imagenActual);
                }
            } else {
                echo "<h1> Error al subir la nueva imagen.</h1>";
                exit;
            }
        } else {
            // Si no se subió , mantener la actual
            $nombreImagen = $imagenActual;
        }

        // actualiza producto 
        $consulta = "UPDATE productos 
                     SET nombreProducto='$nombre', 
                         precioProducto=$precio, 
                         imagenProducto='$nombreImagen' 
                     WHERE codigoProducto='$codigo'";
        $resultado = mysqli_query($con, $consulta);

        if ($resultado) {
            echo "<h1> El producto '$nombre' fue modificado correctamente.</h1>
               
            ";
            if (!empty($nombreImagen)) {
                echo "<div class='contenedor-gral'>
                <img src='../../img/$nombreImagen' alt='Imagen del producto' />
                <div/>";
            }
            echo "<br><a class='codigoProd' href='../indexAdmin.php'>Volver</a>";
        } else {
            echo "<h1> Error al modificar el producto: " . mysqli_error($con) . "</h1>
             <a  href='../indexAdmin.php'>
            <button>Volver</button> </a>";
        }
    } else {
        echo "<h1> Error: Todos los campos son obligatorios.</h1>
         <a class='volver' href='../indexAdmin.php'>
            <button>Volver</button> </a>";
    }
} else {
    echo "<h1>No se pudo conectar a la base de datos.</h1>
     <a class='volver' href='../indexAdmin.php'>
            <button>Volver</button> </a>";
}
?>

</section>
</body>

</html>
<?php
include_once("../../complementos/footer.php");
?>