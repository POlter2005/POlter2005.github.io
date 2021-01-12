<?php

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$place = $_POST['user_place'];
$promocode = $_POST['user_promocode'];
$quantity = $_POST['user_quantity'];
$token = '1332974942:AAGfPQVpCZEPk4t2CuGDOCHao2YIzd_IMS4';
$chat_id = '-496906767';


// перенаправляем на себя же



if (isset($_POST['user_name'], $_POST['user_phone'], $_POST['user_place'], $_POST['user_quantity'])) {
	$name = $_POST['user_name'];
	$phone = $_POST['user_phone'];
	$place = $_POST['user_place'];
	$quantity = $_POST['user_quantity'];
	if (empty($name) || empty($phone) || empty($place) || empty($quantity)) { //если что то не ввели
		echo 'Вы заполнили не все поля!';
	} else { //все поля заполнены, отправляем
		$arr = array(
			'Імя та Прізвище користувача: ' => $name,
			'Телефон користувача: ' => $phone,
			'Розатшування та відділення Нової пошти користувача: ' => $place,
			'Кількість: ' => $quantity,
			'Промокод: ' => $promocode
		);

		foreach ($arr as $key => $value) {
			$txt .= "<b>" . $key . "</b> " . $value . "%0A";
		};
		$send = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");
		//проверяем отправку
		if ($send) {
			header('Refresh: 0; URL=' . $_SERVER['HTTP_REFERER']);
			echo "<b>Спасибо за отправку вашего сообщения!<p>";
			echo "<a href=index.php>Нажмите,</a> чтобы убрать уведомлнние";
		} else echo 'Произошла ошибка при отправке сообщения.';
		
	}
}
