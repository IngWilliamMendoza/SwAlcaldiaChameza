<?php

include("../db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM usuarios WHERE idUsuarios = $id";
    $result = mysqli_query($conexion, $query);

    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Usuario eliminada';
    $_SESSION['message_type'] = 'danger';
    header("Location: usuarios.php");
}
