<?php
session_start();

//tarkastetaan onko sessio user pההllה, jos ei ole ohjataan kirjautumaan.
if (!isset($_SESSION['user'])) 
	{
		header('Location: index.php');
	}

?>