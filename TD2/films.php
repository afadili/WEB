
<?php

/* fonction render_movie_list */

function render_movie_list ($movies, $genre = "", $annee = "")
{
	if (empty($movies) != true)
	{
			$rendu = "<ul>";
		foreach ($movies as $key) {
			$rendu.= "<li>";
			if ($key["releaseDate"] >= date('Y')-$annee) // teste si le film a moins de $annee ans et il le met en gras
			{
				$rendu.= $key["title"]." "."<strong>". "(".$key["releaseDate"].")"."</strong>";
				$rendu.= "</li>";
			}
			else // sinon il ne fait rien
			{
				$rendu.= $key["title"]. " ". "(" . $key["releaseDate"]. ")";
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


?>

