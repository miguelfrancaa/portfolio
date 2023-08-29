 <?php
	require("models/about.php");

	$model = new About();

	$about = $model->getAboutInfo();

	if(isset($_POST["send"])){

		if(isset($_FILES["img2about"])){

		$allowed_extensions = array('png', 'jpg', 'jpeg', 'svg');

		$filename = $_FILES["img2about"]["name"];

		$ext = pathinfo($filename, PATHINFO_EXTENSION);

		$file_size = $_FILES["img2about"]["size"];

		if(in_array($ext, $allowed_extensions)){

			if($file_size <= 100000000){

			move_uploaded_file($_FILES["img2about"]["tmp_name"], "img/" . $_FILES["img2about"]["name"]);

			$about = $model->editImg2About($_POST);

			header("Location: /admin/aboutadmin");

			}else{
				$message = "Carregue uma imagem com menos tamanho.";
			}

		}else{
			$message = "Not this format.";
		}

		}else{
			$message = "Please fill the form correctly.";
		}
	}

	require("views/img2about.php");
?>