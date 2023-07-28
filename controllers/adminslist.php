<?php
	require("models/admins.php");

	$modelAdmins = new Admins();

	$admins = $modelAdmins->getAdminsList();

	require("views/adminslist.php");
?>