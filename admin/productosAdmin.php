<?php
include_once("../complementos/header.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link rel="stylesheet" type="text/css" href="../../css/index.css">
</head>

<body>

</body>

</html>



<?php

require_once("../componnents/config.php");


if($con){
    if(isset($_GET['categoria'])){
        $id=$_GET['categoria'];

    }

    print "<h1> Bienvenido - PRODUCTOS</h1>";
    print "<h2> </h2>";
    print "<p>Altas, Bajas y Modificaciones</p>";
    
    $consulta= "SELECT codigoProducto, nombreProducto FROM productos WHERE categoriaProducto='$id'"; 

    $resultado= mysqli_query($con,$consulta);

    if($resultado){

        print "
            <table border=1 >
                <caption>Productos</caption>
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    
                    </tr>

                </thead>
                <tbody>
        
        
        ";
        while($filas=mysqli_fetch_array($resultado)){
        
            print "
                <tr>
                    <td>$filas[nombreProducto]</td>
                    <td><a href=modifProducto.php?producto=$filas[codigoProducto] >Modificar</a></td>
                    <td><a href=borrarProducto.php?producto=$filas[codigoProducto] >Eliminar</a></td>
                    

                </tr>
            
            ";
    
    
        }

        print "
            </tbody>
            </table>";

    }


}

?>

<form action="alta/alta.php"  method="post" enctype="multipart/form-data" >
    <div>
        <label for="codigoProducto">Codigo del Producto</label>
        <input Id="codigoProducto" type="number" name="codigoProducto" require />
    </div>
    <div>
        <label for="nombreProducto">Nombre Producto</label>
        <input Id="nombreProducto" type="text" name="nombreProducto" require />
    </div>
    <div>
        <label for="precioProducto">Precio Producto</label>
        <input Id="precioProducto" type="number" name="precioProducto" require />
    </div>
    
    <div>
        <label for="archivo" > Cargar Imagen </label>
        <input Id="archivo" type="file" name="archivo" require />
    </div>

  
    <div>

        <?php

            print "<input type=hidden name=categoriaProducto value=$id >";
        ?>

    </div>

    <input type="submit" value="Cargar Producto" />


</form>




<?php
include_once("../complementos/footer.php");
?>


