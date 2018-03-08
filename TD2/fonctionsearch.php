<?php

require "data.movies.php";
require "films.php";

function searchMovies($query, $movies)
{
	$rendu  = [];

	if (!empty($query) && !empty($query['titre']) && !empty($query['director']) && !empty($query['genre']))
	{
		foreach ($movies as $movie)
		{
			if (!empty($query['titre']) && !stristr($movie['title'], $query['titre']))
				
					continue;
				
			if (!empty($query['director']) && !stristr($movie['director'], $query['director']))
				
					continue;
				
			if (!empty($query['genre']) && !strcmp($movie['genre'], $query['genre']))
				
					continue;
				

			array_push($rendu, $movie);
		}
	}


return $rendu;
}


echo render_movie_list(searchMovies($_GET,$movies));
?>