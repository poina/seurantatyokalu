<?php
include('admin.php');
include('tietokanta.php');

$sql="delete from seuranta where id=" . $_GET["id"];
$mysql_haun_tulos = mysql_query($sql, $yhteys) or die("Kysely ei onnistunut: ". mysql_error());
mysql_close($yhteys);

header('location: kauppalistaus.php');

?>