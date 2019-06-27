<?php

if(isset($_POST['name'], $_POST['subject'], $_POST['email'], $_POST['message'])) {
	// post
	$name     = $_POST['name'];
	$subject  = $_POST['subject'];
	$mailFrom = $_POST['email'];
	$message  = $_POST['message'];

	// datas
	$mailTo   = 'medhi.louison@icloud.com';
	$headers  = "From: $mailFrom \r\n";
	$headers .= "Reply-To: $mailTo \r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF8\r\n";
	$txt      = <<<HTML
<h1>BY COUTURE - Nouveau message</h1>
<h3>Informations sur le message :</h3>
<ul>
	<li>Nom : $name</li>
	<li>Mail : $mailFrom</li>
	<li>Sujet : $subject</li>
</ul>

<h3>Message :</h3>
$message
HTML;

	// mail
	if(mail($mailTo, "Nouveau message : $subject", $txt, $headers)) {
		$redirect = 'success';
	} else {
		$redirect = 'error-mail';
	}
} else {
	$redirect = 'error-post';
}

header("Location : contact.php?send=$redirect");