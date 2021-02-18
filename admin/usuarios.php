<?php include("../db.php") ?>

<?php include("../partials/header.php") ?>
<?php include("../partials/menuLat.php") ?>


<title>Usuarios</title>

<div class="container">
    <h1>Usuarios</h1>
    <div class="col-md-10">
        <a href="crearUsuario.php">
            <img src="../recursos/iconos/anadirUser.svg" alt="Añadir Usuario" width="42" height="42" class="crear_usuario">
        </a>
        <div class="card card-body">
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
    </div>

</div>








<?php include("../partials/footer.php") ?>