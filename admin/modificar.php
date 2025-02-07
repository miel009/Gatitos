<?php
include_once("../complementos/header.php");

?>

<?php

require_once("../conect/conect.php");

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
                <div>
                    <label for=mod >Modificar</label>
                    <input id=mod name=mod type=text value=$filas[categoria]>

                    <input name=id type=hidden value=$filas[IdCategoria] />

                    <input type=submit value=Modificar />


                </div>


            </form>
        ";

        print "<a href=indexAdmin.php >Volver</a>"; 
          
       
    }
}

?>

<?php
include_once("../complementos/footer.php");
?>