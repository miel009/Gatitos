<?php
include_once("../complementos/header.php");
?>

<?php

require_once("../conect/conect.php");

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
include_once("../complementos/footer.php");
?>