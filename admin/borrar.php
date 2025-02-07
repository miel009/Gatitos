
<?php
include_once("../complementos/header.php");

?>

<?php

require_once("../conect/conect.php");

if($con){
    if(isset($_GET['categoria'])){

        $id=$_GET['categoria'];

    }
    
    $consulta= "DELETE FROM categorias WHERE IdCategoria='$id'"; 

    $resultado= mysqli_query($con,$consulta);

    if($resultado){
        print "<h1>La categoria fue eliminada</h1>";
        print "<a href=indexAdmin.php >Volver</a>";      
       
    }
}

?>

<?php
include_once("../complementos/footer.php");
?>