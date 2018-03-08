<?php
	if(!empty($_POST["fruit"]))
	{
		echo "J'adore ";
		foreach ($_POST["fruit"] as $key => $value) {
			echo $value.",";
		}
	}
	else 
	{
		echo "Vous n'avez pas coché de case";
	}
	?>