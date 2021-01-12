<?php

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$place = $_POST['user_place'];
$promocode = $_POST['user_promocode'];
$quantity = $_POST['user_quantity'];
$token = '1332974942:AAGfPQVpCZEPk4t2CuGDOCHao2YIzd_IMS4';
$chat_id = '-496906767';
$arr = array(
	'Імя та Прізвище користувача: ' => $name,
	'Телефон користувача: ' => $phone,
	'Розатшування та відділення Нової пошти користувача: ' => $place,
	'Кількість: ' => $quantity,
	'Промокод: ' => $promocode
);

foreach($arr as $key => $value) {
	$txt .= "<b>".$key."</b> ".$value."%0A";
 };
 
 $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
 
 if ($sendToTelegram) {
	header('Location: thank-you.html');
 } else {
	echo "Error";
 }
