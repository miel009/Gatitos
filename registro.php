<?php
include_once("complementos/header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link rel="stylesheet" href="css/registro.css">
</head>
<body>
    

<section class="row" >
    
    <div class="container">
    <h2>Unite a la comunidad gatuna mas linda</h2>
    </div>
    
    <div class="container1"> 
    <form action="complementos/reg.php" method="post" class="col-6" >
       
        <fieldset>
            <legend>Ingresar</legend>
            <div> 
                <label for="usuario" >Usuario/mail</label>
                <input id="usuario" name="usuario" type="email"  >
            </div>
            <div>
                <label for="pass" >Contraseña</label>
                <input id="pass" name="pass" type="password"  >
            </div>
            <input type="submit" value="Ingresar" >
        </fieldset>
        </form>
    </div>
        <?php
            if(isset($_GET['alta'])){
                print "<strong style=color:green >Ya te podes loguear</strong>";
            }
        
        ?>

    
    <div class="container1">
    <form action="complementos/altareg.php" method="post" class="col-6" >
        <fieldset>
            <legend>Registrar</legend>
            <div>
                <label for="nombre" >Nombre</label>
                <input id="nombre" name="nombre" type="text"  >
            </div>
            <div>
                <label for="mail" >Usuario/mail</label>
                <input id="mail" name="mail" type="email"  >
            </div>
            <div>
                <label for="pass1" >Contraseña</label>
                <input id="pass1" name="pass1" type="password"  >
            </div>
            <input type="submit" value="Registrar" >
        </fieldset>

    </form>
    </div>
</section>
  




</body>
</html>


