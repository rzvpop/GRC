<?php

	if(isset($_POST['demands']))
	{
		if($file = fopen("file.txt", "a"))
		{
			fwrite($file, $_POST['demands']."\n");
			fclose($file);
		}
	}

	header("Location: ./");
	die();
?>
