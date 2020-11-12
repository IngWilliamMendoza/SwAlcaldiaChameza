<?php

// $server = 'localhost';
// $username = 'root';
// $password = '';
// $database = 'php_login_database';

// try {
//   $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
// } catch (PDOException $e) {
//   die('Connection Failed: ' . $e->getMessage());
// }

$conexion = mysqli_connect("127.0.0.1:33065", "root", "SwChameza") or
  die("Problemas con la conexion");

echo "Conexion correcta"

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

</body>

</html>