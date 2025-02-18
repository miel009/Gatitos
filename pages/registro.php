<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link rel="stylesheet" href="../css/registro.css">
    
<body>
    
<section>
    
    <h1>Unite a la comunidad gatuna mas linda</h1>

    <?php

    if(isset($_GET['error_uno'])){
        print "<strong style=color:red > Todos los campos son obligatorios!! </strong>";
    } 
    if(isset($_GET['error_dos'])){
        print "<strong style=color:red >Las contraseñas no coinciden.. </strong>";
    }  
    ?>
    
    <div class="container1"> 
    <form action="../componnents/security/altareg.php" method="post" class="col-6" >
        <fieldset>
            <legend>Registrarse</legend>
            <div>
                <label for="nombre" >Nombre:</label>
                <input id="nombre" name="nombre" type="text"  >
            </div>
            <div>
                <label for="apellido" >Apellido:</label>
                <input id="nombre" name="apellido" type="text"  >
            </div>
            <div>
                <label for="mail" > Correo: </label>
                <input id="mail" name="mail" type="email"  >
            </div>
            <div>
                <label for="pass1" >Contraseña</label>
                <input id="pass1" name="pass1" type="password"  >
                <button type="button" onclick="mostrarOcultar('pass1')">👁 Mostrar</button>
            </div>
            <div>
                <label for="pass2" > Repetir contraseña</label>
                <input id="pass2" name="pass1" type="password"  >
                <button type="button" onclick="mostrarOcultar('pass2')">👁 Mostrar</button>
            </div>
            <input type="submit" value="Registrar" >
        </fieldset>

    </form>

        <?php
        if(isset($_GET['log'])){
            print "<strong style=color:red >El usuario no esta registrado </strong>";
        }

        ?>
    <form action="../componnents/security/reg.php" method="post" class="col-6" >
       
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
</section>
  




</body>
</html>

<script>
function mostrarOcultar(id) {
    let campo = document.getElementById(id);
    campo.type = "text"; // Mostrar la contraseña
    
    setTimeout(() => {
        campo.type = "password"; 
    }, 5000);
}
</script>

