<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    $destinatario = "chiriperomr123@gmail.com"; // Reemplaza con tu dirección de correo electrónico

    $asunto = "Nuevo mensaje de $nombre";
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Correo electrónico: $email\n";
    $cuerpo .= "Mensaje:\n\n$mensaje";

    // Para enviar el correo
    mail($destinatario, $asunto, $cuerpo);

    // Redirecciona a una página de confirmación
    header("Location: confirmacion.html");
}
?>
