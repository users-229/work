<?php

// получаем данные с элементов формы
$name = $_Post['name'];
$tel = $_Post['tel'];
$email = $_Post['email'];
$msg = $_Post['msg'];

// Обрабатываем полученнае данные

$name = htmlspecialchars($name); //преобразование симвалов в сущьности (мнемоники)
$tel = htmlspecialchars($tel);
$email = htmlspecialchars($email);
$msg= htmlspecialchars($msg);

$name = urldecode($name); // декодирование URL
$tel = urldecode($tel);
$email = urldecode($email);
$msg= urldecode($msg);

$name = trim($name); // Удаление пробелов симвалов с обеих сторон
$tel = trim($tel);
$email = trim($email);
$msg= trim($msg);

// отправка данных до адресата.

$newEmail = "artem.goncharuk2017@yandex.ru";

if(
    mail($newEmail,
    "Клиент",
    "Имя: ".$name."\n".
    "Телефон: ".$tel."\n".
    "Почта: ".$email."\n".
    "Сообщение: ".$msg."\r\n")
){
    echo('Письмо успешно отправлено!');
}else{
   echo('Есть ошибки! Проверьте данные...');
}
