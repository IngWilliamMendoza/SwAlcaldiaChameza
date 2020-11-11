<?php include("db.php") ?>

<?php include("partials/header.php") ?>
<?php include("partials/menuLat.php") ?>

<title>Usuarios</title>

<div class="container">
    <div class="row">
        <div class="d-inline-block col-7">
            <input class="form-control " type="text" placeholder="Search" aria-label="Search">
        </div>
        <div class="d-inline-block col-4 m-4 l-4">
            <a href="crearUsuario.php">
                <img src="recursos/iconos/anadirUser.svg" alt="Añadir Usuario" width="42" height="42">
            </a>
        </div>

    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Dependencia</th>
                <th scope="col">Usuario</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //consulta a la base de datos
            $query = "SELECT * FROM usuarios";
            $result_usuarios = mysqli_query($conn, $query);

            //recorre la tabla atraves de un while e imprime los datos
            while ($row = mysqli_fetch_array($result_usuarios)) { ?>
                <tr class="bg-white">
                    <td scope="row"> <?php echo $row['nombre'] ?></td>
                    <td scope="row"> <?php echo $row['apellido'] ?></td>
                    <td scope="row"> <?php echo $row['dependencia'] ?></td>
                    <td scope="row"> <?php echo $row['usuario'] ?></td>
                    <td scope="row">
                        <a href="editUsers.php?id=<?php echo $row['id'] ?> " class="btn btn-success">
                            <img src="recursos/iconos/edit.svg" alt="Editar" width="32" height="32">
                        </a>
                    </td>
                    <td scope="row">
                        <a href="delateUsers.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                            <img src="recursos/iconos/delate.svg" alt="Editar" width="32" height="32">
                        </a>
                    </td>
                </tr>
            <?php  } ?>

        </tbody>
    </table>
</div>

</div>








<?php include("partials/footer.php") ?>