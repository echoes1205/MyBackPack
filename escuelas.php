

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Ubicación</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./styles/home.css">
    <script src="./font-awesome/js/all.min.js"></script>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/home/style-home.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1b4b7096aa.js" crossorigin="anonymous"></script>
</head>

<style>
    #map {
        margin: auto;
        height: 40vh;
        width: 100%;
    }
</style>

<body>
   

    <!-- Navbar -->
    <?php include "header.php"; ?>
    <div class="container-fluid mt-5" style="margin-top:566px;">
        <div class="row justify-content-evenly">
            <!--Anuncio derecho-->
            <div class="col-12 col-lg-2 order-lg-last px-5 h-100 rounded-5 mt-5 ms-auto d-none d-sm-block" style="background: #fff; margin-left: 5%; margin-right : 5%;">
                <div class="d-flex justify-content-center mt-5">
                </div>

           
            </div>
            <!-- Publicaciones -->
            <div class="col-12 col-lg-6 order-lg-last h-100 rounded-5 mt-5" style="background: #fff;">


                <!-- Publicaciones-->
                <div class="h-100 mt-3 mt-5 mt-lg-2">

                    <!-- Auto-->
                    <div class="d-flex align-items-center">
                        <div>

                        </div class="my-5">
                        <div>
                            <p class="m-0 fw-bold text-center fs-4">Ubicación</p>

                            <span class="text-muted fs-7 " style="display: flex; align-items: center; line-height: 1.5;">
                            La institución se ubica en la Avenida Universidad Tecnológica 3051, Col, Lote Bravo, 32695 Juárez, Chih.
                                <br></span>
                        </div>

                    </div>
                    <!-- carrousel -->
                    <div class="card overflow-hidden shadow border-0 rounded-5 mt-2" style="color: #000;">
                        <div id="carrusel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div id="map">
                                        <script src="Maps.js"></script>
                                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="h-100 mt-3 mt-lg-5"></div>
                    

                </div>
            </div>
            <!--Anuncio Izquierdo-->
            <div class="col-12 col-lg-2 order-lg-last px-5 h-100 rounded-5 mt-5 ms-auto d-none d-sm-block" style="background: #fff; margin-left: 5%; margin-right : 5%;">
                <div class="d-flex justify-content-center mt-5">
                </div>

      
            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>
<?php if (isset($conn) && $conn) @$conn->close(); ?>