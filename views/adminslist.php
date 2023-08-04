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

	<script src="js/scriptadmin.js"></script>
</head>
<body class="body">	
	<?php include('includes/headeradmin.php'); ?>
	
	<section class="cabecalho">
		<h1 class="titulo-crm">UTILIZADORES</h1>
		<h6 class="descricao-crm">Aqui verificamos todos os utilizadores do site.</h6>
	</section>
	<section class="lista-btns">
		<a href="" class="btn"><i class="fa fa-plus"></i> ADICIONAR NOVO</a>
	</section>
	<section class="dados-lista">
		<table class="tabela-dados-lista">
			<thead>
				<tr>
					<th>ID</th>
					<th>USERNAME</th>
					<th>EMAIL</th>
					<th>PASSWORD</th>
					<th>ACTIONS</th>
				</tr>
			</thead>
			<tbody>
<?php
	foreach ($admins as $admin) {
		echo "<tr>
							<td>".$admin["admin_id"]."</td>
							<td>".$admin["username"]."</td>
							<td>".$admin["email"]."</td>
							<td>".$admin["password"]."</td>
							<td class='accao'>
								<a href='aca' class='edit'>DELETE ADMIN</a>
							</td>
							</tr>";
	}
?>
			</tbody>
		</table>	
	</section>


	<?php include('includes/footeradmin.php'); ?>
</body>
</html>