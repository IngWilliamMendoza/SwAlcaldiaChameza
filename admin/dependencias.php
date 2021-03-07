<?php include("../db.php") 
/**
 * importaciones de las clases de php
 */
?>

<?php include("../partials/header.php") ?>
<?php include("../partials/menuLat.php") ?>

<div class="container">
    <div class="row col-12 col-lg-12 d-flex flex-column mt-5 mx-auto">
        <h1 class="title__user mx-auto my-3">Dependencias</h1>
        <div class=" col-12">
            <a href="crearUsuario.php">
                <img src="../recursos/iconos/agregar-dependencia.svg" alt="Añadir Usuario" width="42" height="42" class="crear_usuario">
            </a>
            <div class="card card-body col-12 my-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Dependencia</th>
                            <th>Usuario</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //consulta a la base de datos
                        $query = "SELECT * FROM usuarios";
                        $result_usuarios = mysqli_query($conexion, $query);

                        //recorre la tabla atraves de un while e imprime los datos
                        while ($row = mysqli_fetch_array($result_usuarios)) { ?>
                            <tr>
                                <td> <?php echo $row['Nombre'] ?></td>
                                <td> <?php echo $row['Apellido'] ?></td>
                                <td> <?php echo $row['Dependencia'] ?></td>
                                <td> <?php echo $row['Usuario'] ?></td>
                                <td> <a href="editUsers.php?id=<?php echo $row['idUsuarios'] ?> " class="btn btn-success">
                                        <img src="../recursos/iconos/edit.svg" alt="Editar" width="32" height="32">
                                    </a>
                                </td>
                                <td> <a href="delateUsers.php?id=<?php echo $row['idUsuarios'] ?>" class="btn btn-danger">
                                        <img src="../recursos/iconos/delate.svg" alt="Borrar" width="32" height="32">
                                    </a>
                                </td>
                            </tr>
                        <?php  } ?>

                    </tbody>
                </table>
            </div>


            <nav class="container-pagination col-3 m-auto">
                <ul class="pagination pagination-sm">
                    <li class="page-item disabled">
                        <a class="page-link" href="#!" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#!">Next</a>
                    </li>
                </ul>
            </nav>


        </div>

    </div>

</div>


<?php include("../partials/footer.php") ?>