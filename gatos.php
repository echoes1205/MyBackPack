

<!DOCTYPE html>
<html lang="es">

<head>
<title>Dibujos de lobos</title>
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

<body>
   

    <!-- Navbar -->
    <?php include "header.php"; ?>
    <div class="container-fluid mt-5" style="margin-top:566px;">
        <div class="row justify-content-evenly">
            <!--Anuncio derecho-->
            <div class="col-12 col-lg-2 order-lg-last px-5 h-100 rounded-5 mt-5 ms-auto d-none d-sm-block" style="background: #fff; margin-left: 5%; margin-right : 5%;">
                <div class="d-flex justify-content-center mt-5">
                </div>

                <p>Aquí va el contenido de anuncios</p>
                <p>Esto es solo un ejemplo de cómo se ve.</p>
                <p>Puedes agregar todo lo que necesites.</p>
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
                            <p class="m-0 fw-bold text-center fs-4">Dibujos de gatos para imprimir y colorear</p>

                            <span class="text-muted fs-7 " style="display: flex; align-items: center; line-height: 1.5;">
                            ¡Colorea los gatos que más te gusten!
                            Con los dibujos de gatos podrás darle los colores que quieras al minino de la ilustración ¡los que más te gusten!
                        </div>

                    </div>
                    <!-- carrousel -->
                    <div class="card overflow-hidden shadow border-0 rounded-5 mt-2" style="color: #000;">
                        <div id="carrusel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/dibujos-gatos-para-colorear.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/dibujos-gatos2-para-colorear.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/dibujos-gatos3-para-colorear.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carrusel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carrusel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="h-100 mt-3 mt-lg-5"></div>
                    <div>
                        <span class="text-muted fs-7" >Pásatelo genial coloreando los adorables dibujos de gatos: pequeños, grandes, con pelo corto o con pelo largo ¡hay de todo tipo! Descarga de forma gratuita todos los dibujos de gatos que quieras ¡ya casi se pueden oír sus ronroneos de lo contentos que están de que los colorees!
                        </span>
                        <br>
                        <span class="text-muted fs-7">Los gatos son criaturas adorables que despiertan gran fascinación, desde páginas web, blogs, hasta infinidad de perfiles en redes sociales dedican sus espacios a este peculiar amiguito. No se trata de algo momentáneo o pasajero, incluso los videos de felinos son unos de los más vistos en la web.
                        </span>
                        <br>
                        <span class="text-muted fs-7">Imprime dibujos de gatos y pásalo bien coloreando estos grandiosos cuidadores del hogar con los niños. Aquí en nuestro portal están todos los que estás buscando. Deja que los más pequeños imaginen y se relacionen de manera creativa con ellos.
                        </span>
                        <br>
                        <span class="text-muted fs-7">Son grandes compañeros de habitación, solo hay que tener cuidado con sus garras cuando jueguen con ellos, rasguñan con fuerza si se alteran o se emocionan demasiado, pero no es algo que no se pueda solucionar con uno de los entretenidos juguetes para gatos que se consiguen en el mercado.
                        </span>
                        <br>
                    </div>
                </div>
            </div>
            <!--Anuncio Izquierdo-->
            <div class="col-12 col-lg-2 order-lg-last px-5 h-100 rounded-5 mt-5 ms-auto d-none d-sm-block" style="background: #fff; margin-left: 5%; margin-right : 5%;">
                <div class="d-flex justify-content-center mt-5">
                </div>

                <p>Aquí va el contenido de anuncios</p>
                <p>Esto es solo un ejemplo de cómo se ve.</p>
                <p>Puedes agregar todo lo que necesites.</p>
            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>
<?php if (isset($conn) && $conn) @$conn->close(); ?>