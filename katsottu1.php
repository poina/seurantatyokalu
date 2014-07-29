<?php
include('admin.php');

include('tietokanta.php');

$id = $_GET["id"];
$sql="UPDATE seuranta SET katsottu='0' where id='".$id."'";
$mysql_haun_tulos = mysql_query($sql, $yhteys) or die("Kysely ei onnistunut: ". mysql_error());
mysql_close($yhteys);
header('location: kauppalistaus.php');

?>