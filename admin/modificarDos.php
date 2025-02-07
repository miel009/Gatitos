<?php
include_once("../complementos/header.php");

?>


<?php

require_once("../conect/conect.php");

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
include_once("../complementos/footer.php");
?>