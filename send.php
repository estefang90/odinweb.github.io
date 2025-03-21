<?php

    // Recoge los datos del formulario
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $mensaje = $_POST['user_message'];
    
    // Destinatario del correo electrónico
    $para = 'facturacionweb@hotmail.com';
    
    // Asunto del correo electrónico
    $asunto = 'Nuevo mensaje de contacto';
    
    // Construye el cuerpo del correo
    $cuerpoMensaje = "Nombre: $name\n";
    $cuerpoMensaje .= "Email: $email\n";
    $cuerpoMensaje .= "Mensaje:\n$mensaje";
    
    // Cabeceras del correo electrónico
    $headers = "From: $name <$email>" . "\r\n" .
                 "Reply-To: $email" . "\r\n" .
                 "X-Mailer: PHP/" . phpversion();
    
    // Envía el correo electrónico
    if (mail($para, $asunto, $cuerpoMensaje, $headers)) {
        header("Location: index.html");
    } else {
        echo 'Error al enviar el mensaje.';
    }

//
?>