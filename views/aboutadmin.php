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
	
	<section>
		<div class="sectionAb">
		<h4>TITLE</h4>
		<div><?=$about["title"]?><a href="/admin/editabout/titleabout" class="btn" style="float: right;">EDIT</a></div>
		</div>
		<div class="sectionAb">
		<h4>TEXT</h4>
		<div><?=$about["text1"]?><a href="/admin/editabout/textabout" class="btn" style="float: right;">EDIT</a></div>
		</div>
		<div class="sectionAb">
		<h4>IMG</h4>
		<a href="/admin/editabout/img" class="btn" style="">EDIT</a><br>
		<img src="/img/<?=$about["img"]?>">
		</div>
		<div class="sectionAb">
		<h4>TEXT2</h4>
		<div><?=$about["text2"]?><a href="/admin/editabout/textabout" class="btn" style="float: right;">EDIT</a></div>
		</div>
		<div class="sectionAb">
		<h4>IMG2</h4>
		<a href="/admin/editabout/img2" class="btn" style="">EDIT</a><br>
		<img src="/img/<?=$about["img_2"]?>">
		</div>
		<div class="sectionAb">
		<h4>SERVICES</h4>
<?php
	$num = 0;

	foreach ($services as $service) {
		$num++;
		echo "
			<div>".$num.". <span class='serviceTitle'>".$service["title"]."</span></div>
			 <div>".$service["content"]."</div>
			 <a href='/admin/editabout/textabout' class='btn' style='float: right;'>EDIT SERVICE</a><br>
			 <hr>'
		";
	}
?>
	<a href="/admin/editabout/textabout" class="btn" style="">ADD SERVICE +</a><br><br>
	</div>
	</section>

	<?php include('includes/footeradmin.php'); ?>
</body>
</html>