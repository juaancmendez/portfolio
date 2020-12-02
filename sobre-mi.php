<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body id="sobre-mi">
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-md px-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                    aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="row collapse navbar-collapse mb-3 mt-3" id="navbarsExampleDefault">
                    <div class="col-4 col-sm-6 px-2">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="sobre-mi.html">Sobre mi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="proyectos.html">Proyectos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contacto.html">Contacto</a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-none d-sm-block col-sm-6 text-right">
                        <a href="" id="btn-CV">DESCARGÁ MI CV <i class="fas fa-download"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container pt-5">
            <div class="row">
                <div class="col-12 col-sm-5">
                    <div class="mb-4">
                        <h1>Sobre mi</h1>
                    </div>
                    <div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis error explicabo quas odit,
                            voluptas iusto sunt, temporibus aperiam quia delectus odio sed, pariatur distinctio ab esse
                            dicta doloribus quis veritatis!</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, incidunt facere consectetur
                            optio ea dolorum at porro dignissimos repellat dolores officiis rem! Laboriosam earum ut eos
                            architecto numquam quo dolorum!</p>
                    </div>
                    <div class="mt-4 mt-sm-5" id="ico-chicos">
                        <a href="https://github.com" target="_blank" title="Github"><i
                                class="fab fa-github fa-2x mr-1"></i></a>
                        <a href="https://linkedin.com/in/nelson-daniel-tarche" target="_blank" title="Linkedin"><i
                                class="fab fa-linkedin fa-2x"></i></a>
                        <a href="" id="btn-CV">DESCARGÁ MI CV</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 offset-sm-1">
                    <div>
                        <img src="../portfolio/images/sobre-mi-emoji.png" class="shadow d-none d-sm-block" alt=""
                            id="emoji">
                    </div>
                </div>
            </div>
        </div>
        <div id="div-rojo">
            <section class="container pb-5">
                <div class="row mt-5">
                    <div class="col-12 pt-5 pb-4">
                        <h2>Tecnologias de programacion</h2>
                    </div>
                </div>
                <div class="row my-sm-3" id="fila1">
                    <div class="col-4 col-sm-2 mb-3 mb-sm-0">
                        <div class="bg-white text-center shadow">
                            <i class="fab fa-js"></i>
                            <h3 class="pt-1">Javascript</h3>
                        </div>
                    </div>

                    <div class="col-4 col-sm-2 mb-3 mb-sm-0">
                        <div class="bg-white text-center shadow">
                            <i class="fab fa-php"></i>
                            <h3 class="pt-1">PHP</h3>
                        </div>
                    </div>
                    <div class="col-4 col-sm-2 mb-3 mb-sm-0">
                        <div class="bg-white text-center shadow">
                            <i class="fab fa-html5"></i>
                            <h3 class="pt-1">HTML5</h3>
                        </div>
                    </div>
                    <div class="col-4 col-sm-2 mb-3 mb-sm-0">
                        <div class="bg-white text-center shadow">
                            <i class="fab fa-react"></i>
                            <h3 class="pt-1">React.js</h3>
                        </div>
                    </div>
                    <div class="col-4 col-sm-2 mb-3 mb-sm-0">
                        <div class="bg-white text-center shadow">
                            <i class="fas fa-question"></i>
                            <h3 class="pt-1">jQuery</h3>
                        </div>
                    </div>
                    <div class="col-4 col-sm-2 mb-3 mb-sm-0">
                        <div class="bg-white text-center shadow">
                            <i class="fab fa-bootstrap"></i>
                            <h3 class="pt-1">Boostrap</h3>
                        </div>
                    </div>
                </div>
                <div class="row my-sm-3" id="fila2">
                    <div class="col-4 col-sm-2 mb-3 mb-sm-0">
                        <div class="bg-white text-center shadow">
                            <i class="fab fa-laravel"></i>
                            <h3 class="pt-1">Laravel</h3>
                        </div>
                    </div>
                    <div class="col-4 col-sm-2 mb-3 mb-sm-0">
                        <div class="bg-white text-center shadow">
                            <i class="fas fa-question"></i>
                            <h3 class="pt-1">MariaDB</h3>
                        </div>
                    </div>
                    <div class="col-4 col-sm-2 mb-3 mb-sm-0">
                        <div class="bg-white text-center shadow">
                            <i class="fab fa-css3-alt"></i>
                            <h3 class="pt-1">CSS</h3>
                        </div>
                    </div>
                    <div class="col-4 col-sm-2 mb-3 mb-sm-0">
                        <div class="bg-white text-center shadow">
                            <i class="fas fa-question"></i>
                            <h3 class="pt-1">MySQL</h3>
                        </div>
                    </div>
                    <div class="col-4 col-sm-2 mb-3 mb-sm-0">
                        <div class="bg-white text-center shadow">
                            <i class="fas fa-question"></i>
                            <h3 class="pt-1">Word</h3>
                        </div>
                    </div>
                    <div class="col-4 col-sm-2 mb-3 mb-sm-0">
                        <div class="bg-white text-center shadow">
                            <i class="fab fa-git-alt"></i>
                            <h3 class="pt-1">Git</h3>
                        </div>
                    </div>
                </div>
                <div class="row my-sm-3 pb-sm-5" id="fila3">
                    <div class="col-4 col-sm-2 mb-3 mb-sm-0">
                        <div class="bg-white text-center shadow">
                            <i class="fas fa-question"></i>
                            <h3 class="pt-1">Heidi SQL</h3>
                        </div>
                    </div>
                    <div class="col-4 col-sm-2 mb-3 mb-sm-0">
                        <div class="bg-white text-center shadow">
                            <i class="fas fa-question"></i>
                            <h3 class="pt-1">Sublime Text</h3>
                        </div>
                    </div>
                    <div class="col-4 col-sm-2 mb-3 mb-sm-0">
                        <div class="bg-white text-center shadow">
                            <i class="fas fa-question"></i>
                            <h3 class="pt-1">XAMPP</h3>
                        </div>
                    </div>
                    <div class="col-4 col-sm-2 mb-3 mb-sm-0">
                        <div class="bg-white text-center shadow">
                            <i class="fas fa-file-word"></i>
                            <h3 class="pt-1">Word</h3>
                        </div>
                    </div>
                    <div class="col-4 col-sm-2 mb-3 mb-sm-0">
                        <div class="bg-white text-center shadow">
                            <i class="fas fa-file-excel"></i>
                            <h3 class="pt-1">Excel</h3>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div id="div-gris-1">
            <section class="container">
                <div class="row py-5" id="idiomas">
                    <div class="col-12 col-sm-6">
                        <div class="bg-white shadow idiomas">
                            <div class="row mb-3">
                                <div class="col-4 align-self-center text-center">
                                    <i class="fas fa-comment-alt p-sm-5 px-4 py-5"></i>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <h3 class="mb-3 pb-0 mt-3 pt-4">IDIOMAS</h3>
                                    <ul class="pl-0">
                                        <li>INGLES - Intermediate B2</li>
                                        <li>ESPAÑOL - Nativo</li>
                                        <li>FRANCÉS - Avanzado</li>
                                    </ul>
                                </div>
                                <div class="offset-2 offset-sm-4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="bg-white shadow hobbies">
                            <div class="row" id="hobbies">
                                <div class="col-4 align-self-center text-center">
                                    <i class="fas fa-star p-sm-5 px-4 py-5"></i>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <h3 class="mb-3 pb-0 mt-3 pt-4">HOBBIES</h3>
                                    <ul class="pl-0">
                                        <li>CROSSFIT</li>
                                        <li>Libros de ciencia ficción</li>
                                    </ul>
                                </div>
                                <div class="offset-2 offset-sm-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="bg-white" id="exp-lab">
            <section class="container">
                <div class="row pb-5">
                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-2 align-self-center text-center">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <div class="col-10 col-sm-4 align-self-center pl-sm-0">
                                <h2 class="mb-0" id="text-exp-lab">Experiencia laboral</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-12 col-sm-6 mb-3">
                        <div class="exp-lab shadow">
                            <div class="row">
                                <div class="col-3">
                                    <p>LOGO</p>
                                </div>
                                <div class="col-9 mt-4">
                                    <h3 class="pb-0">Nombre del cargo</h3>
                                    <h4>Nombre de la empresa</h4>
                                    <h5>FEB 2016 - PRESENTE</h5>
                                    <ul class="pl-3">
                                        <li>Lorem ipsum dolor sit amet, consectetuer elit.</li>
                                        <li>Sed diam nonummy nibh euismod ut laoreet.</li>
                                        <li>Dolore magna aliquam erat volutpat</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-11 text-right btn pb-4">
                                    <a href="http://" target="_blank" rel="noopener noreferrer">VER EMPRESA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="exp-lab shadow">
                            <div class="row">
                                <div class="col-3">
                                    <p>LOGO</p>
                                </div>
                                <div class="col-9 mt-4">
                                    <h3 class="pb-0">Nombre del cargo</h3>
                                    <h4>Nombre de la empresa</h4>
                                    <h5>FEB 2016 - PRESENTE</h5>
                                    <ul class="pl-3">
                                        <li>Lorem ipsum dolor sit amet, consectetuer elit.</li>
                                        <li>Sed diam nonummy nibh euismod ut laoreet.</li>
                                        <li>Dolore magna aliquam erat volutpat</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-11 text-right btn pb-4">
                                    <a href="http://" target="_blank" rel="noopener noreferrer">VER EMPRESA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div id="estudios">
            <section class="container">
                <div class="row pb-5">
                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-2 align-self-center text-center">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div class="col-10 col-sm-4 align-self-center pl-sm-0">
                                <h2 class="mb-0" id="text-estudios">Estudios</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-12 col-sm-6 mb-3">
                        <div class="exp-lab shadow bg-white">
                            <div class="row">
                                <div class="col-3">
                                    <p>LOGO</p>
                                </div>
                                <div class="col-9 mt-4">
                                    <h3 class="pb-0">Nombre del curso</h3>
                                    <h4>DePC</h4>
                                    <h5>FEB 2016 - PRESENTE</h5>
                                    <ul class="pl-3">
                                        <li>Lorem ipsum dolor sit amet, consectetuer elit.</li>
                                        <li>Sed diam nonummy nibh euismod ut laoreet.</li>
                                        <li>Dolore magna aliquam erat volutpat</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-11 text-right btn pb-4">
                                    <a href="http://" target="_blank" rel="noopener noreferrer">VER EMPRESA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="exp-lab shadow bg-white">
                            <div class="row">
                                <div class="col-3">
                                    <p>LOGO</p>
                                </div>
                                <div class="col-9 mt-4">
                                    <h3 class="pb-0">Nombre del curso</h3>
                                    <h4>DePC</h4>
                                    <h5>FEB 2016 - PRESENTE</h5>
                                    <ul class="pl-3">
                                        <li>Lorem ipsum dolor sit amet, consectetuer elit.</li>
                                        <li>Sed diam nonummy nibh euismod ut laoreet.</li>
                                        <li>Dolore magna aliquam erat volutpat</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-11 text-right btn pb-4">
                                    <a href="http://" target="_blank" rel="noopener noreferrer">VER EMPRESA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="row pt-5">
                <div class="col-3 col-sm-2 mt-2 text-center text-sm-left">
                    <a href="https://github.com" target="_blank" title="Github"><i
                            class="fab fa-github fa-2x mr-1"></i></a>
                    <a href="https://linkedin.com/in/nelson-daniel-tarche" target="_blank" title="Linkedin"><i
                            class="fab fa-linkedin-in fa-2x linkedin"></i></a>
                </div>
                <div class="col-3 col-sm-2 mt-2">
                    Sponsor <a href="https://depcsuite.com" target="_blank" title="DePC Suite"><span
                            class="subrayar">DePC Suite</span></a>
                </div>
                <div class="col-3 col-sm-2 mt-2 text-right">
                    <a href="mailto:">info@dominio.com.ar</a>
                </div>
                <div class="col-3 col-sm-6 text-right">
                    <a href="http://web.whatsapp/com" target="_blank" title="Whatsapp"><i id="icono-whatsapp"
                            class="fab fa-whatsapp fa-3x"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>