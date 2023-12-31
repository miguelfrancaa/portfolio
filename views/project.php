<?php
	require("includes/head.php");
	require("includes/header.php");
?>
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
			<div class="row nearProjects">
			<div class="col-md-6 previousproject">
<?php
	if(!empty($previousproject)){
		echo "<a href='/project/". $previousproject["project_id"] ."'><- PREVIOUS PROJECT</a>";
	}
?>
			</div>
			<div class="col-md-6 nextproject">
<?php
	if(!empty($nextproject)){
		echo "<a href='/project/". $nextproject["project_id"] ."'>NEXT PROJECT -></a>";
	}
?>
			</div>
			</div>

		</div>
	</main>
		
<?php
	require("includes/footer.php");
	require("includes/scripttags.php");
?>