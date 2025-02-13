<?php
include_once("../complementos/header.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link rel="stylesheet" type="text/css" href="style.php">
    <link rel="stylesheet" type="text/css" href="../../css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>

<body>

</body>

</html>


<?php

require_once("../componnents/config.php");

/* 
if ($con) {
    print "<h1 id='h1-cat'> Categorias </h1>";


    $consulta = "SELECT IdCategoria, categoria FROM categorias";
    //guardamos el resuldado en la query
    $resultado = mysqli_query($con, $consulta);

    //filtramo arrays -->categoria 
    print " <div id='contenedor'> <ul>";
    while ($filas = mysqli_fetch_array($resultado)) {

        print "<li id='li-nav'><a href=adminProductos.php?categoria=$filas[IdCategoria] >$filas[categoria]</a></li>";


    }
    print "</ul> </div> ";

} else{
    print "<h1> No se pudo conectar a la base de datos </h1>";
}


*/

?>
<?php



if ($con) {

    print "<div id='contenedor-gral'> 
    <h1 id='h1-adm'> Bienvenido al panel Administrador </h1>
    <p id='p-adm'> Puede realizar : Altas, Bajas y Modificaciones </p>
    ";


    $consulta = "SELECT IdCategoria, categoria FROM categorias";

    $resultado = mysqli_query($con, $consulta);

    if ($resultado) {

        print "
            
            <table border=1>

            
                <thead>
                    <tr>
                        <th>Categoria</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    
                    </tr>

                </thead>
                <tbody>
        
        
        
    
        ";
        while ($filas = mysqli_fetch_array($resultado)) {

            print "
            <tr> 
                
                <td><a href=productosAdmin.php?categoria=$filas[IdCategoria]>$filas[categoria]</a></td>
                <td><a href=modif/modificar.php?categoria=$filas[IdCategoria] >Modificar</a></td>
                <td><a href=baja/borrar.php?categoria=$filas[IdCategoria] >Eliminar</a></td>
                

            </tr>
        
        ";


        }

        print "
            </tbody>
            </table> </div> ";

    }
}

?>


<form action="alta/alta.php" method="get">

    <div id="contenedor-new">
        <label for="alta" id='p-adm' >Nueva Categoria</label>
        <input id="alta" name="alta" type="text">
        <input type="submit" value="Agregar categoria">
    </div>



</form>

<?php
include_once("../complementos/footer.php");
?>