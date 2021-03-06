<title>Login</title>

<?php require '../partials/header.php' ?>


<main class="d-flex justify-content-center align-items-center">

  <div class="container">
    <div class="row d-lg-flex align-items-center justify-content-between p-3 p-lg-4">
      <div class="contenedor-form-login col-12 col-sm-12 col-md-10 col-lg-5 my-4">
        <!-- formulario de login -->
        <form action="../database.php" method="post" class="form-login">
          <h1 class="my-4">Iniciar Sesión</h1>
          <input type="text" class="form-control my-4" placeholder="Usuario" name="usuario" required>
          <input type="password" class="form-control my-4" placeholder="Contraseña" name="contraseña" required>
          <input type="submit" class="boton__login py-2 px-4 mb-5 rounded" value="Iniciar Sesion" id="Login">
        </form>
      </div>

      <div class="info-container col-12 col-sm-12 col-md-10 col-lg-5 p-3">
        <!-- contenedor de la caja de la imagen y informacion -->
        <h2 class="m-3">Alcaldia de Chameza</h2>
        <p>Software para la gestion administrativa de la alcaldia de Chameza: <br>Su fundación data desde antes de la conquista de América, de 1429, cuando el cacique Chámeza, amo de estas tierras, la bautizó con su nombre. Y Fue erigido como municipio en 1959.</p>
        <a href="http://www.chameza-casanare.gov.co/" target="_blank">
          <button class="btn d-block m-auto" id="btn-info"> Mas informacion </button>
        </a>
      </div>

      <!-- contenedor del formulario de Login -->

    </div>

  </div>

</main>


<?php include '../partials/footer.php' ?>

