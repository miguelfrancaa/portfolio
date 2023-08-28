<?php
	require("includes/head.php");
	require("includes/header.php");
?>
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
	echo $about["text1"];
?>
				</div>
			</div>
			<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<img class="imgAbout" src="img/<?= $about["img"] ?>">
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
				<div class='col-md-8 col-sm-0 col-xs-0 goalAll'>
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
				<div class='col-md-3 col-sm-12 col-xs-12 serviceNumber'>0".$num2.".</div>
				<div class='col-md-3 col-sm-12 col-xs-12 serviceName'>".$service["title"]."</div>
				<div class='col-md-6 col-sm-12 col-xs-12 serviceContent'>".$service["content"]."</div>
			</div>";
	}
?>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<img class="imgAbout" src="img/<?= $about["img_2"] ?>">
			</div>
			</div>
		</div>
		</div>
		
	</main>
<?php
	require("includes/footer.php");
	require("includes/scripttags.php");
?>