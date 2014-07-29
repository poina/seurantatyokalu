<?php
include('admin.php');

$id = mysql_real_escape_string($_POST['id']);
$kuvaurl = mysql_real_escape_string($_POST['kuvaurl']);
$sivuurl = mysql_real_escape_string($_POST['sivuurl']);
$kauppa = mysql_real_escape_string($_POST['kauppa']);
$sulkeutu = mysql_real_escape_string($_POST['sulkeutuu']);
$teksti = mysql_real_escape_string($_POST['teksti']);
$hinta = mysql_real_escape_string($_POST['hinta']);
$myyntihinta = mysql_real_escape_string($_POST['myyntihinta']);
$aika = mysql_real_escape_string($_POST['aika']);
$tieto1 = mysql_real_escape_string($_POST['mydropdown1']);
$lisaaja = mysql_real_escape_string($_POST['lisaaja']);

$i = explode(".",$sulkeutuu);
$a = $i[2];
$b = $i[1];
$c = $i[0];
$d = ($a."-".$b."-".$c);
/*

echo $id . "<br />";
echo $kuvaurl . "<br />";
echo $sivuurl . "<br />";
echo $kauppa . "<br />";
echo $sulkeutu . "<br />";
echo $teksti . "<br />";
echo $hinta . "<br />";
echo $myyntihinta . "<br />";
echo $aika . "<br />";
echo $aika . "<br />";
echo $tieto1 . "<br />";
echo $lisaaja . "<br />";
echo $id . "<br />";

*/
include('tietokanta.php');


	$sql="UPDATE `sisalto` SET 
	`kuva`='". $kuvaurl ."',
	`osoite`='". $sivuurl ."',
	`kauppa`='". $kauppa ."',
	`hinta`='". $hinta ."',
	`sulkeutuu`='".$d ."',
	`teksti`='". $teksti ."',
	`lisaaja`='".$lisaaja ."',
	`myyntihinta`='". $myyntihinta ."',
	`aika`='". $aika ."',
	`tietokentta1`='". $tieto1 ."' WHERE id='".$id."'";
	
	

$mysql_haun_tulos = mysql_query($sql, $yhteys) or die("Kysely ei onnistunut: ". mysql_error());


//suljetaan yhteys
mysql_close($yhteys);
   
header('Location: etusivu.php');


?>