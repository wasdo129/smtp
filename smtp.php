<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/SMTP.php';

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';

// Настройки SMTP
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 0;
$mail->Host = 'smtp.timeweb.ru';
$mail->Port = 25;

// указываем в строке выше 465 порт, если нужно использовать SSL
$mail->Username = '_______';
$mail->Password = '_____';
// Убираем комментирование в этой строке, если SSL $mail->SMTPSecure = 'ssl';

// От кого. Помимо From также задаст envelope-from
$mail->setFrom('_____', 'Timeweb Test');

// Кому
$mail->addAddress('______', 'Timeweb Test');

// Тема письма
$subject = 'It\'s worked';
$mail->Subject = $subject;

// Тело письма
$body = '<p><strong>«It\'s worked» </strong></p>';
$mail->msgHTML($body);

$mail->send();
?>
