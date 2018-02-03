<?php

$recepient = "office@absuchet.kz";
$sitename = "ABS";


$name = trim($_GET["name"]);
$phone = trim($_GET["number"]);

$pagetitle = "Заявка с сайта \"$sitename\"";
$message = "Имя: $name\nТелефон: $phone";

mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
