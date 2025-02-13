<?php
include_once("../complementos/header.php");

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


<?php

require_once("../componnents/config.php");


if ($con) {
    print "<h1> Productos - FICHA </h1>";
    $id = null;
    if (isset($_GET['producto'])) {
        $id = $_GET['producto'];

    }



    $consulta = "SELECT nombreProducto, precioProducto, imagenProducto, categoriaProducto FROM productos WHERE codigoProducto='$id' ";

    $resultado = mysqli_query($con, $consulta);





    while ($filas = mysqli_fetch_array($resultado)) {

        print "<h2>$filas[nombreProducto]</h2>";
        print "<img alt=$filas[nombreProducto]  src=img/$filas[imagenProducto] >";
        print "<p>Precio: $filas[precioProducto]</p> ";
        print "<p>Categoria: $filas[categoriaProducto] </p>";




    }
}




?>



<?php
include_once("../complementos/footer.php");
?>