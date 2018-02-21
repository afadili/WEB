<?php
$prenom = "Amina";
$nom = "Fadili";
$ville = "Rabat";
$age = 22;
if ($age > 1)
	echo "<div> Bonjour, Je m'appelle $prenom $nom, je viens de $ville et j'ai $age ans.</div>";
else 
	echo "<div> Bonjour, Je m'appelle $prenom $nom, je viens de $ville et j'ai $age an.</div>";
$personne['prenom'] = $prenom;
$personne['nom'] = $nom;
$personne['ville'] = $ville;
$personne['age'] = $age;
foreach ($personne as $key => $value) {
	echo "<div> $key : $value\n</div>";
}
$personne2['prenom'] = "Siham";
$personne2['nom'] = "Fadili";
$personne2['ville'] = "Rabat";
$personne2['age'] = "17";

$personnes = [$personne,$personne2];

if (empty($personnes) != true)
{
		echo "<ul>";
	foreach ($personnes as $perso => $value) 
	{
		foreach ($value as $key => $value) 
		{
			echo "<li> $key : $value </li>";
		}
			echo "<li> $perso : $value </li>";
	}
		echo "</ul>";
}
else 
{
	echo "Il n'y a personne !";
}
?>