<?php
include_once("../../componnents/security/admin.php");
include_once("../../complementos/header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link rel="stylesheet" type="text/css" href="../../css/index.css">
</head>

<body>
    


<section class="hero">
<div class="cont-borrar">
<?php

require_once("../../componnents/config.php");


if($con){
    if(isset($_GET['producto']) && is_numeric($_GET['producto'])){

        $id = (int)$_GET['producto'];

    }
    
    $consulta= "DELETE FROM productos WHERE codigoProducto=$id"; 
    $resultado= mysqli_query($con,$consulta);

    if($resultado){
        print "<h1>El producto fue eliminado</h1>";
        print " <div>
        <a class='codigoProd' href=../indexAdmin.php >Volver</a> </div>";                
    }
}

?>
</div>
</section>
</body>
</html>
<?php
include_once("../../complementos/footer.php");
?>