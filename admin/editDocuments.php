<?php include("../db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM documentos WHERE idDocumento = $id";
    $result = mysqli_query($conexion, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $Nombre = $row['Nombre_doc'];
        $Tipo_doc = $row['Tipo_doc'];
        $url = $row['url'];
    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $Nombre = $_POST['Nombre_doc'];
    $Tipo_doc = $_POST['Tipo_doc'];
    $url = $_POST['url'];

    $query = "UPDATE documentos set Nombre_doc = '$Nombre', Tipo_doc = '$Tipo_doc', url = '$url' WHERE idDocumento = '$id'";
    mysqli_query($conexion, $query);

    $_SESSION['message'] = 'Documento actualizado';
    $_SESSION['message_type'] = 'info';
    header("Location: Documentos.php");
}

?>

<?php include("../partials/header.php") ?>
<?php include("../partials/menuLat.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-8 mx-auto">
            <div class="card card-body my-5">
                <div class="form-group ">
                    <h2 class="text-center">Editar Documento</h2>
                </div>
                <form action="editDocuments.php?id= <?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="Nombre_doc" value="<?php echo $Nombre; ?>" class="form-control" placeholder="&#xfe0f Nombre del documento">
                    </div>
                    <div class="form-group">
                        <input type="text" name="Tipo_doc" value="<?php echo $Tipo_doc; ?>" class="form-control" placeholder="&#xfe0f Tipo de documento">
                    </div>

                    <div class="form-group">
                        <input type="file" name="url" value="<?php echo $url; ?>" class="form-control" placeholder="&#xfe0f seleccionar el documento">
                    </div>

                    <button class="btn btn-success" name="update">actualizar</button>
                </form>
            </div>
        </div>
    </div>

</div>

<?php include("../partials/footer.php") ?>