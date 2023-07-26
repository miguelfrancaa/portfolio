<?php

if(isset($_POST["send"])){

	if(isset($_POST["username"]) && isset($_POST["password"])){

	require("models/admins.php");

	$modelAdmins = new Admins();

	$admin = $modelAdmins->getAdmin($_POST["username"]);

	if(!empty($admin)){

		if(password_verify($_POST["password"], $admin["password"])){
		$message = "ta on";
			}
	}else{
		$message = "nao ta on";
	}

	}else{
			$message = "Please fill the form correctly.";
		 }
}

require("views/login.php");