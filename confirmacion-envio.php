<?php

    include_once ("PHPMailer/src/PHPMailer.php");
    include_once ("PHPMailer/src/SMTP.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body id="contacto">
    <header>
        <div class="container">
            <?php include_once("menu.php");?>
        </div>
    </header>
    <main>
        <div class="container pt-5">
            <div class="row mb-3">
                <div class="col-12">
                    <h1>Gracias por contactarte,</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5 col-12 mb-3">
                    <p>te respondere a la brevedad.</p>
                </div>
                <div class="col-sm-6 offset-sm-1 col-12">
                    <form action="" method="post" required>
                        <div class="mb-3">
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control"
                                placeholder="Nombre" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" id="txtCorreo" name="txtCorreo" class="form-control"
                                placeholder="Correo" required>
                        </div>
                        <div class="mb-3">
                            <textarea name="txtMensaje" id="txtMensaje" class="form-control"
                                placeholder="Comentarios..."></textarea>
                        </div>
                        <div class="row">
                            <div id="recaptcha" class="col-6 g-recaptcha"
                                data-sitekey="6LesF8UZAAAAAAYj9EL9giCX08p1Zj4-tx_8KZLX"></div>
                            <div class="col-6 text-right">
                                <button type="submit">ENVIAR</button>
                            </div>
                        </div>
                    </form>
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