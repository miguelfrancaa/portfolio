<?php

	if(isset($_POST["send"])){

		foreach($_POST as $key => $value) {
			$_POST[ $key ] = trim(htmlspecialchars(strip_tags($value)));
		}


		if (isset($_POST["email"]) &&
			isset($_POST["password"]) &&
			isset($_POST["username"]) &&
			isset($_POST["repeatpassword"]) &&
			mb_strlen($_POST["email"]) >= 5 && 
			mb_strlen($_POST["email"]) <= 255 && 
			mb_strlen($_POST["username"]) >= 4 && 
			mb_strlen($_POST["username"]) <= 64 && 
			mb_strlen($_POST["password"]) >= 8 && 
			mb_strlen($_POST["password"]) <= 1000 && 
			mb_strlen($_POST["repeatpassword"]) >= 8 && 
			mb_strlen($_POST["repeatpassword"]) <= 1000 && 
			filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) &&
			$_POST["password"] === $_POST["repeatpassword"]) {

			require_once("models/admins.php");

			$modelAdmins = new Admins();

			$admin = $modelAdmins->newAdmin($_POST);

			header("Location:/admin/adminslist");

			}else{
				$message = 'Please fill the form correctly.';
			}

	}

	require("views/newadmin.php");
?>