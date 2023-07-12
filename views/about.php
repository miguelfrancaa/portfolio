<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>GABRIEL FERNANDES</title>
		<meta name="keywords" content="GABRIEL FERNANDES">
		<meta name="description" content="gabriel, fernandes, design, graphic, portugal, brasil, art, projects">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
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
		</div>
	</header>
	<main>
			
		<div class="initialWindow">
		<div class="container presentation">
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12 gdesigner">
<?php
	echo $about["title"];
?>
					<br></div>
			</div>
			<div class="row">
				<div class="col-md-8 col-sm-12 col-xs-12 gabout">
<?php
	echo $about["text"];
?>
				</div>
			</div>
			<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<img class="imgAbout" src="<?= $about["img"] ?>">
			</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-0 col-xs-0"></div>
				<div class="col-md-8 col-sm-0 col-xs-0 aboutText">
<?php
	echo $about["text2"];
?>
				</div>
			</div>
<?php
	$num = 0;

	foreach ($objectives as $objective) {

		$num++;

		echo "<div class='row eachGoal'>
				<div class='col-md-4 col-sm-0 col-xs-0'></div>
				<div class='col-md-8 col-sm-0 col-xs-0'>
					<div class='col-md-3 col-xs-4 col-sm-4'>0".$num.".</div>
					<div class='col-md-9 col-xs-8 col-sm-8'>
						<div class='goalTitle'>".$objective["objective_title"]."</div><br>
						<div class='goalText'>".$objective["objective_content"]."</div>
				</div>
				</div>";
	}
?>
			</div>
			<div class="container servicesContainer">
			<div class="row">
				<div class="col-md-12 gdesigner services">SERVICES<br></div>
			</div>
<?php
	$num2 = 0;

	foreach($services as $service){

		$num2++;

		echo "<div class='row eachService'>
				<hr>
				<div class='col-md-3 col-sm-12 col-xs-12 serviceNumber'>0".$num.".</div>
				<div class='col-md-3 col-sm-12 col-xs-12 serviceName'>".$service["title"]."</div>
				<div class='col-md-6 col-sm-12 col-xs-12 serviceContent'>".$service["content"]."</div>
			</div>";
	}
?>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<img class="imgAbout" src="img/gabrielteste1.png">
			</div>
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

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>