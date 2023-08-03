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

	<script src="/js/scriptsadmin.js"></script>
</head>
<body class="body">	
	<?php include('includes/headeradmin.php'); ?>
	
	<section class="cabecalho">
		<h1 class="titulo-crm">CONTACTOS</h1>
		<h6 class="descricao-crm">Aqui verificamos todos os pedidos de contacto que o site gera.</h6>
	</section>
	<section class="dados-lista">
		<h4>ID</h4>
			<div style="background-color: white; font-size: 15px;"><?= $project["project_id"] ?></div>
		<h4>TITLE</h4>	
			<div style="background-color: white; font-size: 15px;"><?= $project["title"] ?></div>
		<h4>DESCRIPTION</h4>
			<div style="background-color: white; font-size: 15px;"><?= $project["description"] ?></div><br>
		<h4>IMG DESCRIPTION</h4>
			<div style="background-color: none; font-size: 15px;"><img style="height: 200px" src="/img/projects/<?= $project["img_description"] ?>"></div>
		<h4>CONTENT1</h4>
			<div style="background-color: white; font-size: 15px;"/><?= $project["content1"] ?></div>
		<h4>CONTENT2</h4>
			<div style="background-color: white; font-size: 15px;"/><?= $project["content2"] ?></div>
		<h4>CLIENT</h4>
			<div style="background-color: white; font-size: 15px;"/><?= $project["client"] ?></div>
		<h4>SERVICES</h4>
			<div style="background-color: white; font-size: 15px;"/><?= $project["services"] ?></div>
		<h4>YEAR</h4>
			<div style="background-color: white; font-size: 15px;"/><?= $project["year"] ?></div>
		<h4>CATEGORY</h4>
			<div style="background-color: white; font-size: 15px;"/><?= $project["category_id"] ?></div>
	</section><br>
	<h3>IMAGES OF PROJECT</h3>
<?php
	foreach ($projectimgs as $projectimg) {
		echo "<img src='/img/projects/".$projectimg["name"]."' ><br><br>";
	};
?>


	<?php include('includes/footeradmin.php'); ?>
</body>
</html>