<?php
	
	session_start();

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


			if(!empty($url_parts[2])) {
					$controller = $url_parts[2];
				}

			if(!empty($url_parts[3])) {
			$resource_id = $url_parts[3];
			};

			$allowed_controllers = [
				"login", "categories", "menu_admin", "adminslist", "contactsadmin", "deletecontact", "contactdetails", "projectsadmin", "projectdetails", "deleteproject", "aboutadmin", "newproject", "newadmin", "deleteadmin", "editabout", "newservice", "deleteservice", "editservice", "deleteobjective",  "newobjective", "editobjective"
			];

			if($url_parts[2] == "editabout") {

				$option = $url_parts[3];

				$allowed_options = ["titleabout", "textabout", "imgabout", "text2about", "img2about", "services"];

				if( !in_array($option, $allowed_options) ) {
   				 http_response_code(404);
   				 die("NOT FOUND!4");
				}

				require("controllers/" . $option . ".php");
			}

		 if( !in_array($controller, $allowed_controllers) ) {
   			 http_response_code(404);
   			 die("NOT FOUND!3");
				}
		}

		require("controllers/" . $controller . ".php");

?>