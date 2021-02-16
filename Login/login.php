<title>Login</title>

<?php require '../partials/header.php' ?>


<main>

  <div class="Upcontainer">

    <div class="back-container">

      <!-- contenedor del formulario de login -->
      <div class="contenedor-login-back">

      </div>

      <!-- contenedor de la caja de la imagen y informacion -->
      <div class="container-imag-login">
        <h3>Alcaldia de Chameza</h3>
        <p>Software para la gestion administrativa de la alcaldia de Chameza</p>
        <button id="btn-info"> Mas informacion </button>
      </div>


    </div>

    <!-- contenedor del formulario de Login -->
    <div class="contenedor-form-login">
      <!-- formulario de login -->
      <form action="../database.php" method="post" class="form-login">
        <h2>Iniciar Sesión</h2>
        <input type="text" placeholder="Usuario" name="usuario" required>
        <input type="password" placeholder="Contraseña" name="contraseña" required>
        <input type="submit" value="Iniciar Sesion" id="Login">
      </form>

    </div>

  </div>

</main>


<?php include '../partials/footer.php' ?>



















<!-- <div class="container">
  <div class="divLogin">
    <h1>LOGIN</h1>

    <form action="partials/registro.php" method="post">
      <input type="text" name="email" placeholder="&#x2328 Ingrese su usuario">
      <input type="password" name="password" placeholder="&#128272 ingrese su contraseña">
      <input type="submit" value="Send">
    </form>

  </div>
</div>

<div class="textLogin">
  <h1>La Alcaldia de Chameza</h1>
  <aside>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias atque nesciunt assumenda magni laudantium tempore vero officia quibusdam! Debitis neque quasi at error. Magni neque culpa, voluptatem temporibus reprehenderit esse?
    Sed dolore voluptate sit alias? Optio similique numquam atque iure! Voluptatibus cum corrupti rerum amet quaerat minima eaque, itaque autem eveniet qui sint illo, alias ducimus! Consequatur iure assumenda maiores?
    Nisi, non molestiae excepturi magni dolores porro sint ad, reprehenderit perferendis cupiditate nihil voluptates rerum expedita? Minima facere itaque exercitationem beatae? Cumque at fuga exercitationem ipsa obcaecati autem praesentium mollitia!
  </aside>
</div> -->