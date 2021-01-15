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
            <div id="foto"><img src="../recursos/imagenes/fotoPerfil.png" alt="foto perfil"></div>

            <div id="name">
                <span>William Mendoza</span>
            </div>
        </div>

        <!--Item-->

        <div id="menu-items">
            <div class="item">
                <a href="../admin/usuarios.php" accesskey="u" title="Usuarios(alt + u)">
                    <div class="icon">
<<<<<<< HEAD:partials/menuLat.php
                        <img src="recursos/iconos/iconoUsuario.svg" alt="usuarios" accesskey="u">
=======
                        <img src="../recursos/iconos/iconoUsuario.svg" alt="">
>>>>>>> welcome:Login/partials/menuLat.php
                    </div>
                    <div class="title">
                        <span>Usuarios</span>
                    </div>
                </a>
            </div>

            <div class="item">
<<<<<<< HEAD:partials/menuLat.php
                <a href="dependencias.php">
                    <div class="icon">
                        <img src="recursos/iconos/iconoDependencias.svg" alt="dependencias" accesskey="s">
=======
                <a href="#">
                    <div class="icon" accesskey="d" title="Dependencias(alt + d)">
                        <img src="../recursos/iconos/iconoDependencias.svg" alt="">
>>>>>>> welcome:Login/partials/menuLat.php
                    </div>
                    <div class="title">
                        <span>Dependencias</span>
                    </div>
                </a>
            </div>

            <div class="item">
<<<<<<< HEAD:partials/menuLat.php
                <a href="documentos.php">
                    <div class="icon">
                        <img src="recursos/iconos/iconoDocumento.svg" alt="documentos" accesskey="a">
=======
                <a href="#" accesskey="t" title="Documentos(alt + t)">
                    <div class="icon">
                        <img src="../recursos/iconos/iconoDocumento.svg" alt="">
>>>>>>> welcome:Login/partials/menuLat.php
                    </div>
                    <div class="title">
                        <span>Documentos</span>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#" accesskey="a" title="Agregar Documento(alt + a)">
                    <div class="icon">
<<<<<<< HEAD:partials/menuLat.php
                        <img src="recursos/iconos/iconoAgregarDocumento.svg" alt="reuniones" accesskey="r">
=======
                        <img src="../recursos/iconos/iconoAgregarDocumento.svg" alt="">
>>>>>>> welcome:Login/partials/menuLat.php
                    </div>
                    <div class="title">
                        <span>Reuniones</span>
                    </div>
                </a>
            </div>

            <div class="item separator"></div>

            <div class="item">
                <a href="#" accesskey="e" title="Edita perfil(alt + e)">
                    <div class="icon">
<<<<<<< HEAD:partials/menuLat.php
                        <img src="recursos/iconos/iconoEditarPerfil.svg" alt="editar perfil" accesskey="p">
=======
                        <img src="../recursos/iconos/iconoEditarPerfil.svg" alt="">
>>>>>>> welcome:Login/partials/menuLat.php
                    </div>
                    <div class="title">
                        <span>Editar Perfil</span>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#" accesskey="p" title="Cambiar Contraseña">
                    <div class="icon">
<<<<<<< HEAD:partials/menuLat.php
                        <img src="recursos/iconos/iconoCambiarContraseña.svg" alt="cambiar contraseña" accesskey="w">
=======
                        <img src="../recursos/iconos/iconoCambiarContraseña.svg" alt="">
>>>>>>> welcome:Login/partials/menuLat.php
                    </div>
                    <div class="title">
                        <span>Cambiar Contraseña</span>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="../Login/index.php" accesskey="l" title="salir">
                    <div class="icon">
<<<<<<< HEAD:partials/menuLat.php
                        <img src="recursos/iconos/iconoCerrarSesion.svg" alt="cerrar sesion" accesskey="x">
=======
                        <img src="../recursos/iconos/iconoCerrarSesion.svg" alt="">
>>>>>>> welcome:Login/partials/menuLat.php
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