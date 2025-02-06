<?php
session_start();
require_once("conexion.php");
if($con != NULL){
    if(isset($_POST['usuario']) and isset($_POST['pass']) ){
        $usuario = $_POST['usuario'];
        $pass = $_POST['pass'];

        $consulta = "SELECT * FROM usuarios WHERE mail='$usuario' and pass=MD5('$pass')";

        $resultado = mysqli_query($con,$consulta);

        $fila = mysqli_fetch_array($resultado);

        $_SESSION = $fila;

        if($_SESSION['tipo'] == 'admin'){
            header("Location: ../admin/index.php");
        }else{
            print "
            <ul>
                <li>Nombre: $_SESSION[nombre] </li>
                <li>Email: $_SESSION[mail] </li>
            </ul>


            <a href=logout.php >Cerrar</a>
        
        
        ";
        }

      
        
    }


}


?>