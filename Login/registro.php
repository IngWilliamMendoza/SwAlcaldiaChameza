<?php 

 require 'database.php';

 $message ='';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email',$_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password',$password);

    if ($stmt->execute()) {
        $message = 'Usuario nuevo creado';
    }else {
        $message = 'error, no se pudo registrar';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?>

    <h1>REGISTRO</h1>
    <span>ir a <a href="login.php">LOGIN</a></span>

    <form action="registro.php" method="post">
        <input type="text" name="email" placeholder="Ingrese su usuario">
        <input type="password" name="password" placeholder="ingrese su contraseña">
        <input type="password" name="conf_contraseña" placeholder="confirme su contraseña">
        <input type="submit" value="Send">
        
        </form>
</body>
</html>