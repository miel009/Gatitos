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
    <link rel="stylesheet" href="../../css/borrarProducto.css">
    <link rel="stylesheet" type="text/css" href="../../css/index.css">
</head>
<body>
    
</body>
</html>

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
        print "<a href=../indexAdmin.php >Volver</a>";      
                 
    }
}

?>

<?php
include_once("../../complementos/footer.php");
?>