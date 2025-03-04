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
     

</head>

<body>

<section class="hero">
<?php

require_once("../../componnents/config.php");

if ($con) {
    if (isset($_POST['codigoProducto'], $_POST['nombreProducto'], $_POST['precioProducto'] ,$_FILES['archivo'])) {
        
        $codigoProducto = (int) $_POST['codigoProducto'];
        $nombreProducto = mysqli_real_escape_string($con, $_POST['nombreProducto']);
        $precioProducto = (float) $_POST['precioProducto'];

        // Validar que los campos no estén vacíos
        if ($_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
            $nombreImagen = time() . "_" . basename($_FILES["archivo"]["name"]); 
            $temporal = $_FILES["archivo"]["tmp_name"];

            if (move_uploaded_file($temporal, $rutaDestino)) {
                $consulta = "INSERT INTO productos (codigoProducto, nombreProducto, precioProducto, imagenProducto) 
                             VALUES ($codigoProducto, '$nombreProducto', $precioProducto, '$nombreImagen')";

                $resultado = mysqli_query($con, $consulta);

                if ($resultado) {
                    echo "<h1> El producto '$nombreProducto' fue agregado correctamente.</h1>";
                    echo "<img src='../../img/$nombreImagen' alt='Imagen del producto' width='200'/>";
                    echo "<br> <div style='margin:10px;'> <a class='codigoProd' href='../indexAdmin.php'>Volver</a> <div>";
                } else {
                    echo "<h1> Error al agregar el producto: " . mysqli_error($con) . "</h1>";
                }
            } else {
                echo "<h1> Error al subir la imagen.</h1>";
            }
        } 
    } else {
        echo "<h1> Error: Todos los campos son obligatorios.</h1>";
    }
}
?>

</section>

</body>

</html>
<?php
include_once("../../complementos/footer.php");
?>