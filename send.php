<?php
    header("Content-type: text/html; charset=utf8");
	$name =  $_POST['name'];
	$txt =  $_POST['text'];
	$phone = $_POST['tel'];
	$mailto = 'southjuniper@gmail.com';

	if(isset($phone)) {
		
		if(empty($name)) {
			$name = "Не указано";
		}
		if(empty($txt)) {
			$txt = "Не указано";
		}
		if(empty($phone)) {
			$phone = "Не указано";
		}
		
		$topic = "Заявка на обратный звонок";
		$message = "Имя: {$name}\nСообщение: {$txt}\nНомер телефона: {$phone}";
		
		
			
		mail($mailto, $topic, $message);
			
		
		
	}
?>