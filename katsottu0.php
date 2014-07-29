<?php
include('admin.php');

include('tietokanta.php');
$false = 0;

$id = $_GET["id"];

					/*$sqlPaivita0="UPDATE `seuranta` SET `katsottu`=0 WHERE id = '$id'";
					$mysql_haun_tulos0 = mysql_query($sqlPaivita0, $yhteys) or die("Kysely ei onnistunut: ". mysql_error());*/
				
			$sql="UPDATE seuranta SET katsottu='1' where id='".$id."'";
		 		 
		$mysql_haun_tulos = mysql_query($sql, $yhteys) or die("Kysely ei onnistunut: ". mysql_error());

//suljetaan yhteys
mysql_close($yhteys);

header('location: kauppalistaus.php');

?>