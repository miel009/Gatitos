<?php
session_start();
include_once("complementos/header.php");

?>
<main >
    <section class="featured">
      <div class="container">
        <h1> Gracias por sus datos! </h1>
        <div class="row">
          <div class="col-md-12">
           
    <?php
    $name;
    $email;
    $message;
    $img;
    $temporal;

    
    print "<ul>";
    if (isset($_POST["name"])) {
        $name= $_POST["name"];
        print "<li stylr= 'color: red' >Nombre: $name</li>";
    }

    if (isset($_POST["email"])) {
        $email= $_POST["email"];
        print "<li>Correo: $email</li>";
    }
    if (isset($_POST["message"])) {
        $message= $_POST["message"];
        print "<li> Mensaje: $message </li>";
    }

    print "</ul>";

    $img=time().".jpg";
    $temporal=$_FILES['img']['tmp_name'];
    move_uploaded_file($temporal,"archivos/$img");
  

    print "<img src=archivos/$img />";

?>

           
          <div class="col-md-6">
            <h2>Información de contacto</h2>
            <p><strong>Teléfono:</strong> +1234567890</p>
            <p><strong>Email:</strong> info@empresadegatos.com</p>
            <p><strong>Dirección:</strong> Calle Principal 123, Ciudad</p>
          </div>  
          

         </div>
        </div>
      </div>
    </section>
  </main>

<?php
include_once("complementos/footer.php");
?>