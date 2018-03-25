<DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8"/>
		<title> Movie search </title>
		<style>
	body {background-color: #000033;
		color : white;
		font-family: sans-serif;
		font-weight: bold;}
		</style>
	</head>
	<body>
		<h1> Movie Search </h1>
		<form action="result.php" method="GET">
		<fieldset>
			<legend> Movie </legend><p>
			<fieldset> Titre du film : <input type="text" name="titre"></p>
			<p> Date de sortie (start) : <input type="date" name="min_date"></p>
			<p> Date de sortie (end): <input type="date" name="max_date"></p>
			</fieldset>
			<fieldset>
			<legend> Genre </legend>
				<?php 
				require "model/Genre.class.php";
				foreach (Genre::getAll() as $genre) {
					echo "<label><input type = \"checkbox\" name =\"genre[]\" value = {$genre->getId()} > 
						{$genre->getName()} </label> <br> ";
				}
				?>
				</fieldset>
			</p></fieldset>
			<fieldset>
			<legend>Cast</legend>
			<p> Actor : <input type="text" name="actor"></p>
			<p> Director : <input type="text" name="director"></p>
			
			</fieldset>
			<p><input type="submit"></p>
		</form>

	</body>
</html>