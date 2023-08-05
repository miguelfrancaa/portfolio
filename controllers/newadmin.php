<?php

	if(isset($_POST["send"])){

		if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) &&
			$_POST["password"] === $_POST["repeatpassword"]) {

			require_once("models/admins.php");

			$modelAdmins = new Admins();

			$admin = $modelAdmins->newAdmin($_POST);

			header("Location:/admin/adminslist");
			}else{
				echo 'passes diferentes';
			}

	}

	require("views/newadmin.php");
?>