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
    <link rel="stylesheet" type="text/css" href="../../css/modificar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">

</head>

<body>

</body>

</html>

<?php

require_once("../../componnents/config.php");

if($con){
    if(isset($_GET['categoria'])){

        $id=$_GET['categoria'];

    }
    
    $consulta= "SELECT IdCategoria, categoria FROM categorias WHERE IdCategoria='$id'"; 

    $resultado= mysqli_query($con,$consulta);

    if($resultado){

        $filas=mysqli_fetch_array($resultado);
        print "
            <form action=modificarDos.php metodh=get>
                <div class='modif-form'>
                    <label for=mod >Modificar</label>
                    <input id=mod name=mod type=text value=$filas[categoria]>

                    <input name=id type=hidden value=$filas[IdCategoria] />

                    <input type=submit value=Modificar />


                </div>


            </form>
        ";

        print "<a href=../indexAdmin.php >Volver</a>"; 
          
       
    }
}

?>

<?php
include_once("../../complementos/footer.php");
?>