<?php
// Obtener los valores del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Configurar el correo electrónico
$para = 'emirrbenitez@gmail.com';
$asunto = 'Mensaje de formulario de contacto de Fenrir3D';
$mensaje_correo = "Nombre: $nombre\nCorreo electrónico: $email\nMensaje:\n$mensaje";

// Enviar el correo electrónico
if (mail($para, $asunto, $mensaje_correo)) {
  echo 'Mensaje enviado con éxito';
} else {
  echo 'Error al enviar el mensaje';
}
?>
