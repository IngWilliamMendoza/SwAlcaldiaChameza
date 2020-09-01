<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="assets/css/estiloMenu.css">
    <title>Interfaz de usuario</title>

</head>

<?php 

    require 'partials/header.php'

?>


<body>

    <div id="main-container">
        <div class="binvenida">
            <h2>Bienvenidos</h2> 
        </div>  

    </div>

    <div id="sideMenu" class="menu-collapsed">

        <!--Header-->
        <div id="header">
            <div id="title">
                <span>Usuario x</span>
            </div>
            <div id="menu-btn">
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
            </div>
        </div>

        <!--Profile-->
        <div id="profile">
            <div id="foto"><img src="recursos/imagenes/fotoPerfilMujer.png" alt="foto perfil"></div>

            <div id="name">
                <span>Natalia Cruz</span>
            </div>
        </div>

        <!--Item-->

        <div id="menu-items">
            
            <div class="item">
                <a href="#">
                    <div class="icon">
                        <img src="recursos/iconos/iconoDocumento.svg" alt="">
                    </div>
                    <div class="title">
                        <span>Documentos</span>
                    </div>
                </a>
            </div>
            
            <div class="item separator"></div>

            <div class="item">
                <a href="#">
                    <div class="icon">
                        <img src="recursos/iconos/iconoEditarPerfil.svg" alt="">
                    </div>
                    <div class="title">
                        <span>Editar Perfil</span>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <div class="icon">
                        <img src="recursos/iconos/iconoCambiarContraseña.svg" alt="">
                    </div>
                    <div class="title">
                        <span>Cambiar Contraseña</span>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <div class="icon">
                        <img src="recursos/iconos/iconoCerrarSesion.svg" alt="">
                    </div>
                    <div class="title">
                        <span>Cerrar Sesion</span>
                    </div>
                </a>
            </div>


        </div>

    </div>

    <script>
        const btn = document.querySelector('#menu-btn');
        const menu = document.querySelector('#sideMenu');
        btn.addEventListener('click', e =>{
            menu.classList.toggle("menu-expanded");
            menu.classList.toggle("menu-collapsed");

            //desplarzar la pagina
            document.querySelector('body').classList.toggle('body-expanded');

        });
        
    </script>

    <footer>
        <?php 
            require 'partials/footer.php'
        ?>
    </footer>

</body>

</html>

