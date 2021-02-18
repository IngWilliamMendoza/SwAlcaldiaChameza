<?php

include("../db.php");

if (isset($_GET['idUsuarios'])) {
    $id = $_GET['idUsuarios'];
    $query = "DELETE FROM usuarios WHERE idUsuarios = $id";
    $result = mysqli_query($conexion, $query);

    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Usuario eliminada';
    $_SESSION['message_type'] = 'danger';
    header("Location: usuarios.php");
}
