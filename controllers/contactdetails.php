<?php

	if(!isset($resource_id) || !is_numeric($resource_id)) {
		http_response_code(400);
		header("Location: /400");
		die("Request Invalido");
	}

	require("models/contacts.php");

	$model = new Contacts();

	$contact = $model->getContact($resource_id);

	if(empty($contact)) {
		http_response_code(404);
		header("Location: /404");
		die("Request Invalido");
	}

	require("views/contactdetails.php");