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
		<h1 class="titulo-crm">EDIT SERVICE</h1>
	</section>
	<section class="dados-lista">
			<form method="POST" action="/admin/editservice/<?= $serviceto["service_id"] ?>"  enctype="multipart/form-data">
				<div class="row-no-padding">
					<div class="col-md-12">
						<input type="hidden" name="service_id" value="<?= $serviceto["service_id"] ?>">
						<label>
							<h2>TITLE</h2><br>
							<input type="text" name="service_title" value="<?= $serviceto["title"] ?>" minlength="1" maxlength="64" required>
						</label>
					</div>
					<div class="col-md-12">
						<label>
							<h2>CONTENT</h2><br>
							<textarea name="service_content" class="textAreaBack" minlength="1" required><?= $serviceto["content"] ?></textarea>
						</label>
					</div>
					<div class="col-md-6">
						<button class="btn" type="submit" name="send">EDIT SERVICE</button>
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