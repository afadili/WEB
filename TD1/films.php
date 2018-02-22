<DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8"/>
		<title> Movie list </title>
	</head>
	<body>
		<h1> Movie List </h1>
<?php

/* fonction render_movie_list */

function render_movie_list ($movies, $genre, $annee)
{
	if (empty($movies) != true)
	{
			$rendu = "<ul>";
		foreach ($movies as $key) {
			$rendu.= "<li>";
			if ($key["year"] >= date('Y')-$annee) // teste si le film a moins de $annee ans et il le met en gras
			{
				$rendu.= $key["title"]." "."<strong>". "(".$key["year"].")"."</strong>";
				$rendu.= "</li>";
			}
			else // sinon il ne fait rien
			{
				$rendu.= $key["title"]. " ". "(" . $key["year"]. ")";
				$rendu.= "</li>";
			}
			$rendu.= "<ul>";
			if ($key["genre"] == $genre ) // test si le genre est ce qu'on veut et le met en bleu
			{
				$rendu.= "<li>";
				$rendu.= "<span style = 'color : blue'>"."Genre :".$key["genre"]."</span>";
				$rendu.= "</li>";
				$rendu.= "<li>";
				$rendu.= "Director :".$key["director"];
				$rendu.= "</li>";
			}
			else // sinon il ne fait rien
			{
				$rendu.= "<li>";
				$rendu.= "Genre : ".$key["genre"];
				$rendu.= "</li>";
				$rendu.= "<li>";
				$rendu.= "Director : ".$key["director"];
				$rendu.= "</li>";
			}
			$rendu.= "</ul>";
			
		}
		$rendu.="</ul>";
		return $rendu;
	}
	else 
	{
		$rendu = "Pas de films disponible pour le moment ... Oups !";
		return $rendu ;
	}	
}

require "data.movies.php";
echo render_movie_list($movies, "Science Fiction", 10);

?>
</body>
</html>
