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
	</header>
	<main>
			
		<div class="initialWindow">
		<div class="container presentation">
			<div class="row">
				<div class="col-md-12 gdesigner">SELECTED WORK<br>(2018 - 2023)<br></div>
			</div>
			<div class="row">
				<div class="col-md-8 col-sm-12 col-xs-12 gabout">Have a look at some of the projects I’ve worked on. Clients vary from lifestyle to tech and design companies.</div>
			</div>
			<div class="row filterProjects">
				<div class="col-md-3 col-sm-12 col-xs-12"><button class="filter-button active" data-filter="all">All</button></div>
				<div class="col-md-3 col-sm-12 col-xs-12"><button class="filter-button" data-filter="webDesign">Web Design</button></div>
				<div class="col-md-3 col-sm-12 col-xs-12"><button class="filter-button" data-filter="identity">Identity</button></div>
				<div class="col-md-3 col-sm-12 col-xs-12"><button class="filter-button" data-filter="illustration">Illustration</button></div>
			</div>
		</div>
		</div>
		<div class="container projectsindex2">
<?php
	foreach($projects as $project){
		echo "<div class='projectBlock'>
			<div class='row eachProject ".$project["class"]."'>
			<div class='row'>
				<a href='project/".$project["project_id"]."'><div class='col-md-12 col-sm-12 col-xs-12 imgProject'>
					<div class='imgProject2' style='background-image: url(img/projects/".$project["img_description"].");'></div>
				</div></a>
			</div>
			<div class='row projectInfo'>
				<div class='col-md-6 projectName'>".$project["title"]."</div>
				<div class='col-md-6 projectDate'>(".$project["year"].")</div>
				<div class='col-md-6 projectText'>".$project["description"]."</div>
			</div>
			</div>
			</div>";
	}
?>
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