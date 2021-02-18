<?php

include("../db.php");

if (isset($_GET['idDocumento'])) {
    $id = $_GET['idUsuarios'];
    $query = "DELETE FROM documentos WHERE idDocumento = $id";
    $result = mysqli_query($conexion, $query);

    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Documento eliminado';
    $_SESSION['message_type'] = 'danger';
    header("Location: Documentos.php");
}
