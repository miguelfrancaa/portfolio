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
	<section class="lista-btns">
		<a href="newproject" class="btn"><i class="fa fa-plus"></i> ADICIONAR NOVO</a>
	</section>
	<section class="dados-lista">
		<table class="tabela-dados-lista">
			<thead>
				<tr>
					<th>ID</th>
					<th>TITLE</th>
					<th>DESCRIPTION</th>
					<th>YEAR</th>
					<th>IMG</th>
					<th>CATEGORY</th>
					<th colspan="3">ACTIONS</th>
				</tr>
			</thead>
			<tbody>
<?php
	foreach ($projects as $project) {
		echo "<tr>
								<td>".$project["project_id"]."</td>
								<td>".$project["title"]."</td>
								<td>".$project["description"]."</a></td>
								<td>".$project["year"]."</td>
								<td><div class='imgBackOffice' style='background-image:url(\"/img/projects/".$project["img_description"]."\")'></div></td>
								<td>".$project["category_id"]."</td>
								<td class='accao'>
									<a href='/admin/projectdetails/".$project["project_id"]."' class='edit'>SEE DETAILS</a></td>
								<td class='accao'>
									<a href='/admin/editproject/".$project["project_id"]."' class='edit'>EDIT</a></td>
								<td class='accao'>
									<a href='/admin/deleteproject/".$project["project_id"]."' class='del'>DELETE</a></td>
							</tr>";
	}
?>
			</tbody>
		</table>	
	</section>


	<?php include('includes/footeradmin.php'); ?>
</body>
</html>