<?php

// Формируем сообщение
$message = "<div>";
$message.= "<h1>Клиент оставил заявку!</h1>";
$message.= "<p>Вот его номер телефона: ".$_POST['phone']."</p>";
$message.= "</div>";


use PHPMailer\PHPMailer\PHPMailer;
require_once 'phpmailer/PHPMailer.php';

// Создаем письмо
$mail = new PHPMailer();
$mail->setFrom('form@admin-trivia.com'); // от кого (email и имя)
$mail->addAddress('triviaplanet1@mail.ru');  // кому (email и имя)

// Тема письма
$mail->Subject = "Вам пришла заявка!";
$mail->CharSet = "utf-8";

// html текст письма
$mail->msgHTML($message);

// Отправляем
if($mail->send()) {
    header("Location: index.php");
}

?>