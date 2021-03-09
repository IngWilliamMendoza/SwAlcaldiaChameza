<?php include("../db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM dependencia WHERE idDependencia = $id";
    $result = mysqli_query($conexion, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $Nombre = $row['Nombre_dep'];
    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $Nombre = $_POST['Nombre_dep'];


    $query = "UPDATE dependencia set Nombre_dep = '$Nombre' WHERE idDependencia = '$id'";
    mysqli_query($conexion, $query);

    $_SESSION['message'] = 'Dependencia actualizada';
    $_SESSION['message_type'] = 'info';
    header("Location: dependencias.php");
}

?>

<?php include("../partials/header.php") ?>
<?php include("../partials/menuLat.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-8 mx-auto">
            <div class="card card-body my-5">
                <div class="form-group ">
                    <h2 class="text-center">Editar Dependencia</hh2>
                </div>
                <form action="editDependencia.php?id= <?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="Nombre_dep" value="<?php echo $Nombre; ?>" class="form-control" placeholder="&#xfe0f Nombre de dependencia">
                    </div>

                    <button class="btn btn-success" name="update">actualizar</button>
                </form>
            </div>
        </div>
    </div>

</div>

<?php include("../partials/footer.php") ?>