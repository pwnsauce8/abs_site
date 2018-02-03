<?php

$recepient = "office@absuchet.kz";
$sitename = "ABS";


$name = trim($_GET["name"]);
$email = trim($_GET["email"]);
$comments = trim($_GET["comments"]);

$pagetitle = "Заявка с сайта \"$sitename\"";
$message = "Имя: $name\nE-mail: $email\nКоментарий: $comments";

mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $email");
