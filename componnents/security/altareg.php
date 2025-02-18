<?php
require_once("../config.php");

if($con != NULL){
    if(isset($_POST['nombre']) and isset($_POST['mail']) and isset($_POST['pass1'])){
        $nombre = $_POST['nombre'];
        //$nombre = $_POST['apellido'];
        $mail = $_POST['mail'];
        $pass = $_POST['pass1'];
        //$pass2 = $_POST['pass2'];

        $consulta = "INSERT INTO  usuarios SET  nombre='$nombre', mail='$mail', pass=MD5('$pass')";

        mysqli_query($con, $consulta);
        header("Location: ../../pages/registro.php?alta=ok"); // se redirigue a registro y deja el mensaje verde de que se puede loguear

    } else {
        header("Location: ../../pages/registro.php?error_uno=ok");
    }   


}



?>