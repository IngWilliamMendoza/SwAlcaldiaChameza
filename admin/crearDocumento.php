<?php include("../partials/header.php") ?>
<title>Crear Documento</title>
<?php require '../partials/menuLat.php' ?>

<div class="container-fluid">

    <div class="container">
        <div class="row d-flex justify-content-center mx-auto my-5">
            <div class="col-md-6 my-5">

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
                    <form action="saveDoc.php" method="POST">
                        <div class="form-group ">
                            <h2 class="text-center mx-auto my-3">Crear Documento</h2>
                            <br>
                        </div>
                        <div class="form-group ">
                            <input type="text" name="Nombre_doc" class="form-control my-2" placeholder="&#x2328 Titulo del documento" autofocus>
                        </div>
                        <div class="form-group ">
                            <input type="text" name="Tipo_doc" class="form-control my-2" placeholder="&#x2328 Categoria" autofocus>
                        </div>


                        <input type="file" class="btn btn-success my-2" name="url" value="Examinar">
                        <br>
                        <br>

                        <input type="submit" class="btn btn-success btn-block" name="saveDoc" value="Crear">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>