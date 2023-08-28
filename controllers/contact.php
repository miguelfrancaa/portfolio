<?php
	if(isset($_POST["submit"])){

		foreach($_POST as $key => $value) {
			$_POST[ $key ] = trim(htmlspecialchars(strip_tags($value)));
		}

		if (isset($_POST["name"]) &&
		isset($_POST["email"]) &&
		isset($_POST["subject"]) &&
		isset($_POST["message"]) &&
		mb_strlen($_POST["name"] >= 3) &&
		mb_strlen($_POST["name"] <= 64) &&
		mb_strlen($_POST["email"] >= 5) &&
		mb_strlen($_POST["email"] <= 255) &&
		mb_strlen($_POST["subject"] >= 3) &&
		mb_strlen($_POST["subject"] <= 64) &&
		mb_strlen($_POST["message"] >= 5) &&
		filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){

		require("models/contacts.php");

		$model = new Contacts();

		$contact = $model->sendContact($_POST);

		$message = "Message sent.";

	}else{
		$message = "Please fill correctly.";
	}
	}

	require("views/contact.php");