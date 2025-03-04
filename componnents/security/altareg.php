<?php
require_once("../config.php");

if($con != NULL){
    $nombre;
    $apellido;
    $usuario;
    $clave_uno;
    $clave_dos;

    if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['email']) && !empty($_POST['clave']) && !empty($_POST['clave_dos'])){

        //sacamos una posible falla de seguridad
         $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
         $apellido = mysqli_real_escape_string($con, $_POST['apellido']) ;
         $usuario = mysqli_real_escape_string($con, $_POST['email']) ;
         $clave_uno = mysqli_real_escape_string($con, $_POST['clave']);
         $clave_dos = mysqli_real_escape_string($con, $_POST['clave_dos']);
 

    //comprueba si las claves coinciden 

        if($clave_dos == $clave_uno){
        
        //verifico si ya existe el usuario
        $consulta = "SELECT * FROM usuarios WHERE correo='$usuario'";
        $resultado = mysqli_query($con,$consulta);
        //pregunto cuantas filas hay
        if(mysqli_num_rows($resultado) > 0 ){
            header("Location: ../../pages/registro.php?error_tres=ok");

        }else{
            //inserto el usuario--> encripto la contraseña
            $insertar = "INSERT INTO usuarios(nombre, apellido, correo, contrasena, fk_estado, fk_tipo_usuario) VALUES ('$nombre','$apellido','$usuario',MD5('$clave_uno'),'1','2')";

            if(mysqli_query($con,$insertar)){
                header("Location: ../../pages/registro.php?alta=ok");
            }

        }


    }else {
        header("Location: ../../pages/registro.php?error_dos=ok");
    }

}else{
    header("Location: ../../pages/registro.php?error_uno=ok");

}

}

?>