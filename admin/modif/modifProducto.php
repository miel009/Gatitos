<?php
include_once("../../componnents/security/admin.php");
include_once("../../complementos/header.php");

//aca vienen las modficaciones del producto en particular
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link rel="stylesheet" type="text/css" href="../css/style.php">
    <link rel="stylesheet" type="text/css" href="../../css/index.css">
    <link rel="stylesheet" type="text/css" href="../../css/modificar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>

<body>

</body>

</html>

<?php

require_once("../../componnents/config.php");

if ($con) {
    if (isset($_GET['producto']) && is_numeric($_GET['producto']) ) {

        $id = (int)$_GET['producto']; // Convertir a entero

    
    
    $consulta = "SELECT * FROM productos WHERE codigoProducto = $id ";
    

    $resultado = mysqli_query($con, $consulta);

    if ($resultado && mysqli_num_rows($resultado) > 0) {

        $filas = mysqli_fetch_array($resultado);
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
            
            <input type=submit value='Modificar Producto' />


            </form>
        ";
    } else {
        echo "<p style='color: red;'>❌ No se encontró el producto con código: $id</p>";
    }
} else {
    echo "<p style='color: red;'>❌ Parámetro 'producto' inválido en la URL.</p>";
}
} else {
echo "<p style='color: red;'>❌ No se pudo conectar a la base de datos.</p>";
}

?>

<?php
include_once("../../complementos/footer.php");
?>