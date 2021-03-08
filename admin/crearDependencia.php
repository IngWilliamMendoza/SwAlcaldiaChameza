<?php include("../partials/header.php") ?>
<title>Crear Usuario</title>
<?php require '../partials/menuLat.php' ?>

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
                    <form action="saveDependencia.php" method="POST">
                        <div class="form-group ">
                            <h2 class="text-center">Crear Dependencia</h2>
                        </div>
                        <div class="form-group ">
                            <input type="text" name="Nombre_dep" class="form-control" placeholder="&#x2328 Nombre" autofocus>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="saveDependencia" value="Crear">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("../partials/footer.php") ?>