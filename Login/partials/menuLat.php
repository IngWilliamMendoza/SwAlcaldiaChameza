    <div id="sideMenu" class="menu-collapsed bg-primary">

        <!--Header-->
        <div id="header">
            <div id="title">
                <span>Administrador</span>
            </div>
            <div id="menu-btn">
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
            </div>
        </div>

        <!--Profile-->
        <div id="profile">
            <div id="foto"><img src="recursos/imagenes/fotoPerfil.png" alt="foto perfil"></div>

            <div id="name">
                <span>William Mendoza</span>
            </div>
        </div>

        <!--Item-->

        <div id="menu-items">
            <div class="item">
                <a href="usuarios.php">
                    <div class="icon">
                        <img src="recursos/iconos/iconoUsuario.svg" alt="">
                    </div>
                    <div class="title">
                        <span>Usuarios</span>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <div class="icon">
                        <img src="recursos/iconos/iconoDependencias.svg" alt="">
                    </div>
                    <div class="title">
                        <span>Dependencias</span>
                    </div>
                </a>
            </div>

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

            <div class="item">
                <a href="#">
                    <div class="icon">
                        <img src="recursos/iconos/iconoAgregarDocumento.svg" alt="">
                    </div>
                    <div class="title">
                        <span>Agregar Documentos</span>
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
                <a href="index.php">
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
        btn.addEventListener('click', e => {
            menu.classList.toggle("menu-expanded");
            menu.classList.toggle("menu-collapsed");

            //desplarzar la pagina
            document.querySelector('body').classList.toggle('body-expanded');

        });
    </script>