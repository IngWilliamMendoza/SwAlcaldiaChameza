<?php include("../partials/header.php") ?>
<title>Crear Usuario</title>
<?php
require '../partials/menuLat.php';
include("../db.php");
?>

<div class="container-fluid">

    <div class="container p-2 ">
        <div class="row d-flex justify-content-center ">
            <div class="col-6 my-5 py-5">

                <?php if (isset($_SESSION['message'])) { ?>
                    <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                        <!--<strong>Formulario Creado!</strong> La tarea a sido creada de forma correcta.-->
                        <?= $_SESSION['message']   ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php
                    //limpia los datos en sesion
                    session_unset();
                }
                ?>


                <div class="card card-body ">
                    <form action="saveUser.php" method="POST">
                        <div class="form-group ">
                            <h2 class="text-center">Crear Usuario</h2>
                        </div>
                        <div class="form-group ">
                            <input type="text" name="Nombre" class="form-control" placeholder="&#x2328 Nombre" autofocus>
                        </div>
                        <div class="form-group ">
                            <input type="text" name="Apellido" class="form-control" placeholder="&#x2328 Apellido" autofocus>
                        </div>
                        <div class="form-group ">
                            <select class="form-control" name="Dependencia">
                                <option value="17">Planeacion</option>
                                <option value="18">Tesoreria</option>
                                <option value="19">Sisben</option>
                                <option value="20">Archivo</option>
                                <option value="21">Sistemas</option>
                            </select>
                        </div>
                        <div class="form-group ">
                            <input type="text" name="Usuario" class="form-control" placeholder="&#x1f464 Usuario" autofocus>
                        </div>
                        <div class="form-group ">
                            <input type="password" name="Contraseña" class="form-control" placeholder="&#x1f512 Contraseña" autofocus>
                        </div>
                        <div class="form-group ">
                            <input type="text" name="email" class="form-control" placeholder="&#128231 Email" autofocus>
                        </div>
                        <div class="form-group ">
                            <input type="text" name="Telefono" class="form-control" placeholder="&#9743 Telefono" autofocus>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="saveUser" value="Crear">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("../partials/footer.php") ?>