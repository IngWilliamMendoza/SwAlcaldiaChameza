<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <title>SIGED</title>
    <link rel="icon" href="recursos/iconos/icono.ico">
    <link rel="stylesheet" href="assets\css\styleIndex.css">
</head>

<body>

    <div class="barra-navegacion">
        <div class="logo">
            <img src="recursos/iconos/iconoPrin.svg" alt="Software de gestion documental.">
            <h3 class="d-inline-block ml-4 font-italic">SIGED</h3>
        </div>
        <div class="menuNav">
            <nav>
                <ul>
                    <li><a href="#Inicio">Inicio</a></li>
                    <li><a href="#AcercaDe">Acerca De</a></li>
                    <li><a href="#Manual">Manual de Usuario</a></li>
                    <li><a href="#container-footer">contactenos</a></li>
                    <li><a href="Login/login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="recursos/imagenes/chameza.jpg" class="d-block w-100" alt="chameza">
                </div>
                <div class="carousel-item">
                    <img src="recursos/imagenes/pueblo.jpg" class="d-block w-100" alt="campesino">
                </div>
                <div class="carousel-item">
                    <img src="recursos/imagenes/campesino.jpeg" class="d-block w-100" alt="pueblo chameza">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>

    <div class="container">

        <h1 id="Bienvenida" class="my-4">SOFTWARE DE GESTION DOCUMENTAL (SIGED)<br> ALCALDIA DE CHAMEZA</h1>
        <div class="card my-5">
            <div class="card-header">
                <h2>Inicio</h2>
            </div>
            <div class="card-body">
                <p class="card-text">El presente software se realizo como un proyecto academico dentro del Tecnologo en analisis y desarrollo de sistemas de información impartido por el Servicion Nacional de Aprendizaje "SENA".<br>El proposito de esta actividad es que los aprendices implementen diversas tecnologias con el fin de solucionar las problematicas de su región.</p>
            </div>
            <img class="card-img-bottom" src="recursos/imagenes/Sena.jpeg" alt="SENA">
        </div>



        <div class="card my-5">
            <div class="card-header">
                <h2>Acerca De</h2>
            </div>
            <div class="card-body">
                <div class="cont-2">
                    <div id="AcercaDe">
                        <p class="card-text">El presente proyecto consiste en el desarrollo de una aplicacion web para gestionar algunos de los procesos administrativos de la alcaldia de Chameza. para el desarrolo del presente poyecto utilizamos las siguientes tecnologias: </p>


                        <h3 class="card-title">HTML (HyperText Markup Language)</h3>
                        <p class="card-text">es un lenguaje muy sencillo que permite describir hipertexto, es decir, texto presentado de forma estructurada y agradable, con enlaces (hyperlinks) que conducen a otros documentos o fuentes de información relacionadas, y con inserciones multimedia (gráficos, sonido...) La descripción se basa en especificar en el texto la estructura lógica del contenido (títulos, párrafos de texto normal, enumeraciones, definiciones, citas, etc) así como los diferentes efectos que se quieren dar (especificar los lugares del documento donde se debe poner cursiva, negrita, o un gráfico determinado) y dejar que luego la presentación final de dicho hipertexto se realice por un programa especializado (como Mosaic, o Netscape).</p>
                        <img src="recursos/imagenes/html.jpg" alt="tecnologias web" class="img-tech">

                        <h3 class="card-title">CSS</h3>
                        <p class="card-text">es un lenguaje que define la apariencia de un documento escrito en un lenguaje de marcado (por ejemplo, HTML). Así, a los elementos de la página web creados con HTML se les dará la apariencia que se desee utilizando CSS: colores, espacios entre elementos, tipos de letra, ... separando de esta forma la estructura de la presentación.</p>
                        <img src="recursos/imagenes/css.png" alt="tecnologias web" class="img-tech">

                        <h3 class="card-title">BOOTSTRAP</h3>
                        <p class="card-text">Bootstrap es un framework front-end utilizado para desarrollar aplicaciones web y sitios mobile first, o sea, con un layout que se adapta a la pantalla del dispositivo utilizado por el usuario. desarrollado por Twitter en 2010, para estandarizar las herramientas de la compañía.Inicialmente, se llamó Twitter Blueprint y, un poco más tarde, en 2011, se transformó en código abierto y su nombre cambió para Bootstrap. Desde entonces fue actualizado varias veces y ya se encuentra en la versión 4.4.El framework combina CSS y JavaScript para estilizar los elementos de una página HTML. Permite mucho más que, simplemente, cambiar el color de los botones y los enlaces. Esta es una herramienta que proporciona interactividad en la página, por lo que ofrece una serie de componentes que facilitan la comunicación con el usuario, como menús de navegación, controles de página, barras de progreso y más.</p>
                        <img src="recursos/imagenes/bootstrap.jpg" alt="tecnologias web" class="img-tech">

                        <h3 class="card-title">JAVASCRIPT</h3>
                        <p class="card-text">JavaScript es un lenguaje de programación o de secuencias de comandos que te permite implementar funciones complejas en páginas web, cada vez que una página web hace algo más que sentarse allí y mostrar información estática para que la veas, muestra oportunas actualizaciones de contenido, mapas interactivos, animación de Gráficos 2D/3D, desplazamiento de máquinas reproductoras de vídeo, etc., puedes apostar que probablemente JavaScript está involucrado.</p>
                        <img src="recursos/imagenes/js.png" alt="tecnologias web" class="img-tech">

                        <h3 class="card-title">PHP</h3>
                        <p class="card-text">es un lenguaje de código abierto muy popular especialmente adecuado para el desarrollo web y que puede ser incrustado en HTML. El lenguaje PHP se procesa en servidores, que son potentes ordenadores con un software y hardware especial. Cuando se escribe una dirección tipo http://www.google.com/index.php en un navegador web como Internet Explorer, Firefox o Chrome, ¿qué ocurre? Se envían los datos de la solicitud al servidor que los procesa, reúne los datos (por eso decimos que es un proceso dinámico) y el servidor lo que devuelve es una página HTML como si fuera estática.</p>
                        <img src="recursos/imagenes/php.png" alt="tecnologias web" class="img-tech">
                    </div>
                </div>
            </div>
        </div>



        <div class="card my-5">
            <div class="card-header">
                <h2>Manual de Usuario</h2>
            </div>
            <div class="card-body">
                <p class="card-text">El manual de usuario adjunto define los principales pasos necesarios para realizar la instalacion como el manejo del software, puedes descargar el manual de usuario atraves del siguiente link</p>

                <a href="recursos/Manual de usuario.pdf" class="btn btn-outline-primary mb-3 mx-auto" target="_blank"> Descargar</a>
            </div>
        </div>

    </div>

    <footer>
        <div class="container-footer" id="container-footer">
            <div class="navFooter">
                <h5>Información</h5>
                <div class="columna1">
                    <nav>
                        <ul>
                            <li><a href="https://opensource.org/licenses/MIT" target="_blank">Licencia</a> </li>
                            <li><a href="">Nosotros</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="columna1">
                    <nav>
                        <ul>
                            <li><a href="https://opensource.org/licenses/MIT" target="_blank">Licencia</a> </li>
                            <li><a href="">Nosotros</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="columna1">
                    <nav>
                        <ul>
                            <li><a href="https://opensource.org/licenses/MIT" target="_blank">Licencia</a> </li>
                            <li><a href="">Nosotros</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="columna1">
                    <nav>
                        <ul>
                            <li><a href="https://opensource.org/licenses/MIT" target="_blank">Licencia</a> </li>
                            <li><a href="">Nosotros</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="redesMain">
                <h5 id="contact">Contactenos</h5>
                <div class="redes">
                    <a href="https://github.com/IngWilliamMendoza/SwAlcaldiaChameza" target="_blank">
                        <div id="github"></div>
                    </a>
                    <a href="https://www.linkedin.com/in/william-armando-mendoza-hernandez-833a9384/" target="_blank">
                        <div id="linkedin"></div>
                    </a>
                    <a href="https://twitter.com/william02202171" target="_blank">
                        <div id="twitter"></div>
                    </a>
                </div>
            </div>
        </div>
        <h6 id="piePagina">SENA ADSI 2021. <br> Todos los derechos reservados</h6>
    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</html>