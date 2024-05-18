<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $destinatario = "www.javiier2015@hotmail.com";
    $contenido = "Nombre: $nombre\nCorreo: $correo\nAsunto: $asunto\nMensaje: $mensaje";

    $headers = "From: $correo";

    if (mail($destinatario, $asunto, $contenido, $headers)) {
        echo "<p>El mensaje ha sido enviado correctamente.</p>";
    } else {
        echo "<p>Hubo un problema al enviar el mensaje. Inténtalo de nuevo más tarde.</p>";
    }
}
?>