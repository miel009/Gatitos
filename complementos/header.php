<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Empresa de Gatos</title>
  <link rel="stylesheet" type="text/css" href="../css/index.css">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
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
if (isset($_SESSION['id_usuario']) and $_SESSION['fk_tipo_usuario'] == 1 ) {
  
  $menu['Inicio'] = '../user/index.php';
  $menu['Sobre nosotros'] = '../user/sobrenosotros.php';
  $menu['Productos'] = '../user/productos.php';
  $menu['Servicios'] = '../user/servicios.php';
  $menu['Contacto'] = '../user/contacto.php';
  $menu['ADM'] = '/../admin/indexAdmin.php';
  $menu['Salir']= '../user/logout.php';

}else{
  $menu['Inicio'] = '/../user/index.php';
  $menu['Sobre nosotros'] = '/../user/sobrenosotros.php';
  $menu['Productos'] = '/../user/productos.php';
  $menu['Servicios'] = '/../user/servicios.php';
  $menu['Contacto'] = '/../user/contacto.php';
  $menu['Salir']= '/../user/logout.php';
}

//$nombres            $links




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