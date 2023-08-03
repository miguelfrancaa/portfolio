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
			<div style="background-color: white; font-size: 15px;"><?= $contact["contact_id"] ?></div>
		<h4>NAME</h4>	
			<div style="background-color: white; font-size: 15px;"><?= $contact["name"] ?></div>
		<h4>EMAIL</h4>
			<div style="background-color: white; font-size: 15px;"><?= $contact["email"] ?></div><br>
		<h4>SUBJECT</h4>
			<div style="background-color: white; font-size: 15px;"><?= $contact["subject"] ?></div>
		<h4>MESSAGE</h4>
			<div style="background-color: white; font-size: 15px;"/><?= $contact["message"] ?></div>

	</section>


	<?php include('includes/footeradmin.php'); ?>
</body>
</html>