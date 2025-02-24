<?php 
session_start();
include_once("../componnents/config.php");
include_once("../complementos/header.php");
?>

<section class="featured">
  <div class="container">
    <h1>Nuestros productos</h1>
    <div class="row">

      <?php
      if ($con != NULL) {
          $consulta = "SELECT * FROM productos";
          $resultado = mysqli_query($con, $consulta);

          while ($fila = mysqli_fetch_array($resultado)) {
              echo "
              <div class='col-md-4'>
                <div class='card'>
                  <img src='../img/{$fila['imagenProducto']}' alt='{$fila['nombreProducto']}'>
                  <h2>{$fila['nombreProducto']}</h2>
                  <p>Precio: $ {$fila['precioProducto']}</p>
                </div>
              </div>";
          }
      }
      ?>

    </div> <!-- Cierre de row -->
  </div> <!-- Cierre de container -->
</section>

<?php
include_once("../complementos/footer.php");
?>
