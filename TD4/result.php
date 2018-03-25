<!DOCTYPE html>
<html>
<head>
	<style>
	body {background-color: #000033;
		color : white;
		font-family: sans-serif;
		font-weight: bold;}
		</style>
</head>
<body>



<?php
require_once 'model/MyPDO.imac.movies.include.php'; 
require "model/Movie.class.php";
$result = MyPDO::getInstance()->prepare("
	SELECT *  FROM Movie 
	WHERE Movie.title LIKE :title
	AND releaseDate > :minDate AND releaseDate < :maxDate
	AND Movie.id IN (SELECT idMovie FROM Director JOIN Cast ON idDirector = Cast.id WHERE CONCAT(firstName,\" \",lastName) LIKE :director )
	AND Movie.id IN (SELECT idMovie FROM Actor JOIN Cast ON idActor = Cast.id WHERE CONCAT(firstName,\" \",lastName) LIKE :actor )
	");
$result->execute(array(
	":title"		=>("%". $_GET["titre"]."%"), 
	":minDate"	=> $_GET["min_date"],
	":maxDate"	=> $_GET["max_date"],
	":director"	=>("%".$_GET["director"]."%"),
	":actor"		=>("%".$_GET["actor"]."%")
	));
$result->setFetchMode(PDO::FETCH_CLASS,"Movie");
 if (($object = $result->fetchAll()) !== false)
 {
 	echo "<ul>";
	foreach ($object as $movie) {
		echo "
		<li>
			<a href = \"movie.php?id={$movie->getId()}\">
			{$movie->getTitle()} - ({$movie->getReleaseDate()})
			</a>
		</li>
		"; 
	}
	echo "</ul>";
}
 else
	throw new Exception("Id n'existe pas dans la bdd");

?>
</body>
</html>