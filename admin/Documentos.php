<?php include("../db.php") ?>

<?php include("../partials/menuLat.php") ?>
<?php include("../partials/header.php") ?>

<title>Usuarios</title>

<div class="container">

    <div class="col-md-12">
        <a href="crearDocumento.php" title="añadir documento">
            <img src="../recursos/iconos/AddDocument.svg" alt="Añadir Usuario" width="42" height="42" class="crear_usuario">
        </a>
        <div class="card card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Titulo </th>
                        <th>Categoria</th>
                        <th>url</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //consulta a la base de datos
                    $query_doc = "SELECT * FROM documentos";
                    $result_documentos = mysqli_query($conexion, $query_doc);

                    //recorre la tabla atraves de un while e imprime los datos
                    while ($row = mysqli_fetch_array($result_documentos)) { ?>
                        <tr>
                            <td> <?php echo $row['Nombre_doc'] ?></td>
                            <td> <?php echo $row['Tipo_doc'] ?></td>
                            <td> <?php echo $row['url'] ?></td>
                            <td> <a href="editDocuments.php?id=<?php echo $row['idDocumento'] ?> " class="btn btn-success">
                                    <img src="../recursos/iconos/edit.svg" alt="Editar" width="32" height="32">
                                </a>
                            </td>
                            <td> <a href="delateUsers.php?id=<?php echo $row['idDocumento'] ?>" class="btn btn-danger">
                                    <img src="../recursos/iconos/delate.svg" alt="Borrar" width="32" height="32">
                                </a>
                            </td>
                        </tr>
                    <?php  } ?>

                </tbody>
            </table>
        </div>
    </div>

</div>








<?php include("../partials/footer.php") ?>