<!DOCTYPE html>
<html>
<head>
	<title>Movie Informations </title>
	<style>
	body {background-color: #000033;
		color : white;
		font-family: sans-serif;
		font-weight: bold;}
</style>
</head>
<body>
<a href="movies.php">Return to Movie List</a>
<h1>Movie Informations </h1>

<?php
	include "model/Movie.class.php";
	include "model/Genre.class.php";
	include "model/Cast.class.php";
	include "model/Country.class.php";

	$movie = Movie::createFromId($_GET["id"]);
	$country = Country::createFromId($movie->getIdCountry());
	echo "Title : {$movie->getTitle()}<br>Date de sortie :  {$movie->getReleaseDate()}<br> Country : {$country->getName()}<br> ";

	if (count($genres =$movie->getGenres() ) > 0){
		echo "<br><br>";
		echo "Genre  : <br><br> ";
		foreach ( $genres as $genre) {
			echo $genre->getname()."<br>";
		}
	}
	if (count($directors = Cast::getDirectorsFromMovieId($movie->getId()) ) > 0){
		echo "<br>";
		echo "Director(s) : <br> <br>";
		
		foreach ($directors as $director) 
			{
				echo "<a href = \"cast.php?id={$director->getId()}\"> {$director->getFirstName()} {$director->getLastName()}<br> </a>";
			}
		}
	
	if (count($actors = Cast::getActorsFromMovieId($movie->getId()) ) > 0){
		echo "<br><br>";
		echo "Actor(s) : <br><br> ";
		foreach ( $actors as $actor) {
			echo  "<a href = \"cast.php?id={$actor->getId()}\">{$actor->getFirstName()} {$actor->getLastName()}<br> </a>";
		}
	}
?>
</body>
</html>