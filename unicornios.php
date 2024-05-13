

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
                            <p class="m-0 fw-bold text-center fs-4">Dibujos de unicornios para Colorear</p>

                            <span class="text-muted fs-7 " style="display: flex; align-items: center; line-height: 1.5;">La idea de imprimir y colorear dibujos de unicornios puede ser útil para conectar a los niños de manera positiva con la naturaleza. Si tus hijos se sienten muy atraídos por estas maravillosas criaturas, no es mala idea llevarlos para algún parque donde haya espacios para montar a caballo, ya que esta resulta una experiencia de lo más cercana a lo que sería disfrutar de la compañía de un unicornio.
                                <br>
                                Imprime dibujos de lobos, criaturas majestuosas y cautivantes. Los niños siempre deben
                                estar relacionados con el Medioambiente, y esto implica que conozcan la belleza, la
                                docilidad y el peligro. Es algo que les enseña a respetar las diferentes formas de vida
                                y sus espacios, ya que no puede plantarse alguien a jugar con un lobo como con un
                                perro.</span>
                        </div>

                    </div>
                    <!-- carrousel -->
                    <div class="card overflow-hidden shadow border-0 rounded-5 mt-2" style="color: #000;">
                        <div id="carrusel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/colorear-unicronio-tumbado.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/colorear-unicronio2-tumbado.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/colorear-unicronio3-tumbado.png" class="d-block w-100" alt="...">
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

                        <span class="text-muted fs-7">El amor y el respeto por la vida animal son fundamentales, y puedes hacer que tus hijos aprendan estas increíbles cualidades humanas a través de los colores, la imaginación y la creatividad, pues una sana relación con los animales les dotará de la empatía necesaria para tener mejores relaciones públicas y sociales con las demás personas.
                            <br>
                        </span>
                        <span class="text-muted fs-7">Aunque los unicornios son criaturas mitológicas, descritas en los albores de la historia, estos representan una fuerte conexión con la naturaleza y con la vida animal. Y de hecho, la mitología es la opción ideal para que tus hijos desarrollen su creatividad e imaginación
                            <br>
                        </span>
               
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