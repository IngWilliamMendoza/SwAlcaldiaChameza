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

<?php require 'partials/header.php' ?>
    <h1>Login</h1>
    <span>ir a <a href="registro.php">REGISTRAR</a></span>
    <form action="registro.php" method="post">
    <input type="text" name="email" placeholder="Ingrese su usuario">
    <input type="password" name="password" placeholder="ingrese su contraseña">
    <input type="submit" value="Send">
    
    </form>

</body>
</html>