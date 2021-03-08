<?php include("../db.php");



if (isset($_POST['saveDoc'])) {
    $Nombre = $_POST['Nombre_doc'];
    $Categoria = $_POST['Tipo_doc'];
    $url = $_POST['url'];


    $query = "INSERT INTO documentos(Nombre_doc, Tipo_doc, url) VALUE('$Nombre', '$Categoria','$url')";
    $result = mysqli_query($conexion, $query);

    if (!$result) {
        die("Se ha presaentado un error");
    }

    $_SESSION['message'] = 'Documento guardado';
    $_SESSION['message_type'] = 'success';



    header("Location: documentos.php");
}
