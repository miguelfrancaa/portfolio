<?php

require("models/admins.php");

if(!isset($resource_id) || !is_numeric($resource_id)) {
	http_response_code(400);
	header("Location: /400");
	die("Request Invalido");
}

$model = new Admins();

$admin = $model->getAdminState($resource_id);

if($admin["is_active"] == 1){
	$admin = $model->blockUser($resource_id);
	header("Location: /admin/adminslist");
}else{
	$admin = $model->unblockUser($resource_id);
	header("Location: /admin/adminslist");
}

	if(empty($resource_id)) {
		http_response_code(404);
		header("Location: /404");
		die("Request Invalido");
	} 


?>