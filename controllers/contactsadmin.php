<?php

	require("models/contacts.php");

	$model = new Contacts();

	$contacts = $model->listContacts();

	require("views/contactsadmin.php");