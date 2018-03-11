
<?php

/* fonction render_movie_list */

function movies ($movies)
{
	if (empty($movies) != true)
	{
			$rendu = "<ul>";
		foreach ($movies as $key) {
			$rendu.= "<li>{$key["title"]}({$key["releaseDate"]})</li> 
			<ul> 
			<li>Genre :{$key["genre"]}</li>
			<li>Director :{$key["director"]}</li>
			</ul>";
		}
		$rendu.="</ul>"; 
	return $rendu;
	}

	$rendu = "Pas de films disponible pour votre recherche ... Oups !";
	return $rendu ;	
}

?>

