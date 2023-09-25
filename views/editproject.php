<!DOCTYPE html>
<html>
<head>
	<title>Backend Dashboard</title>
	<meta name="keywords" content="Backend Hugo Vaz">
	<meta name="description" content="Backend Hugo Vaz">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--BOOTSTRAP -->
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.min.css">
	<!-- STYLE SHEET -->
	<link rel="stylesheet" type="text/css" href="/css/styleadmin.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script src="/js/jquery-3.6.3.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>

	<script src="/js/scriptadmin.js"></script>
</head>
<body class="body">	
	<?php include('includes/headeradmin.php'); ?>
	
	<section class="cabecalho">
		<h1 class="titulo-crm">EDIT PROJECT DETAILS</h1>
	</section>
	<section class="dados-lista">
			<form method="POST" action="/admin/editproject/<?= $project["project_id"] ?>"  enctype="multipart/form-data">
				<div class="row-no-padding">
					<div class="col-md-12">
						<input type="hidden" name="project_id" value="<?= $project["project_id"] ?>">
						<input type="hidden" name="photoBefore" value="">
						<label>
							<h2>TITLE</h2><br>
							<input type="text" name="project_title" value="<?= $project["title"] ?>" minlength="1" maxlength="64" required>
						</label>
					</div>
					<div class="col-md-12">
						<label>
							<h2>DESCRIPTION</h2><br>
							<textarea name="project_description" class="textAreaBack" minlength="1" required><?= $project["imf_description"] ?></textarea>
						</label>
					</div>
					<div class="col-md-12">
						<label>
							<h2>IMG_DESCRIPTION</h2>
							<input type="file" name="project_imgdescription">
						</label>
					</div>
					<div class="col-md-12">
						<label>
							<h2>TEXT1</h2><br>
							<textarea name="project_text1" class="textAreaBack" minlength="1" required><?= $project["content1"] ?></textarea>
						</label>
					</div>
					<div class="col-md-12">
						<label>
							<h2>TEXT2</h2><br>
							<textarea name="project_text2" class="textAreaBack" minlength="1" required><?= $project["content2"] ?></textarea>
						</label>
					</div>
					<div class="col-md-12">
						<label>
							<h2>YEAR</h2><br>
							<input type="text" name="project_year" value="<?= $project["year"] ?>" >
						</label>
					</div>
					<div class="col-md-12">
						<label>
							<h2>SERVICES</h2><br>
							<input type="text" name="project_services" value="<?= $project["services"] ?>" required>
						</label>
					</div>
					<div class="col-md-12">
						<label>
							<h2>CLIENT</h2><br>
							<input type="text" name="project_client" value="<?= $project["client"] ?>" required>
						</label>
					</div>
					<div class="col-md-6">
						<button class="btn" type="submit" name="send">EDIT PROJECT</button>
					</div>
					</div>
			</form>
	</section>


	<?php
		if(!empty($message)){
			echo $message;
		}
	?>




	<?php include('includes/footeradmin.php'); ?>

</body>
</html>