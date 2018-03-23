<DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8"/>
		<title> Movie list </title>
	</head>
	<body>
		<h1> Search Movies </h1>
		<form action="fonctionsearch.php" method="GET">
			<p> Titre du film : <input type="text" name="titre"></p>
			<p> Date minimale : <input type="date" name="dateMin"></p>
			<p> Date maximale : <input type="date" name="dateMax"></p>
			<p> Genre : <br>
				<?php 
				require "data.movies.php";
				foreach ($genres as $genre)
				{
					echo "<label> <input type=\"checkbox\" name=\"genres[]\" value=\"$genre\">$genre</label><br>";
				}
				?>
			</select></p>
			<p> Director : <input type="text" name="director"></p>
			<p><input type="submit"></p>
		</form>
	</body>
</html>