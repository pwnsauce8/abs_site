<?php
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$number = trim($_POST['number']);
$comments = trim($_POST['text']);

$to = 'office@absuchet.kz'; //Почта получателя, через запятую можно указать сколько угодно адресов
$subject = 'Обратное сообщение'; //Загаловок сообщения
//$message = "Имя: $name\n\rE-mail: $email\n\rСообщение: $comments";
$message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['number'].'</p>
                        <p>E-mail: '.$_POST['email'].'</p>    
                        <p>Сообщение: '.$_POST['text'].'</p>                     
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
$headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
$headers .= "From: Отправитель <office@absuchet.kz>\r\n"; //Наименование и почта отправителя


if (mail($to, $subject, $message, $headers)) {
    echo "ok";
} else {echo "no";}
