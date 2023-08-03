<?php

	require("models/contacts.php");

	$model = new Contacts();

	$contacts = $model->deleteContact($resource_id);

	header("Location:/admin/contactsadmin");
