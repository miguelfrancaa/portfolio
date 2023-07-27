<!DOCTYPE html>
<html>
<head>
	<title>Backend - Login</title>
	<meta name="keywords" content="Backend Hugo Vaz">
	<meta name="description" content="Backend Hugo Vaz">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--BOOTSTRAP -->
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.min.css">
	<!-- STYLE SHEET -->
	<link rel="stylesheet" type="text/css" href="/css/styleadmin.css">

	<script src="/js/jquery-3.6.3.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>

	<script src="/js/scriptadmin.js"></script>
</head>
<body class="login">	

	<div class="fundo">
		<div class="logo-login">
			<img src="img/logo.png">
			<br>
			<form method="post" action="/admin/login">
				<input type="hidden" name="csrf_token" value="<?= $_SESSION["csrf_token"]?>">
				<div class="bloco">
					<input type="username" name="username" placeholder="username" max="64" min="5" required>
				</div>
				<div class="bloco">
					<input type="password" name="password" placeholder="coloque a sua password" max="255" min="5" required>
				</div>
				<div class="bloco">
					<button type="submit" name="send">Log In</button>
				</div>
<?php
	if(!empty($message)){
		echo $message;
	}
?>
			</form>
		</div>
	</div>
</body>
</html>