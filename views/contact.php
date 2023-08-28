<?php
	require("includes/head.php");
	require("includes/header.php");
?>
	<main>
		<div class="container">
		<form class="formClient" method="post" action="/contact">
			<label id="labelName" for="name" id="fname">Name</label>
			<input id="inputName" type="text" name="name" min="3" max="64" require><br><br>
			<label id="labelEmail" for="email" id="femail">Email</label>
			<input id="inputEmail" type="email" name="email" min="5" max="255" require><br><br>
			<label id="labelSubject" for="subject" id="fsubject">Subject</label>
			<input id="inputSubject" type="text" name="subject" min="3" max="64" require><br><br>
			<label id="labelMessage" for="message" id="fmessage">Message</label>
			<textarea id="inputMessage" name="message" minlength="5" require></textarea><br><br><br>
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