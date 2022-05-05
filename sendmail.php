<?php 


    $destinatario = "vzzlor@gmail.com";

    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    $header = "Enviado desde Mi Portafolio";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    
    echo "<script>alert('correo enviado con exito')</script>";

    echo "<script>setTimeout(\"location.href = 'index.html'\",2000)</script>";

?>