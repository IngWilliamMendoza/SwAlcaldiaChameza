<?php include("../db.php");



if (isset($_POST['saveUser'])) {
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Dependencia = $_POST['Dependencia'];
    $Usuario = $_POST['Usuario'];
    $contraseña = $_POST['Contraseña'];
    $email = $_POST['email'];
    $Telefono = $_POST['Telefono'];

    $query = "INSERT INTO usuarios(Nombre, Apellido, Dependencia, Usuario, Contraseña, email, Telefono, idDependencia) VALUE('$Nombre', '$Apellido','$Dependencia','$Usuario','$contraseña', '$email', '$Telefono','$Dependencia')";
    $result = mysqli_query($conexion, $query);

    if (!$result) {
        die("Se ha presentado un error");
    }

    $_SESSION['message'] = 'Usuario guardado';
    $_SESSION['message_type'] = 'success';



    header("Location: usuarios.php");
}
