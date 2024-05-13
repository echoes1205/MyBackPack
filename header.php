<div class="d-flex align-items-center  fixed-top shadow pb-2" style="min-height: 58px; z-index: 10; background-color:#32C7EB">
    <div class="container-fluid ">
        <div class="row align-items-center ">
            <!-- búsqueda -->
            <div class="col d-flex align-items-center">
                <!-- logo -->
                <a class="navbar-brand" href="home.php">
                    <img src="img/logo.png" alt="logo" width="150" height="50" class="w-100">
                </a>

            </div>
            <!-- Menús -->
            <div class="col d-flex align-items-space-evenly justify-content-end justify-content-space-evenly">
                <!------------ Escritorio ------------>
                <!-- Perfil -->
                <a class="d-none d-lg-flex align-items-center justify-content-center me-1 btn-perfil" type="button">
                    <img src="img/user-placeholder.png" alt="usuario" class="rounded-circle me-1"
                        style="width: 40px; height: 40px;object-fit: cover;">
                </a>

                <a href="nosotros.php"
                    class="d-none d-lg-flex input-group-text align-items-center justify-content-center p-2 px-3 rounded-pill btn border-0 btn-volver"
                    type="button" style="background-color: #E9ECEF; font-size: 1em;">
                    <span>Nosotros</span>
                </a>

                <a href="contacto.php"
                    class="d-none d-lg-flex input-group-text align-items-center justify-content-center p-2 px-3 rounded-pill btn border-0 btn-volver"
                    type="button" style="background-color: #E9ECEF; font-size: 1em;">
                    <span>Contacto</span>
                </a>

                <a href="alumnos.php"
                    class="d-none d-lg-flex input-group-text align-items-center justify-content-center p-2 px-3 rounded-pill btn border-0 btn-volver"
                    type="button" style="background-color: #E9ECEF; font-size: 1em;">
                    <span>Alumnos</span>
                </a>

            </div>
        </div>
    </div>
</div>

<script>
function goBack() {
    window.history.back();
}

function goBackMobile() {
    window.history.back();
}
</script>