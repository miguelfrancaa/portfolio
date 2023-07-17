<?php
	if(isset($_POST["submit"])){

		foreach($_POST as $key => $value) {
			$_POST[ $key ] = trim(htmlspecialchars(strip_tags($value)));
		}

		if (isset($_POST["name"]) &&
		isset($_POST["email"]) &&
		isset($_POST["subject"]) &&
		isset($_POST["message"]) &&
		filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){

		require("models/contacts.php");

		$model = new Contacts();

		$contact = $model->sendContact($_POST);

		$message = "Message sent.";

	}else{
		$message = "PRencha corretamente";
	}
	}

	require("views/contact.php");