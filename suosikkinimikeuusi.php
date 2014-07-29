<?php 
include('admin.php');
include('tietokanta.php');
/*
$sql="INSERT INTO suosikit SET
			sisaltoID='".$_GET["id"]."',
			lisaaja='".$_GET["lisaaja"]."',
			pvm ='".$_GET["pvm"]."'";*/

			$sql="INSERT INTO suosikit SET 
			sisaltoID='".$_GET["id"]."',
			lisaaja='".$_GET["lisaaja"]."',
			pvm='".$_GET["pvm"]."'";
			
			$mysql_haun_tulos = mysql_query($sql, $yhteys) or die("Kysely ei onnistunut: ". mysql_error());


//suljetaan yhteys
mysql_close($yhteys);

header('location: etusivu.php');


?>