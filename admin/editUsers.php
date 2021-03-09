<?php include("../db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM usuarios WHERE idUsuarios = $id";
    $result = mysqli_query($conexion, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $Nombre = $row['Nombre'];
        $Apellido = $row['Apellido'];
        $Dependencia = $row['Dependencia'];
        $Usuario = $row['Usuario'];
        $Contraseña = $row['contraseña'];
    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Dependencia = $_POST['Dependencia'];
    $Usuario = $_POST['Usuario'];
    $Contraseña = $_POST['contraseña'];

    $query = "UPDATE usuarios set Nombre = '$Nombre', Apellido = '$Apellido', Dependencia ='$Dependencia', Usuario = '$Usuario' , contraseña = '$Contraseña' WHERE idUsuarios = '$id'";
    mysqli_query($conexion, $query);

    $_SESSION['message'] = 'Usuario actualizado';
    $_SESSION['message_type'] = 'info';
    header("Location: usuarios.php");
}

?>

<?php include("../partials/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editUsers.php?id= <?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="Nombre" value="<?php echo $Nombre; ?>" class="form-control" placeholder="&#xfe0f actualiza el Nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" name="Apellido" value="<?php echo $Apellido; ?>" class="form-control" placeholder="&#xfe0f actualiza el Apellido">
                    </div>
                    <div class="form-group">
                        <select name="Dependencia" value="<?php echo $Dependencia; ?>" class="form-control">
                            <option>Planeacion</option>
                            <option>Tesoreria</option>
                            <option>Sisben</option>
                            <option>Archivo</option>
                            <option>Sistemas</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="Usuario" value="<?php echo $Usuario; ?>" class="form-control" placeholder="&#xfe0f actualiza el Usuario">
                    </div>
                    <div class="form-group">
                        <input type="password" name="Contraseña" value="<?php echo $Contraseña; ?>" class="form-control" placeholder="&#xfe0f actualiza la contraseña">
                    </div>



                    <button class="btn btn-success" name="update">actualizar</button>
                </form>
            </div>
        </div>
    </div>

</div>

<?php include("../partials/footer.php") ?>