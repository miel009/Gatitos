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
    <link rel="stylesheet" type="text/css" href="../css/index.css">
</head>

<body>

</body>

</html>


<?php



require_once("../conect/conect.php");


if ($con) {
    print "<h1 id='h1-cat'> Categorias </h1>";


    $consulta = "SELECT IdCategoria, categoria FROM categorias";

    $resultado = mysqli_query($con, $consulta);


    print " <div id='contenedor'> <ul>";
    while ($filas = mysqli_fetch_array($resultado)) {

        print "<li id='li-nav'><a href=adminProductos.php?categoria=$filas[IdCategoria] >$filas[categoria]</a></li>";


    }
    print "</ul> </div> ";

}

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
                <td><a href=modificar.php?categoria=$filas[IdCategoria] >Modificar</a></td>
                <td><a href=borrar.php?categoria=$filas[IdCategoria] >Eliminar</a></td>
                

            </tr>
        
        ";


        }

        print "
            </tbody>
            </table> </div> ";

    }
}

?>


<form action="alta.php" method="get">

    <div id="contenedor-new">
        <label for="alta" id='p-adm' >Nueva Categoria</label>
        <input id="alta" name="alta" type="text">
        <input type="submit" value="Agregar categoria">
    </div>



</form>

<?php
include_once("../complementos/footer.php");
?>