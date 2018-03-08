<DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8"/>
		<title> Movie list </title>
	</head>
	<body>
		<h1> Accès au site de la NASA </h1>
		<?php
		if (isset($_POST['motdepass']) AND $_POST['motdepass'] == "kangourou")
		{
			echo 'Bravo vous avez entré le bon mot de pass ! vous pouvez maintenant accéder à la base de donnée de la NASA ! Trop cool non ?';
		}
		else 
		{
			echo 'Ah pas de chance ! Ce n\'est pas le bon mot pass! Oups ! '; 
		}
		?>
	</body>
</html>
