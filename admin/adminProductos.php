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

if($con){
    print "<h1>Producto</h1>";
    $id;
    if(isset($_GET['categoria'])){
        $id=$_GET['categoria'];

    }


    $consulta = "SELECT nombreProducto, precioProducto, codigoProducto FROM productos WHERE categoriaProducto='$id' ";
    $resultado = mysqli_query($con,$consulta);

   
    while($filas=mysqli_fetch_array($resultado)){
        
        print "<h2><a href=ficha.php?producto=$filas[codigoProducto] >$filas[nombreProducto]</a></h2>";
        print "<p>Precio: $filas[precioProducto]</p> ";
        print "<p>Codigo del producto: $filas[codigoProducto]</p> ";
       

    }
    

}


?>




<?php
include_once("../complementos/footer.php");
?>