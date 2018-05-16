<?php

if (isset($_POST['submit'])) {
	$nume = $_POST['nume'];
	$subiect = $_POST['subiect'];
	$mailFrom = $_POST['mail'];
	$mesaj = $_POST['mesaj'];

	$mailTo = "sirbu.irina1994@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt = "Ai primit un email de la " .$nume.".\n\n".$mesaj;
	mail("sirbu.irina1994@gmail.com", $subiect, $txt, $headers);
	header("Location: contact.php?mailsend");
}

?>