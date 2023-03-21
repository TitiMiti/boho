<?php

header('Access-Control-Allow-Origin: *');

$EmailTo = "ikhozhaynov@mail.ru";
$EmailFrom = 'titimiti1984@gmail.com';
$Subject = "ВИГВАМ БОХО заполнили форму на сайте";

$message = print_r($_POST,true);

$success = mail($EmailTo, $Subject, $message, "From: <$EmailFrom>");
if($success) { echo "Успешно отправлено"; }
else{  echo "Ошибка!"; }

?>
