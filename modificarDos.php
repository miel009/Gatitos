<?php
include_once("complementos/header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link rel="stylesheet" href="css/modificar.css">
</head>
<body>
    
</body>
</html>
<?php

require_once("conect/conect.php");

if($con){
    if(isset($_GET['mod'])){

        $mod=$_GET['mod'];
    }
    if(isset($_GET['id'])){

        $id=$_GET['id'];

    }
    
    $consulta= "UPDATE categorias SET categoria='$mod' WHERE IdCategoria='$id' "; 

    $resultado= mysqli_query($con,$consulta);

    if($resultado){
        print "<h1>La categoria fue modificada por $mod</h1>";
        print "<a href=indexAdmin.php >Volver</a>";      
       
    }
}

?>

<?php
include_once("footer.php");
?>