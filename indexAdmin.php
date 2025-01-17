<?php
include_once("header.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    
</body>
</html>


<?php



require_once("conect/conect.php");


if($con){
    print "<h1> Categorias </h1>";

    

    $consulta = "SELECT IdCategoria, categoria FROM categorias";

    $resultado = mysqli_query($con,$consulta);


    
    
    print "<ul>";
    while($filas=mysqli_fetch_array($resultado)){
        
        print "<li><a href=adminProductos.php?categoria=$filas[IdCategoria] >$filas[categoria]</a></li>";


    }
    print "</ul>";






}

?>

<?php



if($con){

    print "<h1>Bienvenido al panel Administrador </h1>";
    print "<h1> </h1>";
    print "<p> Puede realizar :";
    print "<p> Altas, Bajas y Modificaciones</p>";
    
    $consulta= "SELECT IdCategoria, categoria FROM categorias"; 

    $resultado= mysqli_query($con,$consulta);

    if($resultado){

        print "
            <table border=1 >
            
                <thead>
                    <tr>
                        <th>Categoria</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    
                    </tr>

                </thead>
                <tbody>
        
        
        
        
        ";
        while($filas=mysqli_fetch_array($resultado)){
        
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
            </table>";

    }








}

?>


<form action="alta.php"  method="get" >

    <div>
        <label for="alta" >Nueva Categoria</label>
        <input id="alta" name="alta" type="text" >
        <input type="submit" value="Agregar categoria" >
    </div>

    

</form>

<?php
include_once("footer.php");
?>