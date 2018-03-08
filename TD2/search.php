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
			<p> Date de sortie : <input type="date" name="date"></p>
			<p> Genre : <select name="genre">
				<option value ="action">Action</option>
				<option value ="drama">Drama</option>
				<option value ="science fiction">Science Fiction</option>
				<option value ="animation">Animation</option>
				<option value ="adventure">Adventure</option>
				<option value ="horror">Horror</option>
				<option value ="comedy">Comedy</option>
				<option value ="thriller">Thriller</option>
				<option value ="western">Western</option>
			</select></p>
			<p> Director : <input type="text" name="director"></p>
			<p><input type="submit"></p>
		</form>
	</body>
</html>