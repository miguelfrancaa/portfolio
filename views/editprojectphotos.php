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
		<h1 class="titulo-crm">PROJECT PHOTOS</h1>
	</section>
	
<?php
	
	foreach ($projectimgs as $projectimg) {
		echo "<div class='row'><div class='col-md-6'><img class='editphotos' id='imgEdit". $projectimg["img_id"] ."' src='/img/projects/".$projectimg["name"]."'></div>
		<div class='col-md-2'>
		<div class='delphotos'>
		<a href='/admin/editphoto/". $projectimg["img_id"] ."'><button class='btn btn-danger'>EDIT PHOTO</button></a><br><br>
		<a href='/admin/deletephoto/". $projectimg["img_id"] ."'><button class='btn'>DELETE PHOTO</button></a>
		</div>
		</div>
		</div><br><br><br>";
	};

?>

	<a href="/admin/newphoto/<?= $resource_id ?>"><button class="btn"><h4>ADD PHOTO</h4></button></a>

	<?php include('includes/footeradmin.php'); ?>


</body>
</html>