<?php
include('admin.php');


$PVM = $_POST["PVM"];
$aika = $_POST["aika"].":00";
$maa = $_POST["maa"];
$kauppa = $_POST["kauppa"];
$osoite = $_POST["osoite"];
$katsottu = 0;

$virhe = "0";

$parsed = parse_url($osoite);
if (empty($parsed['scheme']))$osoite = "http://$osoite";



//puretaan pp.kk.vvvv mallinen p�iv�m��r� osiin ja kasataan se tietokantaan sopivana vvvv-kk-pp muotona
$i = explode(".",$PVM);
$a = $i[2];
$b = $i[1];
$c = $i[0];
$d = ($a."-".$b."-".$c);

//yhdistet��n tietokantaan
include('tietokanta.php');

if (strlen($PVM) == 0)
	{
		echo "Kohteen osoite ei saa olla tyhj&auml;";
		$virhe++;
	}
if (strlen($aika) == 0)
	{
		echo "Aika ei saa olla tyhj&auml;";
		$virhe++;
	}	
if (strlen($kauppa) == 0)
	{
		echo "kauppa ei saa olla tyhj&auml;";
		$virhe++;
	}		
if (strlen($osoite) == 0)
	{
		echo "osoite ei saa olla tyhj&auml;";
		$virhe++;
	}	

if($virhelkm >= 1)
	{
		
		echo "Et voi lis�t� tyhji� sivuja tietokantaan. <br /> <a href=\"kauppalistaus.php\"><p>Palaa kauppalistaukseen</p></a> ";
	}
if($virhe == 0)
	{
	//lis�t��n t�ytetyt kent�t tietokantaan
		$sql="INSERT INTO seuranta SET
			pvm = '".$d."',
			aika = '".$aika."',
			maa = '".$maa."',
			knimi = '".$kauppa."',
			kurl = '".$osoite."',
			katsottu = '".$katsottu."'";
	
	//Tarkistetaan onnistuiko lis�ys
	$mysql_haun_tulos = mysql_query($sql, $yhteys) or die("Kysely ei onnistunut: ". mysql_error());
	//suljetaan yhteys
	mysql_close($yhteys);
	//siirryt��n takasin etusivulle
	header("location:kauppalistaus.php");	
	}
//jos virheit� ilmaantui, suljetaan yhteys
mysql_close($yhteys);
?>