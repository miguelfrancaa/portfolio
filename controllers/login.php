<?php

	if(isset($_POST["send"]) && isset($_POST["csrf_token"]) && $_POST["csrf_token"] === $_SESSION["csrf_token"]){
		if(isset($_POST["username"]) &&
			isset($_POST["password"])){

			require("models/admins.php");

			$modelAdmins = new Admins();

			$admin = $modelAdmins->getAdmin($_POST["username"]);

			if(!empty($admin)){

				if(password_verify($_POST["password"], $admin["password"])){
					$message = "ta ligado";
				}else{
					$message = "nao ta ligado";
				}
			}else{
				$message = "There is no account with this username.";
			}
		}else{
			$message =  "please fill the form correctly.";
		}
	}

	$_SESSION["csrf_token"] = bin2hex(random_bytes(16));

	require("views/login.php");