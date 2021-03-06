<?php
//incluir la conexion a la base de datos
include("../db.php");


if (isset($_POST['saveUser'])) {
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Dependencia = $_POST['Dependencia'];
    $Usuario = $_POST['Usuario'];
    $Contraseña = $_POST['Contraseña'];

    $query = "INSERT INTO usuarios(Nombre, Apellido, Dependencia, Usuario, Contraseña) VALUE('$Nombre', '$Apellido','$Dependencia','$Usuario','$Contraseña')";
    $result = mysqli_query($conexion, $query);

    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Usuario guardado';
    $_SESSION['message_type'] = 'success';



    header("Location: usuarios.php");
}
