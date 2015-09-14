<?php
$name = $_POST['name'];
$email = $_POST['email'];
$headers = 'From: web@goodwoodlumberyard.com.au' . "\r\n" .
				'Reply-To: web@goodwoodlumberyard.com.au' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();

mail ($email, 'Contact', 'Thanks for contacting us '.$name.', we\'ll get back to you as soon as possible', $headers);
	
?>