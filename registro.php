<?php
ob_start();
?>
<?php
session_start();
if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == TRUE) {
    header("Location: home.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <!-- Importa los estilos de Bootstrap -->
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kKt27" crossorigin="anonymous">
    <style>
        body {
            background: url('img/fondoLogin.png') no-repeat center center fixed;
            background-size: cover;
        }

        .container {
            margin-top: 50px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .btn-primary {
            margin-right: 10px;
        }

        .btn-secondary {
            margin-left: 10px;
        }

        .card {
            max-width: 500px;
            width: 100%;
        }

        .row.justify-content-center {
            padding-top: 5%;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        if (isset($_POST['registro'])) {

            require("conexion.php");

            $email = $mysqli->real_escape_string($_POST['mail']);
            $nombre = $mysqli->real_escape_string($_POST['nombre']);
            $usuario = $mysqli->real_escape_string($_POST['usuario']);
            $password = md5($_POST['password']);
            $ip = $_SERVER['REMOTE_ADDR'];

            $consultausuario = "SELECT username FROM users WHERE username = '$usuario'";
            $consultaemail = "SELECT email FROM users WHERE email = '$email'";

            if ($resultadousuario = $mysqli->query($consultausuario));
            $numerousuario = $resultadousuario->num_rows;

            if ($resultadoemail = $mysqli->query($consultaemail));
            $numeroemail = $resultadoemail->num_rows;

            if ($numeroemail > 0) {
                echo "Este correo ya esta registrado, intenta con otro";
            } elseif ($numerousuario > 0) {
                echo "Este usuario ya existe";
            } else {

                $aleatorio = uniqid();

                $query = "INSERT INTO users (email,name,username,password,signup_date,last_ip,code) VALUES ('$email','$nombre','$usuario','$password',now(),'$ip','$aleatorio')";

                if ($registro = $mysqli->query($query)) {

                    Header("Refresh: 2; URL=index.php");

                    echo "Felicidades $usuario se ha registrado correctamente";

                    // Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
                    $email_to = $email;
                    $email_subject = "Confirma tu email";
                    $email_from = "perezchalanda.21@outlook.com";

                    $email_message = "Hola " . $usuario . ", para poder disfrutar de nuestro sitio web, debes confirmar tu email\n\n";
                    $email_message .= "Ingresa el siguiente codigo para confirmar tu email\n\n";
                    $email_message .= "Codigo: " . $aleatorio . "\n";


                    // Ahora se envía el e-mail usando la función mail() de PHP
                    $headers = 'From: ' . $email_from . "\r\n" .
                        'Reply-To: ' . $email_from . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();
                    @mail($email_to, $email_subject, $email_message, $headers);
                } else {

                    echo "Ha ocurrido un error en el registro, intentelo de nuevo";
                    header("Refresh: 2; URL=registro.php");
                }
            }

            $mysqli->close();
        }
        ?>
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <div class="row align-items-center h-100">
                    <div class="card mx-auto rounded-5 shadow" id="register-card">
                        <div class="card-body rounded">
                            <h3 class="card-title text-center mb-4">Regístrate en
                                <a href="url-de-inicio-de-sesion">
                                    <img src="img/Sin título.png" alt="" class="w-100">
                                </a>
                            </h3>
                            <form class="rounded-5" method="POST" action="registro.php"  enctype="multipart/form-data" >
                                <div class="form-group">
                                    <label for="name">Usuario</label>
                                    <input type="text" placeholder="Usuario" class="form-control" id="name" name="usuario" placeholder="Ingresa un usuario" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input type="text" placeholder="Nombre completo" class="form-control" id="name" name="nombre" placeholder="Ingresa tu nombre" required>
                                </div>

                                <div class="form-group">
                                    <label for="email">Correo Electrónico</label>
                                    <input type="email" placeholder="Correo electrónico" class="form-control" id="email" name="mail" placeholder="Ingresa tu correo electrónico" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input type="password" placeholder="Contraseña" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña" required>
                                </div>
                                <button type="submit" value="Registrarte" name="registro"  class="btn btn-primary btn-block rounded-pill" style="background-color: #FF5757;">Registrarse</button>
                            </form>
                            <hr>
                            <p class="text-muted text-center">¿Ya tienes cuenta? <a href="index.php">Inicia sesión aquí.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Importa los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha256-hfxyG0aT6UOuwkHl/OZrOQO8oTYe+OT9yPlIV+y65jc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kKt27" crossorigin="anonymous"></script>
</body>

</html>
<?php
ob_end_flush();
?>