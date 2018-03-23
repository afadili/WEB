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
		<form action="fonctionsearch.php" method="GET">
		<fieldset>
			<legend> Movie </legend><p>
			<fieldset> Titre du film : <input type="text" name="titre"></p>
			<p> Date de sortie (start) : <input type="date" name="date"></p>
			<p> Date de sortie (end): <input type="date" name="date"></p>
			</fieldset>
			<fieldset>
			<legend> Genre </legend>
				<input type ="checkbox" name ="action" value = "action">Action<br>
				<input type="checkbox" name ="drama" value = "drama">Drama<br>
				<input type="checkbox" name ="science fiction" value = "science fiction">Science Fiction<br>
				<input type ="checkbox" name="animation" value = "animation">Animation<br>
				<input type ="checkbox" name ="adventure" value = "adventure">Adventure<br>
				<input type ="checkbox" name ="horror" value = "horror">Horror<br>
				<input type="checkbox" name ="comedy" value = "comedy">Comedy<br>
				<input type ="checkbox" name ="thriller" value = "thriller">Thriller<br>
				<input type ="checkbox" name ="western" value = "western">Western<br>
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