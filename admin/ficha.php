
<?php
include_once("../complementos/header.php");

?>

<?php

require_once("../conect/conect.php");


if($con){
    print "<h1> Productos - FICHA </h1>";
    $id;
    if(isset($_GET['producto'])){
        $id=$_GET['producto'];

    }

    

    $consulta = "SELECT nombreProducto, precioProducto, imagenProducto, categoriaProducto FROM productos WHERE codigoProducto='$id' ";

    $resultado = mysqli_query($con,$consulta);


    
    
   
    while($filas=mysqli_fetch_array($resultado)){
        
        print "<h2>$filas[nombreProducto]</h2>";
        print "<img alt=$filas[nombreProducto]  src=img/$filas[imagenProducto] >";
        print "<p>Precio: $filas[precioProducto]</p> ";
        print "<p>Categoria: $filas[categoriaProducto] </p>";
     



    }
}




?>



<?php
include_once("../complementos/footer.php");
?>