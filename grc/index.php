<?php

	$page_name = "home";
	if(isset($_GET['page']))
	{
		$page_name = $_GET['page'];
	}
	
?>


<!DOCTYPE HTML>

<html>
	<head>
		<link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

        <link rel="icon" type="image/ico" href="./imagini/icon.png">
        <title>Home</title>
<!--         Latest compiled and minified CSS-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!--		 Optional theme-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!--		 Latest compiled and minified JavaScript-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="row">
		<?php
			include "./menu-module.php";
			?>
        </div>
        <div class="row">
			<?php
			if(file_exists("./{$page_name}.php"))
				include "./{$page_name}.php";
			?>

        </div>
        <?php
        if($page_name!="home" && $page_name != "")
        {
            ?>

            <div style="float: right"> <a href="./" class="button1"><i class="fa fa-home"></i>  Înapoi la pagina principală </a></div>
            <?php
        }
        ?>
		<?php
			die();
		?>
	</body>
</html>

