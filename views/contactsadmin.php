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
		<table class="tabela-dados-lista">
			<thead>
				<tr>
					<th>ID</th>
					<th>NAME</th>
					<th>EMAIL</th>
					<th>SUBJECT</th>
					<th>MESSAGE</th>
					<th>DATE</th>
					<th colspan="2">ACTIONS</th>
				</tr>
			</thead>
			<tbody>
<?php
	foreach ($contacts as $contact) {
		echo "<tr>
								<td>".$contact["contact_id"]."</td>
								<td>".$contact["name"]."</td>
								<td><a href='mailto:'>".$contact["email"]."</a></td>
								<td>".$contact["subject"]."</td>
								<td>".$contact["message"]."</td>
								<td>".$contact["date"]."</td>
								<td class='accao'>
									<a href='/admin/contactdetails/".$contact["contact_id"]."' class='edit'>SEE DETAILS</a></td>
								<td class='accao'>
									<a href='/admin/deletecontact/".$contact["contact_id"]."' class='del'>DELETE</a></td>
							</tr>";
	}
?>
			</tbody>
		</table>	
	</section>


	<?php include('includes/footeradmin.php'); ?>
</body>
</html>