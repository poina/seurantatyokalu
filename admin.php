<?php
session_start();

//tarkastetaan onko sessio user p��ll�, jos ei ole ohjataan kirjautumaan.
if (!isset($_SESSION['user'])) 
	{
		header('Location: index.php');
	}
//puretaan sessiotiedot taulukkoon	
$i = explode(".",($_SESSION["user"]));
//jos taulukossa toinen sarake on joku muu kuin 1, ohjataan pois.
if($i[1] != 1)
	{
		header('Location: index.php');
	}
?>