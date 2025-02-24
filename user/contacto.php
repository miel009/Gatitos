<?php
include_once("../complementos/header.php");

?>


  <main>
    <section class="featured">
      <div class="container">
        <h1>Contacto</h1>
        <div class="row">
          <div class="col-md-6">
            
     <form action="../datos.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="name" style="margin-top: 10px;margin-bottom:10px">Nombre:</label>
                <input id="name" name="name" type="text" class="form-control" placeholder="Ingrese su nombre">
              </div>
              <div class="form-group">
                <label for="email" style="margin-top: 10px;margin-bottom:10px" >Email:</label>
                <input id="email" name="email" type="email" class="form-control" placeholder="Ingrese su email">
              </div>
              <div class="form-group">
                <label for="img" style="margin-top: 10px;margin-bottom:10px"> Subir imagen:</label><br>
                <input  id="img" name="img" type="file" style="margin-top: 10px;margin-bottom:10px" />
              </div>
              <div class="form-group">
                <label for="message">Mensaje:</label>
                <textarea id="message" name="message" type="text" class="form-control"  rows="5" placeholder="Ingrese su mensaje"></textarea>
              </div>
            <div>
                <button  type="submit"  style="margin-top: 20px ">Enviar datos</button>
            </div>
              
      </form>
          </div>
          <div class="col-md-6">
            <h2>Información de contacto</h2>
            <p><strong>Teléfono:</strong> +1234567890</p>
            <p><strong>Email:</strong> info@empresadegatos.com</p>
            <p><strong>Dirección:</strong> Calle Principal 123, Ciudad</p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php
include_once("../complementos/footer.php");
?>