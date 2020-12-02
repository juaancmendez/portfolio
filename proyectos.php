<?php 
    $pg = "proyectos";
    include_once("menu.php");
?>
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
                                clientes empleando: HTML, CSS,
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
<?php include_once("footer.php");?>