<?php
include_once("header.php");
?>

<?php



require_once("conect/conect.php");


if($con){
    print "<h1>Producto</h1>";
    $id;
    if(isset($_GET['categoria'])){
        $id=$_GET['categoria'];

    }


    $consulta = "SELECT nombreProducto, precioProducto, codigoProducto FROM productos WHERE categoriaProducto='$id' ";
    $resultado = mysqli_query($con,$consulta);

   
    while($filas=mysqli_fetch_array($resultado)){
        
        print "<h2><a href=ficha.php?producto=$filas[codigoProducto] >$filas[nombreProducto]</a></h2>";
        print "<p>Precio: $filas[precioProducto]</p> ";
        print "<p>Codigo del producto: $filas[codigoProducto]</p> ";
       

    }
    






}




?>




<?php
include_once("footer.php");
?>