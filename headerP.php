<div class="d-flex align-items-center fixed-top shadow" style="min-height: 58px; z-index: 10; background-color:#32C7EB">
   <div class="container-fluid">
      <div class="row align-items-center">
         <!-- búsqueda -->
         <div class="col d-flex align-items-center">
            <!-- logo -->
            <a class="navbar-brand" href="home.php">
               <img src="img/logoP.png" alt="logo" width="150" height="50" class="w-100">
            </a>

         </div>
         <!-- Menús -->
         <div class="col d-flex align-items-center justify-content-end">
            <!------------ Escritorio ------------>
            <!-- Cerrar Sesión -->
            <button onclick="goBack()"
               class="d-none d-lg-flex input-group-text align-items-center justify-content-center p-2 px-3 rounded-pill btn border-0 btn-volver"
               type="button" style="background-color: #E9ECEF; font-size: 1em;">
               <span>Volver</span>
            </button>
            <!------------ Movil ------------>
            <!-- Perfil -->
            <!-- Cerrar Sesión -->
            <button onclick="goBackMobile()"
               class="d-flex d-lg-none input-group-text align-items-center justify-content-center p-1 mx-1 rounded-circle btn border-0 btn-volver"
               type="button" style="width: 40px; height:40px; background-color: #E9ECEF;">
               <span class="material-icons-round align-middle text-muted" style="font-size: 1em;">arrow_back</span>
            </button>
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