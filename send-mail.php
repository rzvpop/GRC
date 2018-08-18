<?php
	
	if(isset($_GET['subject']) && $_GET['subject'] != "")
	{
		$to = "garacosmart@xhost.ro";
		$subject = $_GET['subject'];
		$name = $_POST['nume'];
		$email = $_POST['email'];
		$message = "Nume: {$name}/n/rEmail: {$email}/r/n{$_POST['additional']}";
		
		mail($to, $subject, $message);
		
		header("Location: ../?page=home");
		die();
	}
?>