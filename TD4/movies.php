<!DOCTYPE html>
<html>
<head>
	<title>Movie List </title>
	<style>
	body {background-color: #000033;
		color : white;
		font-family: sans-serif;
		font-weight: bold;}
</style>
</head>
<body>
<a href="casts.php">Return to Cast List</a>
<h1>Movie List </h1>

<ul>
	<?php
	include "model/Movie.class.php";
	foreach (Movie::getAll() as $movie) {
		echo "
		<li>
			<a href = \"movie.php?id={$movie->getId()}\">
			{$movie->getTitle()} - ({$movie->getReleaseDate()})
			</a>
		</li>
		"; 
	}
		?>
</ul>
</body>
</html>