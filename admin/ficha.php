<?php
include_once("../componnents/security/admin.php");


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

</body>

</html>

<section class="hero">
<?php

require_once("../componnents/config.php");



if ($con) {
    print "<h2> Productos </h2>";
    $id = null;
    if (isset($_GET['producto'])) {
        $id = $_GET['producto'];

    }



    $consulta = "SELECT nombreProducto, precioProducto, imagenProducto, categoriaProducto FROM productos WHERE codigoProducto='$id' ";

    $resultado = mysqli_query($con, $consulta);





    while ($filas = mysqli_fetch_array($resultado)) {

        print "<h3>$filas[nombreProducto]</h3>";
        print "<img alt=$filas[nombreProducto]  src=../../img/$filas[imagenProducto] >"; // aca llega la imagen del producto
        print "<p>Precio: $filas[precioProducto]</p> ";
        print "<p>Categoria: $filas[categoriaProducto] </p>";




    }
}




?>

<a class="volver" href="indexAdmin.php">
    <button>Volver</button>
</a>
</section>

<?php
include_once("../complementos/footer.php");
?>