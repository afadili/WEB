<?php

require "data.movies.php";
require "films.php";

function searchMovies($query, $movies)
{
	$rendu  = [];

	if (!empty($query) && (!empty($query['titre']) || !empty($query['director']) || !empty($query['genres'])))
	{
		foreach ($movies as $movie)
		{
			if (!empty($query['titre']) && !stristr($movie['title'], $query['titre']))
				{
					continue;
				}
				
			if (!empty($query['director']) && !stristr($movie['director'], $query['director']))
				{
					continue;
				}
				
			if (!empty($query['genres']) && !in_array($movie['genre'],$query['genres']))
				{
					continue;
				}
			$releaseDate = new DateTime();
        	$date = explode("-",$movie["releaseDate"]);
        	$releaseDate = $releaseDate->setISODate($date[0],$date[1],$date[2]);
        	$releaseDate = $releaseDate->getTimeStamp();
			
			if (!empty($query['dateMin']))
			{
				$timestamp = (new DateTime($query['dateMin']))->getTimestamp();
				if ($timestamp > $releaseDate)
				{
					continue;
				}
			}

			if (!empty($query['dateMax']))
			{
				$timestamp = (new DateTime($query['dateMax']))->getTimestamp();
				if ($timestamp < $releaseDate)
				{
					continue;
				}
			}

			array_push($rendu, $movie);
		}
	}


return $rendu;
}


echo movies(searchMovies($_GET,$movies));
?>