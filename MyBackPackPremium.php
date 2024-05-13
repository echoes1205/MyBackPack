<?php
$baseUrl = 'http://localhost/paypal-pdt-php/buy_now_button';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre MyBackPack Premium</title>
  <link rel="icon" href="img/AuralLogoB.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/main.css">
  <link rel="stylesheet" href="styles/aboutUs/style-aboutus.css">
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet">
  <script src="https://kit.fontawesome.com/1b4b7096aa.js" crossorigin="anonymous"></script>
  <script src="ruta/a/tu/archivo/ventanaTarjeta.js"></script>
</head>

<body style="background-image: none;">
  <!-- Navbar -->
  <?php include "headerP.php"; ?>
  </div>
  <!-- Carrusel Escritorio -->
  <div id="carrusel" class="carousel slide pt-5 overflow-hidden vh-7 d-none d-lg-block" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/carousel1.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
  <!-- Carrusel Móvil -->
  <div id="carrusel-movil" class="carousel slide mt-5 overflow-hidden d-block d-lg-none" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/carousel1.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
  <!-- Contenido -->
  <!-- ¿Quiénes somos? -->
  <div class="row apar-1 gx-0">
    <div style="color: transparent;">
      Aquí va tu texto
    </div>

    <h1 style="text-align:center ; font-family: 'Montserrat';">¿Qué vas a encontrar en MyBackPack Premium?</h1>
    <div class="col cont-izq px-4 text-center text-lg-start mt-4 mt-lg-0">

      <p>
        Cientos de cuentos clásicos, leyendas y fábulas para leer y escuchar. Creados y adaptados en exclusiva, con actividades para trabajar comprensión lectora y valores.
      </p>
      <h1>Tareas App</h1>
      <p>
        Esquemas y resúmenes de los principales contenidos de cada asignatura para facilitar el estudio.
      </p>
      <h1>Videos App</h1>
      <p>Explicaciones breves sobre los contenidos más significativos de Primaria para resolver dudas, mejorar la comprensión y visualizar el desarrollo de procedimientos.</p>
      <h1>Accesos directos</h1>
      <p>¡Tus propios accesos directos perzonalizados a tu antojo!</p>
      <h1>Muchas mas cosas</h1>
      <p>¡Descubre por ti mismo lo que tiene para ti MyBackPack Premium!</p>
    </div>
    <div class="col cont-der d-none d-lg-block">
      <img class="img-fluid rounded-pill rounded-end img1" src="img/team-1.png" alt="">
    </div>
  </div>
  <div id="carrusel" class="carousel slide pt-5 overflow-hidden vh-7 d-none d-lg-block" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/barraPremium.png" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
  <hr class="d-block d-lg-none mx-5">
  <!-- Misión, visión y valores -->
  <hr class="mx-5">
  <!-- Desarrolladores -->
  
  <h1 style="text-align:center ; font-family: 'Montserrat';">Forma parte de MyBack Premium por tan solo $50 MXN al mes</h1>
  <div class="row row-cols-1 justify-content-evenly mb-5">
    <!-- Germán -->
    <div class="border p-4 rounded-5 m-1" style="max-width: 250px; border-color: #E9ECEF;">
      <div class="mt-3 text-center">
        <h1 style="font-size: 1.2em;">Pagar con:</h1>
        <!-- https://www.sandbox.paypal.com/cgi-bin/webscr -->
        <form action="" method="post" id="form_pay">

          <!-- Valores requeridos -->
          
          <input type="hidden" name="business" style="display: none;" value="vendedor@business.example.com">
          <input type="submit"   value="Pago con PayPal" class="btn btn-primary btn-block rounded-pill" style="background-color: #003087;">
          <input type="hidden"   style="display: none;" name="cmd" value="_xclick">

          <label for="item_name"  style="display: none;" class="form-label">item_name</label>
          <input type="text"  style="display: none;" name="item_name" id="" value="MyBackPack Premium" required=""><br>

          <label for="amount"   style="display: none;" class="form-label">amount</label>
          <input type="text"  style="display: none;" name="amount" id="" value="50.00" required=""><br>

          <input type="hidden"  style="display: none;" name="currency_code" value="MXN">

          <label for="quantity"  style="display: none;" class="form-label">quantity</label>
          <input type="text"   style="display: none;" name="quantity" id="" value="1" required=""><br>

          <input type="hidden"  name="cancel_return" value="<?= $baseUrl ?>/pago_cancelado.php">

          <hr>

          

        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>