<?php
    $recepient = "southjuniper@gmail.com";
	$sitename = "Название сайта";

	$name = trim($_POST["name"]);
	$phone = trim($_POST["tel"]);
	$text = trim($_POST["text"]);
	

	$message = "Имя: $name \nТелефон: $phone \nТекст: $text \nЗайстройщик, Город: $business";

	$pagetitle = "Новая заявка с сайта \"$sitename\"";
	
	mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>