<?php
session_start();

//tarkastetaan onko sessio user p��ll�, jos ei ole ohjataan kirjautumaan.
if (!isset($_SESSION['user'])) 
	{
		header('Location: index.php');
	}

?>