<?php include "partials/header.php"; ?>
<title>Login</title>


<div class="container">
  <div class="LoginVista">
    <div class="divLogin">
      <h2 class="bg-primary">LOGIN</h2>

      <form action="partials/registro.php" method="post">
        <input type="text" name="email" placeholder="&#x2328 Ingrese su usuario">
        <input type="password" name="password" placeholder="&#128272  ingrese su contraseña">
        <input type="submit" value="Send">
      </form>

    </div>


    <div class="textLogin">
      <h2>Tips de seguridad</h2>
      <aside>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque excepturi aliquid, amet, molestiae minima ad ab nihil dicta ducimus iusto itaque, neque nisi sed ratione modi! Voluptatum nihil delectus doloribus.<br>
        <ol>
          <li>Asegura las redes.</li>
          <li>Protege tu WiFi.</li>
          <li>Cuidado con dónde te conectas.</li>
          <li>Mantén los ordenadores actualizados.</li>
          <li>Usa contraseñas seguras.</li>
          <li>No instales cualquier cosa.</li>
          <li>Configura el bloqueo del ordenador.</li>
        </ol>

      </aside>
    </div>
  </div>
</div>



<?php include 'partials/footer.php' ?>


</html>