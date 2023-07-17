<?php
	require("includes/head.php");
	require("includes/header.php");
?>
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
<?php
	require("includes/footer.php");
	require("includes/scripttags.php");
?>