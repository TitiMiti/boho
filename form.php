<?php

header('Access-Control-Allow-Origin: *');

$EmailTo= "ikhozhaynov@mail.ru";
$EmailFrom 'titimiti1984@gmail.com';
$Subject = "ВИГВАМ Заполнили форму на сайте";

$message = print_r($_POST,true);

$success = mail($EmailTo, $Subject, $message, "From: <$EmailFrom>");
if($success) { echo "Спасибо! Форма отправлена"; }
else{ echo "Ошибка! Попробуйте ещё раз"; }
?>
