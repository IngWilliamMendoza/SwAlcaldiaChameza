<?php include("../db.php");



if (isset($_POST['saveDependencia'])) {
    $Nombre = $_POST['Nombre_dep'];

    $query = "INSERT INTO dependencia(Nombre_dep) VALUE('$Nombre')";
    $result = mysqli_query($conexion, $query);

    if (!$result) {
        die("Se ha presaentado un error");
    }

    $_SESSION['message'] = 'dependencia guardada';
    $_SESSION['message_type'] = 'success';



    header("Location: dependencias.php");
}
