<?php
include_once("../../complementos/header.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link rel="stylesheet" type="text/css" href="../css/style.php">
    <link rel="stylesheet" type="text/css" href="../../css/index.css">
     

</head>

<body>

</body>

</html>

<?php

require_once("../../componnents/config.php");

if($con){
    if(isset($_GET['alta'])){

        $alta=$_GET['alta'];

    }
    
    $consulta= "INSERT INTO categorias (categoria) VALUE ('$alta')"; 

    $resultado= mysqli_query($con,$consulta);

    if($resultado){
        print "<h1>La categoria $alta fue agregada</h1>";
        print "<a href= ../indexAdmin.php >Volver</a>";      
       
    }
}

?>

<?php
include_once("../../complementos/footer.php");
?>