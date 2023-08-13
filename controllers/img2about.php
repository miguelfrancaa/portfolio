 <?php
	require("models/about.php");

	$model = new About();

	$about = $model->getAboutInfo();

	if(isset($_POST["send"])){

		move_uploaded_file($_FILES["img2about"]["tmp_name"], "img/" . $_FILES["img2about"]["name"]);

		$about = $model->editImg2About($_POST);

		header("Location: /admin/aboutadmin");
	}

	require("views/img2about.php");
?>