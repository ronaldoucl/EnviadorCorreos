<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'proyectoprograronaldo@gmail.com';
    $mail->Password = "fled ochx hvgd ucdd";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom('proyectoprograronaldo@gmail.com', 'Ronaldo Campos');
    $mail->addAddress($_POST['correo']);

    if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
        $mail->addAttachment($_FILES['archivo']['tmp_name'], $_FILES['archivo']['name']);
    } elseif (isset($_FILES['archivo']) && $_FILES['archivo']['error'] !== UPLOAD_ERR_NO_FILE) {
        die('Error al cargar el archivo: ' . $_FILES['archivo']['error']);
    }

    $mail->isHTML(true);
    $mail->Subject = $_POST["asunto"];
    $mail->Body = '<p>'.$_POST['mensaje'].'</p>';
    $mail->send();
    header('Location: mensaje-enviado.html');
} catch(Exception $e) {
    echo 'Mensaje '.$mail->ErrorInfo;
}