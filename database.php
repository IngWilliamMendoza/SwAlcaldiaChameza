<?php
include('db.php');
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;

$conexion = mysqli_connect('localhost:33065', 'root', 'toor', 'swchamezadb');
$consulta = "SELECT*FROM usuarios where Usuario = '$usuario' and contraseña = '$contraseña'";

$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
  header("location:admin/administrador.php ");
} else {
?>
  <?php
  header("location:Login/login.php ");

  ?>

<?php

}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>

