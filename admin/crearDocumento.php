<?php include("../partials/header.php") ?>
<title>Crear Usuario</title>
<?php require '../partials/menuLat.php' ?>

<div class="container-fluid">

    <div class="container p-4">
        <div class="row">
            <div class="col-md-6">

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
                            <h2 class="text-center">Crear Documento</h2>
                        </div>
                        <div class="form-group ">
                            <input type="text" name="Nombre" class="form-control" placeholder="&#x2328 Titulo del documento" autofocus>
                        </div>
                        <div class="form-group ">
                            <input type="text" name="Apellido" class="form-control" placeholder="&#x2328 Tipo de documento" autofocus>
                        </div>


                        <input type="submit" class="btn btn-success " name="Examinar" value="Examinar">

                        <input type="submit" class="btn btn-success btn-block" name="saveUser" value="Crear">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("../partials/footer.php") ?>