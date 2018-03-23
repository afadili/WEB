<!DOCTYPE html>
<html>
<head>
	<title>Cast Informations </title>
	<style>
	body {background-color: #000033;
		color : white;
		font-family: sans-serif;
		font-weight: bold;}
</style>
</head>
<body>
<a href="casts.php">Cast List</a>
<h1>Cast Informations </h1>

<?php
	include "model/Cast.class.php";
	include "model/Movie.class.php";

	$cast = Cast::createFromId($_GET["id"]);
	echo "First Name : {$cast->getFirstName()}<br>Last Name :  {$cast->getLastName()}<br>BirthYear : {$cast->getBirthYear()}<br>DeathYear : {$cast->getDeathYear()}<br>";
	
	if (count($movies = Movie::getFromDirectorId($cast->getId()) ) > 0){
		echo "<br>";
		echo "Movies as Director : <br> <br>";
		
		foreach ($movies as $movie) 
			{
				echo "<a href = \"movie.php?id={$movie->getId()}\">".$movie->getTItle()."<br></a> ";
			}
		}
	
	if (count($movies = Movie::getFromActorId($cast->getId()) ) > 0){
		echo "<br><br>";
		echo "Movies as Actor : <br><br> ";
		foreach ( $movies as $movie) {
			echo  "<a href = \"movie.php?id={$movie->getId()}\">".$movie->getTItle()."<br></a>";
		}
	}
?>
</body>
</html>