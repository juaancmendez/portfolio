<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
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

<body id="proyectos">
    <header>
        <div class="container">
            <?php include_once("menu.php");?>
        </div>
    </header>
    <main>
        <div class="container pt-5">
            <div class="row">
                <div class="col-12 mb-3">
                    <h1>Mis Proyectos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-7 mb-4">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A ratione asperiores cumque, fuga
                        officia molestias alias, quod dolorum architecto nihil placeat laborum quia, odio obcaecati
                        dignissimos optio? Optio, facere accusantium?</p>
                </div>
            </div>
            <div class="row m-0" id="proyectos-box">

                <div class="col-12 col-sm-4 pl-sm-0 pr-sm-5 mb-4">

                    <div class="n-proyecto">
                        <div class="text-center p-3">
                            <img src="../portfolio/images/proyecto-1.png" alt="imagen abm">
                        </div>
                        <div class="gradiente">
                            <h2>ABM CLIENTES</h2>
                        </div>
                        <div class="txt">
                            <p>Alta, Baja, modificación de un registro de
                                clientes empleando:. Realizado en HTML, CSS,
                                PHP, Bootstrap y Json.</p>
                        </div>
                        <div class="row pb-3">
                            <div class="col-6 text-center">
                                <a href="" target="_self" class="btn-proyecto" id="btn-ver-online">VER ONLINE</a>
                            </div>
                            <div class="col-6 text-center">
                                <a href="" target="_self" class="btn-codfuente">CÓDIGO FUENTE</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-sm-4 pl-sm-2 pr-sm-5 mb-4">

                    <div class="n-proyecto">
                        <div class="text-center p-3">
                            <img src=" ../portfolio/images/proyecto-2.png" alt="imagen sgv">
                        </div>
                        <div class="gradiente">
                            <h2>SISTEMA GESTIÓN DE VENTAS</h2>
                        </div>
                        <div class="txt">
                            <p>Sistema de gestión de clientes, productos y
                                ventas. Realizado en HTML, CSS, PHP, MVC,
                                Bootstrap, Js, Ajax, jQuery y MySQL de base
                                de datos.</p>
                        </div>
                        <div class="row pb-3">
                            <div class="col-6 text-center">
                                <a href="" target="_self" class="btn-proyecto">VER PROYECTO</a>
                            </div>
                            <div class="col-6 text-center">
                                <a href="" target="_self" class="btn-codfuente">CÓDIGO FUENTE</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-sm-4 pl-sm-2 pr-sm-5 mb-4">

                    <div class="n-proyecto">
                        <div class="text-center p-3">
                            <img src="../portfolio/images/proyecto-3.png" alt="imagen PI">
                        </div>
                        <div class="gradiente">
                            <h2>PROYECTO INTEGRADOR</h2>
                        </div>
                        <div class="txt">
                            <p>Proyecto Full Stack desarrollado en PHP, Laravel,
                                Javascript, jQuery, AJAX, HTML, CSS, con panel
                                administrador, gestor de usuarios, módulo de
                                permisos y funcionalidades a fines.</p>
                        </div>
                        <div class="row pb-3">
                            <div class="col-6 text-center">
                                <a href="" target="_self" class="btn-proyecto">VER PROYECTO</a>
                            </div>
                            <div class="col-6 text-center">
                                <a href="" target="_self" class="btn-codfuente">CÓDIGO FUENTE</a>
                            </div>
                        </div>
                    </div>
                </div>

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