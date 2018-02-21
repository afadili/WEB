<DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8"/>
		<title> Movie list </title>
	</head>
	<body>
		<h1> Movie List </h1>
	</body>
	</html>

<?php

/* fonction render_movie_list */

function render_movie_list ($movies)
{
	$rendu = "<ul>";
	foreach ($movies as $key) {
		$rendu.= "<li>";
		if ($key["year"] >= date('Y')-10) // teste si le film a moins de 10 ans et il le met en gras
		{
			$rendu = $rendu.$key["title"]." "."<strong>". "(".$key["year"].")"."</strong>";
			$rendu.= "</li>";
		}
		else // sinon il ne fait rien
		{
			$rendu = $rendu.$key["title"]. " ". "(" . $key["year"]. ")";
			$rendu.= "</li>";
		}
		$rendu.= "<ul>";
		if ($key["genre"] == "Science Fiction") // test si le genre est science fiction et le met en bleu
		{
			$rendu.= "<li>";
			$rendu = $rendu."<span style = 'color : blue'>"."Genre :".$key["genre"]."</span>";
			$rendu.= "</li>";
			$rendu.= "<li>";
			$rendu = $rendu."Director :".$key["director"];
			$rendu.= "</li>";
		}
		else // sinon il ne fait rien
		{
			$rendu.= "<li>";
			$rendu = $rendu."Genre : ".$key["genre"];
			$rendu.= "</li>";
			$rendu.= "<li>";
			$rendu = $rendu."Director : ".$key["director"];
			$rendu.= "</li>";
		}
		$rendu.= "</ul>";
		
	}
	$rendu.="</ul>";
	return $rendu;
}

require "data.movies.php";
echo render_movie_list($movies);

?>