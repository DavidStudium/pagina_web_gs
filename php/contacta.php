<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$para = 'jpueesc@gmail.com';
$asunto = 'Contacta Enchufados';
$correo = "
Nombre del remitente: '.$nombre'
E-mail: '.$email'
Telefono: '.$telefono'
Mensaje: '.$mensaje'
";
  
if ($_POST['submit']) {
if (mail($para, $asunto,utf8_decode( $correo))) {
echo '<script type="text/javascript">alert("Los datos han sido enviados correctamente");window.location.href="http://grupalstudium.ddns.net/html/contacta.html"</script>';
} else {
echo 'Falló el envio';
}
}
?>