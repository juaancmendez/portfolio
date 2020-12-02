<?php
    include_once ("PHPMailer/src/PHPMailer.php");
    include_once ("PHPMailer/src/SMTP.php");    

    $pg = "contacto";

    function guardarCorreo($correo){
        $archivo = fopen("mails.txt", "a+"); 
        fwrite($archivo, $correo . ";\n"); //En linux \r
        fclose($archivo);
    }
    
    if($_POST){ /* es postback */
        $nombre = $_POST["txtNombre"];
        $correo = $_POST["txtCorreo"];
        $asunto = $_POST["txtAsunto"];
        $mensaje = $_POST["txtMensaje"];

        guardarCorreo($correo);

    
        if($nombre != "" && $correo != ""){
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPAuth = true;
            $mail->Host = "mail.dominio.com"; // SMTP a utilizar
            $mail->Username = "info@dominio.com.ar"; // Correo completo a utilizar
            $mail->Password = "aqui va la clave de tu correo";
            $mail->Port = 25;
            $mail->From = "info@dominio.com.ar"; //Desde la cuenta donde enviamos
            $mail->FromName = "Tu nombre a mostrar";
            $mail->IsHTML(true);
            $mail->SMTPOptions = array(
                        'ssl' => array(
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true
                        )
                    );
    
            //Destinatarios
            $mail->addAddress($correo);
            $mail->addBCC("otrocorreo@gmail.com"); //Copia oculta
            $mail->Subject = utf8_decode("Contacto página Web");
            $mail->Body = "Recibimos tu consulta, te responderemos a la brevedad.";
            /*if(!$mail->Send()){
                $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
            }*/
            $mail->ClearAllRecipients(); //Borra los destinatarios
    
            //Envía ahora un correo a nosotros con los datos de la persona
            $mail->addAddress("info@dominio.com.ar");
            $mail->Subject = utf8_decode("Recibiste un mensaje desde tu página Web");
            $mail->Body = "Te escribio $nombre cuyo correo es $correo, con el asunto $asunto y el siguiente mensaje:<br><br>$mensaje";
           
            //if($mail->Send()){ /* Si fue enviado correctamente redirecciona */
                header('Location: confirmacion-envio.php');
            /*} else {
                $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
            }*/ 
        } else {
            $msg = "Complete todos los campos";
        }
    
    }
?>

<?php 
    $pg = "contacto";
    include_once("menu.php");
?>
    <main>
        <div class="container pt-5">
            <div class="row mb-3">
                <div class="col-12">
                    <h1>Contacto</h1>
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
    <?php include_once("footer.php");?>