<?php
require_once("../config.php");
if($con != NULL){
    if(isset($_POST['usuario']) and isset($_POST['pass']) ){
        $usuario = $_POST['usuario'];
        $pass = $_POST['pass'];

        $consulta = "SELECT * FROM usuarios WHERE mail='$usuario'";

        $resultado = mysqli_query($con,$consulta);

        $datos = mysqli_fetch_array($resultado);

        if($datos == NULL) {
            header("Location: ../../pages/registro.php?log=no");
        }else{
            header("Location: ../../index.php");
        
        }     
        }

    
        
    }





?>