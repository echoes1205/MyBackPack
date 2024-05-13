
<!DOCTYPE html>
<html>

<head>
    <title>Dibujos</title>
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
    <style>
        .container {
            margin-top: 20px;
            display: flex;
            min-height: 90vh;
            justify-content: center;
            /* Para centrar horizontal */
            align-items: center;
            /* Para centrar vertical */
        }

        .app-icon {
            border-radius: 50%;
            width: 60px;
            height: 60px;
            margin: 10px auto;
            text-align: center;
            padding-top: 12px;
            font-size: 24px;
            color: white;
            background-color: #007aff;
            box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.25);
        }

        .cuadrado {
            width: 200px;
            height: 200px;
            background-color: white;
            margin-bottom: 20px;
            border-radius: 25px;
            display: inline-block;
            width: 150px;
            height: 150px;
            margin-right: 1em;


        }

        .cuadradoMorado {
            width: 200px;
            height: 200px;
            background-color: rgb(134, 16, 150);
            margin-bottom: 20px;
            border-radius: 25px;
            display: inline-block;
            width: 150px;
            height: 150px;
            margin-right: 1em;


        }

        .cuadradoRojo {
            width: 200px;
            height: 200px;
            background-color: rgb(250, 67, 67);
            margin-bottom: 20px;
            border-radius: 25px;
            display: inline-block;
            width: 150px;
            height: 150px;
            margin-right: 1em;


        }

        .cuadradoVerde {
            width: 200px;
            height: 200px;
            background-color: rgb(56, 167, 62);
            margin-bottom: 20px;
            border-radius: 25px;
            display: inline-block;
            width: 150px;
            height: 150px;
            margin-right: 1em;


        }

        .cuadradoAzul {
            width: 200px;
            height: 200px;
            background-color: rgba(96, 131, 228, 0.973);
            margin-bottom: 20px;
            border-radius: 25px;
            display: inline-block;
            width: 150px;
            height: 150px;
            margin-right: 1em;


        }

        .app-name {
            text-align: center;
            margin-top: 5px;
            font-weight: bold;
            font-size: 14px;
            color: #333;
        }

        .row {
            margin-top: 10px;
        }

        .col-4 {
            text-align: center;
        }

        .cuadrados-contenedor {
            background-color: #D2F7FF;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: -10px;
            border-radius: 10%;

        }

        .col-12 {
            border-radius: 10px;
            overflow: hidden;
        }

        .center-container {
            margin: 0 auto;
        }
    </style>
</head>

<body>
 

    <!-- Navbar -->
    <?php include "header.php"; ?>

    <div class="container center-container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-6">
                        <div class="cuadrado d-flex justify-content-center shadow">
                            <a href="leonraton.php">
                                <img src="img/leonR.png" alt="" style="width: 120px; height:130px; margin-top: 6px;"><i class="fa fa-camera"></i>
                            </a>
                        </div>
                        <div class="app-name">El león y el ratón</div>
                    </div>
                    <div class="col-6">
                        <div class="cuadrado d-flex justify-content-center shadow">
                            <a href="dosamigos.php">
                                <img src="img/amigos.png" alt="" style="width: 120px; height:130px; margin-top: 6px;"><i class="fa fa-camera"></i>
                            </a>
                        </div>
                        <div class="app-name">Los dos amigos</div>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-6">
                        <div class="cuadrado d-flex justify-content-center shadow">
                            <a href="dosgallos.php">
                                <img src="img/gallos.png" alt="" style="width: 120px; height:130px; margin-top: 6px;"><i class="fa fa-camera"></i>
                            </a>
                        </div>
                        <div class="app-name">Los dos gallos</div>
                    </div>
                    <div class="col-6">
                        <div class="cuadrado d-flex justify-content-center shadow">
                            <a href="leonmosquito.php">
                                <img src="img/leonM.png" alt="" style="width: 120px; height:130px; margin-top: 6px;"><i class="fa fa-camera"></i>
                            </a>
                        </div>
                        <div class="app-name">El león y el mosquito</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row fixed-bottom">
            <div class="col-12 d-flex justify-content-center rounded mb-3">
                <div class="cuadrados-contenedor align-self-center rounded-5 shadow py-3 px-2 d-flex justify-content-between">
                    <div class="cuadrado d-flex align-items-center justify-content-center">
                        <a href="">
                            <img src="img/tareasIconL.png" alt="" style="width: 120px; height:130px; margin-top: 6px;">
                        </a>
                    </div>
                    <div class="cuadradoVerde d-flex align-items-center justify-content-center">
                        <a href="dibujos.php">
                            <img src="img/imagendibujo.png" alt="" style="width: 120px; height:130px; margin-top: 6px;">
                        </a>
                    </div>
                    <div class="cuadradoAzul d-flex align-items-center justify-content-center">
                        <a href="escuelas.php">
                            <img src="img/school.png" alt="" style="width: 120px; height:130px; margin-top: 6px;">
                        </a>
                    </div>
                    <div class="cuadradoMorado d-flex align-items-center justify-content-center">
                        <a href="">
                            <img src="img/trabalenguasIconL.png" alt="" style="width: 120px; height:130px; margin-top: 6px;">
                        </a>
                    </div>
                    <div class="cuadradoRojo d-flex align-items-center justify-content-center">
                        <a href="dosgallos.php">
                            <img src="img/gallos.png" alt="" style="width: 120px; height:130px; margin-top: 6px;">
                        </a>
                    </div>
                    <div class="cuadrado d-flex justify-content-center">
                        <a href="home.php">
                            <img src="img/backICon.png" alt="" style="width: 120px; height:130px; margin-top: 6px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php if (isset($conn) && $conn) @$conn->close(); ?>