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
                <a href="../admin/administrador.php" accesskey="d" title="Reuniones(alt + d)">
                    <div class="icon">
                        <img src="../recursos/iconos/iconoDependencias.svg" alt="Reuniones">
                    </div>
                    <div class="title">
                        <span>Inicio</span>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="../admin/usuarios.php" accesskey="u" title="Usuarios(alt + u)">
                    <div class="icon">
                        <img src="../recursos/iconos/iconoUsuario.svg" alt="">
                    </div>
                    <div class="title">
                        <span>Usuarios</span>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="../admin/dependencias.php" accesskey="u" title="Usuarios(alt + u)">
                    <div class="icon">
                        <img src="../recursos/iconos/dependencias.svg" alt="">
                    </div>
                    <div class="title">
                        <span>Dependencias</span>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="../admin/Documentos.php" accesskey="t" title="Documentos(alt + t)">
                    <div class="icon">
                        <img src="../recursos/iconos/iconoDocumento.svg" alt="">
                    </div>
                    <div class="title">
                        <span>Documentos</span>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="../calendario/calendar.php" accesskey="a" title="calendario(alt + a)">
                    <div class="icon">
                        <img src="../recursos/iconos/calendar.svg" alt="">
                    </div>
                    <div class="title">
                        <span>Calendario</span>
                    </div>
                </a>
            </div>

            <div class="item separator"></div>  

            <div class="item">
                <a href="../index.php" accesskey="l" title="salir">
                    <div class="icon">
                        <img src="../recursos/iconos/iconoCerrarSesion.svg" alt="">
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

    <?php require 'footer.php' ?>