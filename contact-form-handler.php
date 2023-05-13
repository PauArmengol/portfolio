<?php
    $to = "p.armengol6@gmail.com"; // Cambia "tu_correo_electronico_aqui" con tu dirección de correo electrónico
    $subject = "Nuevo mensaje del formulario de contacto"; // Cambia el asunto del correo electrónico si lo deseas
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $headers = "From: " . $name . " <" . $email . ">\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
?>


<?php
    $email_body = "Has recibido un nuevo mensaje del formulario de contacto de tu sitio web.\n\n" .
                  "Nombre: " . $name . "\n" .
                  "Email: " . $email . "\n" .
                  "Teléfono: " . $phone . "\n" .
                  "Mensaje:\n" . $message;
    mail($to, $subject, $email_body, $headers);
?>


