<DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8"/>
		<title> Movie list </title>
	</head>
	<body>
		<h1> Accès au site de la NASA </h1>
		<form action="formulaire.php" method="POST">
			<p><label> Entrez le mot de pass secret : <input type="text" name="motdepass"></label></p>
			<p><input type="submit"></p>
		<?php
		if (isset($_POST['motdepass']) AND $_POST['motdepass'] == "kangourou")
		{
			echo 'Bravo vous avez entré le bon mot de pass ! vous pouvez maintenant accéder à la base de donnée de la NASA ! Trop cool non ?';
		}
		else 
		{
			if (empty($_POST['motdepass']) != true)
			echo 'Ah pas de chance ! Ce n\'est pas le bon mot pass! Oups ! '; 

		}
		?>
		</form>
	</body>
</html>
