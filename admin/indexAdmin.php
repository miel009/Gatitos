<?php
include_once("../componnents/security/admin.php");
include_once("../complementos/header.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    
    <link rel="stylesheet" type="text/css" href="../../css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>

<?php



require_once("../componnents/config.php");


?>
<section class="hero">

        
<div class="contenedor-gral">
<h1> Bienvenido al panel Administrador </h1>
<p> Puede realizar : Altas, Bajas y Modificaciones </p>
<div class="row">
<div class="col-md-6" >

<form id="admForm" action="alta/alta.php" method="post" enctype="multipart/form-data">
    <div>
        <label for="codigoProducto">Codigo del Producto</label>
        <input id="codigoProducto" type="number" name="codigoProducto" required />
    </div>
    <div>
        <label for="nombreProducto">Nombre Producto</label>
        <input id="nombreProducto" type="text" name="nombreProducto" required />
    </div>
    <div>
        <label for="precioProducto">Precio Producto</label>
        <input id="precioProducto" type="number" name="precioProducto" required />
    </div>

    <div>
        <label for="archivo"> Cargar Imagen </label>
        <input id="archivo" type="file" name="archivo" required />
    </div>
    
    <input id="admiInput" type="submit" value="Cargar Producto" />


</form>

</div>

<?php





if ($con) {

    print "<div class= 'col-md-6' >
    "; 
    


    $consulta = "SELECT codigoProducto, nombreProducto FROM productos";

    $resultado = mysqli_query($con, $consulta);

    if ($resultado) {

        print "
            
            <table border=1>

            
                <thead>
                    <tr>
                        <th>Productos</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    
                    </tr>

                </thead>
                <tbody>
        
        
        
    
        ";
        while ($filas = mysqli_fetch_array($resultado)) {

            print "
            <tr> 
                
                <td><a href=ficha.php?producto=$filas[codigoProducto]>$filas[nombreProducto]</a></td>
                <td><a href=modif/modifProducto.php?producto=$filas[codigoProducto] >Modificar</a></td>
                <td><a href=baja/borrarProducto.php?producto=$filas[codigoProducto] >Eliminar</a></td>
                

            </tr>
        
        ";


        }

        print "
            </tbody>
            </table> </div> ";

    }
}

?>

</div>
</div>
</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

<?php
include_once("../complementos/footer.php");
?>