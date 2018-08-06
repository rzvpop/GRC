<?php

	/*if(isset($_POST['additional']))
	{
		$mail = mail("razvan.liniuta@gmail.com", "some test", $_POST['additional']);
	}	*/
	
	error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_STRICT);
	
	set_include_path("." . PATH_SEPARATOR . ($UserDir = dirname($_SERVER['DOCUMENT_ROOT'])) . "/pear/php" . PATH_SEPARATOR . get_include_path());
	require_once "Mail.php";
	
	$host = "ssl://www.bluepink.ro/m";
	$username = "garacosmart@xhost.ro";
	$password = "caracter12";
	$port = "25";
	$to = "razvan.liniuta@gmail.com";
	$email_from = "garacosmart@xhost.ro";
	$email_subject = "Subject Line Here: " ;
	$email_body = "whatever you like" ;
	$email_address = "garacosmart@xhost.ro";
	
	$headers = array ('From' => $email_from, 'To' => $to, 'Subject' => $email_subject, 'Reply-To' => $email_address);
	$smtp = Mail::factory('smtp', array ('host' => $host, 'port' => $port, 'auth' => true, 'username' => $username, 'password' => $password));
	$mail = $smtp->send($to, $headers, $email_body);
	
	
	if (PEAR::isError($mail)) {
	echo("<p>" . $mail->getMessage() . "</p>");
	} else {
	echo("<p>Message successfully sent!</p>");
	}
	
	//header("Location: ./");
	die();
?>
