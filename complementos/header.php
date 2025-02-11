<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Empresa de Gatos</title>
  <link rel="stylesheet" type="text/css" href="style.php">
  <link rel="stylesheet" type="text/css" href="../css/index.css">
  <link rel="preconnect" href="https://fonts.googleapis.com"> <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Empresa de gatos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <?php

$menu = array();
//$nombres            $links
$menu['Inicio'] = '../index.php';
$menu['Sobre nosotros'] = '../sobrenosotros.php';
$menu['Productos'] = '../productos.php';
$menu['Servicios'] = '../servicios.php';
$menu['Contacto'] = '../contacto.php';
$menu['Administrador'] = '../admin/indexAdmin.php';
$menu['Ingresar']= '../registro.php';

print "<ol class='navbar-nav me-auto mb-2 mb-lg-0'>";
foreach($menu as $nombres=>$links){

    print "<li><a href=$links >$nombres</a></li>";
    

}
print "</ol>";

            ?>


          </ul>
          
        </div>
      </div>
    </nav>
  </header>

</body>