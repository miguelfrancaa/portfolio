<?php
	require("models/projectimgs.php");

	if(isset($_POST["send"])){

		if(file_exists($_FILES['imgproject']['tmp_name']) || is_uploaded_file($_FILES['imgproject']['tmp_name'])){

			$model = new Projectimgs;

			move_uploaded_file($_FILES["imgproject"]["tmp_name"], "img/projects/" . $_FILES["imgproject"]["name"]);

			$imgproject = $model->addPhoto($resource_id);

			header("Location: /admin/editprojectphotos/". $resource_id ."");

		}else{
			$message = "Please fill the form correctly.";
		}
	}

	require("views/newphoto.php");
?>