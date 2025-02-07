<?php
include_once("../complementos/header.php");

?>


<?php

require_once("../conect/conect.php");

if($con){
    if(isset($_GET['producto'])){

        $id=$_GET['producto'];

    }
    
    $consulta= "SELECT * FROM productos WHERE codigoProducto='$id'"; 

    $resultado= mysqli_query($con,$consulta);

    if($resultado){

        $filas=mysqli_fetch_array($resultado);
        print "
            <form action=modifProducto2.php method=post enctype=multipart/from-data>
            <div>
                <h2>Codigo del Producto: $filas[codigoProducto]</h2>
                <input type=hidden name=codigoProducto value=$filas[codigoProducto] />
                
            </div>
            <div>
                <label for=nombreProducto>Nombre Producto</label>
                <input value=$filas[nombreProducto] id=nombreProducto type=text name=nombreProducto require />
            </div>
            <div>
                <label for=precioProducto>Precio Producto</label>
                <input value=$filas[precioProducto] id=precioProducto type=numbe name=precioProducto require />
            </div>
            
            
        
            <div>
        
            
        
                <input type=hidden name=categoriaProducto value=$filas[categoriaProducto] >
            
        
            </div>
        
            <input type=submit value='Modificar Producto' />


            </form>
        ";
          
       
    }
}

?>

<?php
include_once("../complementos/footer.php");
?>