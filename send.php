<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $mensaje = $_POST['user_message'];
    
    // Destinatario del correo electrónico
    $para = 'estefangz@gmail.com';
    
    // Asunto del correo electrónico
    $asunto = 'Nuevo mensaje de contacto';
    
    // Construye el cuerpo del correo
    $cuerpoMensaje = "Nombre: $name\n";
    $cuerpoMensaje .= "Email: $email\n";
    $cuerpoMensaje .= "Mensaje:\n$mensaje";
    
    // Cabeceras del correo electrónico
    $headers = "From: $nombre <$email>" . "\r\n" .
                 "Reply-To: $email" . "\r\n" .
                 "X-Mailer: PHP/" . phpversion();
    
    // Envía el correo electrónico
    mail($para, $asunto, $cuerpoMensaje, $headers);
    
    header("Location: index.html");
    exit();
    }
//
?>