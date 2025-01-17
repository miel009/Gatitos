<?php
include_once("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link rel="stylesheet" href="css/alta.css">
</head>
<body>
    
</body>
</html>

<?php

require_once("conect/conect.php");

if($con){
    if(isset($_GET['alta'])){

        $alta=$_GET['alta'];

    }
    
    $consulta= "INSERT INTO categorias (categoria) VALUE ('$alta')"; 

    $resultado= mysqli_query($con,$consulta);

    if($resultado){
        print "<h1>La categoria $alta fue agregada</h1>";
        print "<a href=indexAdmin.php >Volver</a>";      
       
    }
}

?>

<?php
include_once("footer.php");
?>