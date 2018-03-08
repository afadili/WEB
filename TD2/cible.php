	<?php
	echo "Table de multiplication du Nombre : ".$_POST['Nombre'];
	for ($i=0; $i<=10; $i++)
	{
		echo "<br>";
		echo $_POST['Nombre'] ."x".$i ."=". $_POST['Nombre']*$i;
		echo "</br>";
	}
	?>