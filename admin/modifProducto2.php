<?php
include_once("../complementos/header.php");

?>

<?php

require_once("../conect/conect.php");

if($con){
    if( isset($_POST['nombreProducto']) and isset($_POST['precioProducto']) and isset($_POST['categoriaProducto']) ){

        $codigo=$_POST['codigoProducto'];
        $nombre=$_POST['nombreProducto'];
        $precio=$_POST['precioProducto'];
       
    }
    
    $consulta= "UPDATE productos SET nombreProducto='$nombre',precioProducto='$precio' WHERE codigoProducto='$codigo' "; 

    $resultado= mysqli_query($con,$consulta);

    if($resultado){
        print "<h1>El producto fue modificado por $nombre</h1>";
        print "<a href=indexAdmin.php >Volver</a>";      
       
    }
}

?>

<?php
include_once("../complementos/footer.php");
?>