<?php
include('useroikeus.php');
include('tietokanta.php');


// SQL-kysely - tuotteen lisäys
$sql="delete from suosikit where id=" . $_GET["id"];


//suoritetaan kysely
$mysql_haun_tulos = mysql_query($sql, $yhteys) or die("Kysely ei onnistunut: ". mysql_error());


//suljetaan yhteys
mysql_close($yhteys);

header('location: suosikit.php');

?>