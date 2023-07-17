<?php
	require("includes/head.php");
	require("includes/header.php");
?>
	<main>
		<div class="container">
		<form method="post" action="/contact">
			<label for="name" id="fname">Name</label>
			<input type="text" name="name" min="4" max="32" require><br>
			<label for="email" id="femail">Email</label>
			<input type="email" name="email" min="5" max="255" require><br>
			<label for="subject" id="fsubject">Subject</label>
			<input type="text" name="subject" min="5" max="200" require><br>
			<label for="message" id="fmessage">Message</label>
			<input type="text" name="message" require><br>
			<button type="submit" name="submit">Send Message</button>
		</form>
<?php
if (isset($_POST["submit"])) {
	echo $message;
}
?>
		</div>

	</main>
	<script>
    	if ( window.history.replaceState ) {
    	    window.history.replaceState( null, null, window.location.href );
   		 }
	</script>
<?php
	require("includes/footer.php");
	require("includes/scripttags.php");

?>