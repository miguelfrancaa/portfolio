<?php

	require("models/contacts.php");

	$model = new Contacts();

	$contact = $model->getContact($resource_id);

	require("views/contactdetails.php");