<?php
include('admin.php');

include('tietokanta.php');


// SQL-kysely - tuotteen lisäys
$sql="delete from tunnus where id=" . $_GET["id"];


//suoritetaan kysely
$mysql_haun_tulos = mysql_query($sql, $yhteys) or die("Kysely ei onnistunut: ". mysql_error());


//suljetaan yhteys
mysql_close($yhteys);

header('location: kayttaja.php');

?>