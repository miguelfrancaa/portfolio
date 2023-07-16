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
				<div class="col-md-12 gdesigner"><span class="gabiru">GABRIEL FERNANDES</span>,<br><span class="graphicdesigner">GRAPHIC DESIGNER</span></div>
			</div>
			<div class="row">
				<div class="col-md-8 col-sm-12 col-xs-12 gabout"><div class="gabout1">Through strategic art direction and webdesign </div> <div class="gabout2">I help companies around the world grow their business.</div></div>
			</div>
			<div class="row">
				<div class="col-md-12 gcontact"><a class="contact" href="mailto:gabrielfrnds@gmail.com">gabrielfrnds@gmail.com</a></div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-xs-12 col-sm-12 arrowdownnnn">
					<div><span class="arrowText">Last Projects</span><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span><div class="fa fa-arrow-down arrowdown"></div></div>
				</div>
			</div>
		</div>
		</div>
		<div class="container projectsindex">
<?php
	foreach ($projects as $project) {
		$numberProject = $numberProjects[0]--;

		echo "
		<div class='projectBlock'>
			<div class='row eachProject'>
				<div class='col-md-6 col-sm-12 col-xs-12 '>
					".$project["title"]."<br>
				</div>
				<div class='col-md-6 col-sm-12 col-xs-12 projectNumber'>(".str_pad($numberProject, 3, '0', STR_PAD_LEFT).")</div>
			</div>
			<div class='row'>
				<div class='col-md-12 col-sm-12 col-xs-12 imgProject' style='background-image: url(img/projects/".$project["img_description"].");'></div>
			</div>
			</div>
		";
	}
?>
		</div>
	</main>
	<footer>
		<div class="container footerContainer">
			<div class="col-md-4 a">
				<span>Instagram</span>
				<span>Dribble</span>
				<span>Twitter</span>
			</div>
			<div class="col-md-4 b"><button id="topBtn">Back To Top &nbsp&nbsp<i class="fa fa-arrow-up"></i></button></div>
			<div class="col-md-4 c">Copyright</div>
		</div>
	</footer>

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>