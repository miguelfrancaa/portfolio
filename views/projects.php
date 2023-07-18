<?php
	require("includes/head.php");
	require("includes/header.php");
?>
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
			<a href='project/".$project["project_id"]."'>
			<div class='row eachProject ".$project["class"]."'>
			<div class='row'>
				<div class='col-md-12 col-sm-12 col-xs-12'>
					<img src='img/projects/".$project["img_description"]."'>
				</div>
			</div>
			<div class='row projectInfo'>
				<div class='col-md-6 projectName'>".$project["title"]."</div>
				<div class='col-md-6 projectDate'>(".$project["year"].")</div>
				<div class='col-md-6 projectText'>".$project["description"]."</div>
			</div>
			</div>
			</a>
			</div>";
	}
?>
		</div>
		
	</main>
<?php
	require("includes/footer.php");
	require("includes/scripttags.php");
?>