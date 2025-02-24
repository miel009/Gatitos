<?php

// llegada y direccionamiento del registro de los usuarios

require_once("../config.php");
session_start();
if ($con != NULL) {
    $usuario;
    $clave;

    if (isset($_POST['usuario']) and isset($_POST['pass'])) {
        //sacamos una posible falla de seguridad
        $usuario = mysqli_real_escape_string($con, $_POST['usuario']);
        $clave = mysqli_real_escape_string($con, $_POST['pass']);
        //usuario registrado: 
        $consulta = "SELECT * FROM usuarios WHERE correo='$usuario'";

        $resultado = mysqli_query($con, $consulta);
        // conversion: de matriz a array y guardamos en una variable 

        $datos = mysqli_fetch_array($resultado);
        if ($datos == NULL) {
            header("Location: ../../pages/registro.php?log=no");

        }

        if ($datos['fk_estado'] == 1) {
            // chequeamos la contraseña
            $consulta_dos = "SELECT * FROM usuarios WHERE correo='$usuario' AND contrasena=MD5('$clave')";
            $resultado_dos = mysqli_query($con, $consulta_dos);
            $datos_dos = mysqli_fetch_array($resultado_dos);
            if ($datos_dos == NULL) {
                header("Location: ../../pages/registro.php?pass=no");
                //verifico contraseña
            } else {
                //usamos variables de sesión y verificamos el tipo de usuario 
                //print "usuario logueado!!";
                if ($datos_dos['fk_tipo_usuario'] == 1) {
                    //guardo los datos en la variable de sesión de php
                    $_SESSION = $datos_dos;
                    header("Location: ../../admin/indexAdmin.php");

                } else if ($datos_dos['fk_tipo_usuario'] == 2) {
                    $_SESSION = $datos_dos;
                    header("Location: ../../user/index.php");
                    
                }

            }

        } else {
            header("Location: ../../pages/registro.php?bann=no ");
        }
    }
}


?>