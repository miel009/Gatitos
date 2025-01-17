<?php
include_once("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link rel="stylesheet" href="css/altaProductos.css">
</head>
<body>
    
</body>
</html>



<?php

require_once("conect/conect.php");

if($con){
    if(isset($_POST['codigoProducto']) and isset($_POST['nombreProducto']) and isset($_POST['precioProducto'])){

        $codigo=$_POST['codigoProducto'];
        $nombre=$_POST['nombreProducto'];
        $precio=$_POST['precioProducto'];

        $hora= time();
        move_uploaded_file($_FILES['archivo']['tmp_name'], "img/".$hora.'jpg');
        $imagen=$hora.'jpg';
    }
    
    $consulta= "INSERT INTO productos (codigoProducto,nombreProducto,precioProducto,imagenProducto)VALUE ('$codigo','$nombre','$precio','$imagen')"; 


    $resultado= mysqli_query($con,$consulta);

    if($resultado){
        print "<h1>El Producto $nombre fue agregada</h1>";
        print "<a href=indexAdmin.php >Volver</a>";      
       
    }
}

?>

<?php
include_once("footer.php");
?>