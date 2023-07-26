<?php


	$url_parts = explode("/", $_SERVER["REQUEST_URI"]);

	define("ENV", parse_ini_file(".env"));

	$controller = "home";

	$allowed_controllers = [
		"home", "about", "projects", "project", "contact", "admin"
	];

	if(!empty($url_parts[1])) {
		$controller = $url_parts[1];
	}

	if(!empty($url_parts[2])) {
		$id = $url_parts[2];
	}

	if( !in_array($controller, $allowed_controllers) ) {
   		 http_response_code(404);
  		 die("NOT FOUND!2");
		} 

	if($url_parts[1] == "admin") {

			$controller = "login";

			$_SESSION["csrf_token"] = bin2hex(random_bytes(16));

			if(!empty($url_parts[2])) {
					$controller = $url_parts[2];
				}

			$allowed_controllers = [
				"login", "categories"
			];

		 if( !in_array($controller, $allowed_controllers) ) {
   			 http_response_code(404);
   			 die("NOT FOUND!3");
				}
		}

		require("controllers/" . $controller . ".php");

?>