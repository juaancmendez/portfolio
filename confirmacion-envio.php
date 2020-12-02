<?php

    include_once ("PHPMailer/src/PHPMailer.php");
    include_once ("PHPMailer/src/SMTP.php");

?>

<?php 
    $pg = "contacto";
    include_once("menu.php"); 
?>
    <main>
        <div class="container pt-5">
            <div class="row mb-3">
                <div class="col-12">
                    <h1>Gracias por contactarte,</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5 col-12 mb-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ipsam neque harum laborum autem,
                        saepe ipsa et illum consectetur iste unde repellendus quod porro adipisci quibusdam enim cumque
                        delectus nulla!</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, dolor ipsam odit tempore, facere
                        repudiandae, voluptatem numquam fugit dolores provident dolorum eveniet amet nisi sunt hic
                        possimus quae laborum rerum.</p>
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
<?php include_once("footer.php"); ?>