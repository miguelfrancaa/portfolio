<?php

	if(isset($_POST["send"]) && isset($_POST["csrf_token"]) && $_POST["csrf_token"] === $_SESSION["csrf_token"]){
		if(isset($_POST["username"]) &&
			isset($_POST["password"])){

			require("models/admins.php");

			$modelAdmins = new Admins();

			$admin = $modelAdmins->getAdmin($_POST["username"]);

			if(!empty($admin)){

				if(password_verify($_POST["password"], $admin["password"])){

					if($admin["is_active"] == 1){

					$_SESSION["admin_id"] = $admin["admin_id"];
					header("Location: menu_admin");

				}else{
					header("Location: /admin");
				}
				}else{
					$message = "nao ta ligado";
					header("Refresh: /admin");
				}
			}else{
				$message = "There is no account with this username.";
				header("Refresh: /admin");
			}
		}else{
			$message =  "please fill the form correctly.";
			header("Refresh: /admin");
		}
	}

	$_SESSION["csrf_token"] = bin2hex(random_bytes(16));

	require("views/login.php");