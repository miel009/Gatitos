<?php
require_once("../componnents/config.php");

if($con != NULL){
    if(isset($_POST['nombre']) and isset($_POST['mail']) and isset($_POST['pass1'])){
        $nombre = $_POST['nombre'];
        $mail = $_POST['mail'];
        $pass = $_POST['pass1'];

        $consulta = "INSERT INTO  usuarios SET  nombre='$nombre', mail='$mail', pass=MD5('$pass')";

        mysqli_query($con, $consulta);
        header("Location: ../registro.php?alta=ok");

    }


}



?>