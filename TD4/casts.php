
<!DOCTYPE html>
<html>
<head>
	<title>Cast list </title>
	<style>
	body {background-color: #000033;
		color : white;
		font-family: sans-serif;
		font-weight: bold;}
</style>
</head>
<body>
<a href="movies.php">Movie List</a>
<h1> MOVIES </h1>
<h2> Cast List </h2>
<ul>
	<?php
	include "model/Cast.class.php";
	foreach (Cast::getAll() as $cast) {
		echo "
		<li>
			<a href = \"cast.php?id={$cast->getId()}\">
			{$cast->getFirstname()} {$cast->getLastname()}
			</a>
		</li>
		"; 
	}
		?>
</ul>
</body>
</html>