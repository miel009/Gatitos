<?php
include_once("../../componnents/security/admin.php");
include_once("../../complementos/header.php");

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
    if (isset($_POST['nombreProducto']) and isset($_POST['precioProducto']) and isset($_POST['codigoProducto'])) {

        $codigo = $_POST['codigoProducto'];
        $nombre = $_POST['nombreProducto'];
        $precio = $_POST['precioProducto'];

    }

    $consulta = "UPDATE productos SET nombreProducto='$nombre',precioProducto='$precio' WHERE codigoProducto='$codigo' ";

    $resultado = mysqli_query($con, $consulta);

    if ($resultado) {
        print "<h1>El producto fue modificado por $nombre</h1>";
        print "<a href=../indexAdmin.php >Volver</a>";

    }
}

?>

<?php
include_once("../../complementos/footer.php");
?>