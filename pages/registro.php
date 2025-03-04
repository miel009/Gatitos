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

    <section class="hero">

        <h1>Unite a la comunidad gatuna mas linda</h1>
        <div class="container1">
            <form action="../componnents/security/altareg.php" method="post" class="col-6">
                <fieldset>
                    <legend>Registrarse</legend>
                    <?php
                    //mensajes de error
                    if (isset($_GET['error_uno'])) {
                        print "<p class='mensaje' style=color:red >Todos los campos son obligatorios!!!</p>";

                    }
                    if (isset($_GET['error_dos'])) {
                        print "<p class='mensaje' style=color:red >Las contraseñas no son iguales!!!</p>";

                    }

                    if (isset($_GET['error_tres'])) {
                        print "<p class='mensaje' style=color:red >El correo electrónico ya existe!!!</p>";

                    }
                    //registro ok
                    if (isset($_GET['alta'])) {
                        print "<p class='mensaje' style=color:green >Te podes Loguear!!</p>";

                    }

                    ?>

                    <script>
                        setTimeout(function () {
                            document.querySelectorAll('.mensaje').forEach(function (element) {
                                element.style.transition = 'opacity 1s';
                                element.style.opacity = '0';
                            });
                        }, 5000);
                    </script>

                    <div>
                        <label for="nombre">Nombre:</label>
                        <input id="nombre" name="nombre" type="text">
                    </div>
                    <div>
                        <label for="apellido">Apellido:</label>
                        <input id="apellido" name="apellido" type="text">
                    </div>
                    <div>
                        <label for="email"> Correo: </label>
                        <input id="email" name="email" type="email">
                    </div>
                    <div>
                        <label for="clave">Contraseña</label>
                        <input id="clave" name="clave" type="password">
                        <button type="button" onclick="mostrarOcultar('clave')">👁 Mostrar</button>
                    </div>
                    <div> 
                        <label for="clave_dos"> Repetir contraseña</label>
                        <input id="clave_dos" name="clave_dos" type="password">
                        <button type="button" onclick="mostrarOcultar('clave_dos')">👁 Mostrar</button>
                    </div>
                    <input type="submit" value="Registrarme">
                </fieldset>

            </form>

            <form action="../componnents/security/login.php" method="post" class="col-6">

                <fieldset>
                    <legend>Ingresar</legend>
                    <?php
                    if (isset($_POST['log'])) {
                        print "<p class='mensaje' style=color:red >El usuario no esta registrado </p>";
                    }
                    if (isset($_POST['bann'])) {
                        print "<p class='mensaje' style=color:red >El usuario esta banneado, contacta al Administrador </p>";
                    }
                    if (isset($_POST['pass'])) {
                        print "<p  class='mensaje' style=color:red > La contraseña es incorrecta </p>";
                    }

                    ?>
                    <div>
                        <label for="usuario"> Correo: </label>
                        <input id="usuario" name="usuario" type="email">
                    </div>
                    <div>
                        <label for="pass">Contraseña:</label>
                        <input id="pass" name="pass" type="password">
                    </div>
                    <input type="submit" value="Ingresar">
                </fieldset>
            </form>
        </div>
    </section>





</body>

</html>

<script>
    function mostrarOcultar(id) {
        let campo = document.getElementById(id);
        campo.type = "text"; // Mostrar la contraseña

        setTimeout(() => {
            campo.type = "password";
        }, 2000);
    }
</script>