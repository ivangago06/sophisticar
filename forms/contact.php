<?php
$name = $_POST['name'];
$to = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$headers = "From: contacto@sophisticar.mx\r\n";
$headers .= "Reply-To: contacto@sophisticar.mx\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";



if (mail($to, $subject, $message, $headers)) {
    echo "El correo ha sido enviado correctamente.";
    header("Location: ./contacto?res=1");
} else {
    echo "Error al enviar el correo.";
    header("Location: ./contacto?res=2");
}
?>
