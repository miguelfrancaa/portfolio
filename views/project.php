<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>GABRIEL FERNANDES</title>
		<meta name="keywords" content="GABRIEL FERNANDES">
		<meta name="description" content="gabriel, fernandes, design, graphic, portugal, brasil, art, projects">
		<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/style.css">
	</head>
<body>
	<header>
		<div class="container header">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-12 gabiruska">GABRIEL FERNANDES</div>
				<div class="col-md-6 col-sm-6 col-xs-12 projectsnabout"><a>PROJECTS</a>, <a href="about.html">ABOUT</a></div>
				<div class="col-md-3 col-sm-3 col-xs-12 contactHeader">CONTACT</div>
			</div>
		</div>
	</header>
	<main>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 projectTitle">
					<?= $project["title"] ?> <span class="date">(<?= $project["year"] ?>)</span>
				</div>
			</div>
			<div class="row">
			<div class="col-md-6 col-sm-12 col-xs-12 description">
				<?= $project["description"] ?>
			</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="imgOne">
						<img src="/img/projects/<?= $project["img_description"] ?>">
					</div>
				</div>
			</div>
			<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 description2">
				<?= $project["content1"] ?>
			</div>
			</div>
			<div class="row servicesProject">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<hr>
					<div class="client"><div>Client</div><div class="client2"><?= $project["client"] ?></div></div>
					<hr>
					<div class="client"><div>Year</div><div class="client2"><?= $project["year"] ?></div></div>
					<hr>
					<div class="client"><div>Services</div><div class="client2"><?= $project["services"] ?></div></div>
					<hr>
				</div>
				<div class="col-md-3"></div>
			</div>
<?php
	foreach ($projectimgs as $projectimg) {
		echo "<div class='row'>
				<div class='col-md-12 col-sm-12 col-xs-12'>
					<div class='imgOne'>
						<img src='/img/projects/".$projectimg["name"]."'>
					</div>
				</div>
			</div>";
	}
?>
			<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 description2">
				<?= $project["content2"] ?>
			</div>
			</div>
		</div>
	</main>
	<footer>
		<div class="container footerContainer">
			<div class="col-md-4 col-sm-12 col-xs-12 a">
				<span>Instagram</span>
				<span>Dribble</span>
				<span>Twitter</span>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12 b"><button id="topBtn">Back To Top &nbsp&nbsp<i class="fa fa-arrow-up"></i></button></div>
			<div class="col-md-4 col-sm-12 col-xs-12 c">Copyright</div>
		</div>
	</footer>

<script src="/js/jquery-3.6.0.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/script.js"></script>
</body>
</html>