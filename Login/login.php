<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

<?php 

include "partials/header.php";

?>

<div class="divtextoLogin">
    <div class="divLogin">
      <h1>LOGIN</h1>
      <!--<span>ir a <a href="registro.php">REGISTRAR</a></span>-->
    
      <form action="partials/registro.php" method="post">
        <input type="text" name="email" placeholder="Ingrese su usuario">
        <input type="password" name="password" placeholder="ingrese su contraseña">
        <input type="submit" value="Send">   
      </form>

    </div>

    <div class="fondoLogin">
        <img src="recursos/imagenes/chameza.jpg" alt="Chameza">
    </div>
       
    

</div>
    

    <?php 
    
    include 'partials/footer.php' 
    
    ?>
</body>
</html>