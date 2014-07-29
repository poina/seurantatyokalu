<?php
include('admin.php');

$sivu = $_POST["sivuurl"];
$kuva = $_POST["kuvaurl"];
$kauppa = $_POST["kauppa"];
$hinta = $_POST["hinta"];
$pvm = $_POST["sulkeutuu"];
$teksti = $_POST["teksti"];
$myyntihinta = $_POST["myyntihinta"];
$virhe = "0";
$nakyvyys = "0";
$e = explode(".",($_SESSION[user]));
$lisaaja = $e[0];
$aika = $_POST["aika"];
$lisaaSuosikki = $_POST["suosikki"];
$suodatus1 = $_POST["mydropdown1"];


//puretaan pp.kk.vvvv mallinen päivämäärä osiin ja kasataan se tietokantaan sopivana vvvv-kk-pp muotona
$i = explode(".",$pvm);
$a = $i[2];
$b = $i[1];
$c = $i[0];
$d = ($a."-".$b."-".$c);

//yhdistetään tietokantaan
include('tietokanta.php');

if (strlen($sivu) == 0)
	{
		echo "Kohteen osoite ei saa olla tyhj&auml;";
		$virhe++;
	}
if (strlen($kuva) == 0)
	{
		echo "kuvan osoite ei saa olla tyhj&auml;";
		$virhe++;
	}	
/*if (strlen($kauppa) == 0)
	{
		echo "Kaupan nimi ei saa olla tyhjä";
		$virhe++;
	}	
if (strlen($hinta) == 0)
	{
		echo "Hinta ei saa olla tyhjä";
		$virhe++;
	}
if (strlen($d) == 0)
	{
		echo "päivämäärä ei saa olla tyhjä";
		$virhe++;
	}*/
if($virhelkm > 0)
	{
		
		echo "Et antanut kohteen URL tai kuvan URL <br /> <a href=\"etusivu.php\"><p>Palaa etusivulle</p></a>";
	}
if($virhe == 0)
	{
	//lisätään täytetyt kentät tietokantaan
		$sql="INSERT INTO sisalto SET
			kuva = '".$kuva."',
			osoite = '".$sivu."',
			kauppa = '".$kauppa."',
			hinta = '".$hinta."',
			sulkeutuu = '".$d."',
			teksti = '".$teksti."',
			lisaaja = '" . $lisaaja . "',
			aika = '".$aika."',
			myyntihinta = '".$myyntihinta."',
			tietokentta1='".$suodatus1."'
			";
	
	//Tarkistetaan onnistuiko lisäys
	$mysql_haun_tulos = mysql_query($sql, $yhteys) or die("Kysely ei onnistunut: ". mysql_error());
	
if(isset($_POST['suosikki']) && $_POST['suosikki'] == 'suosikki')
{
include('tietokanta2.php');
	
$sqllue="select * from sisalto WHERE lisaaja = '$lisaaja' ORDER BY id DESC LIMIT 1";

$mysql_haun_tuloslue = mysql_query($sqllue, $yhteys);

while($mysql_Tiedot2 = mysql_fetch_array($mysql_haun_tuloslue))
{
$tuoteID = $mysql_Tiedot2["id"];
}

$sqllue="INSERT INTO suosikit SET
			sisaltoID = '".$tuoteID."',
			lisaaja = '" . $lisaaja . "',
			pvm = '".$d."'";
	
//Tarkistetaan onnistuiko lisäys
	$mysql_haun_tuloslue = mysql_query($sqllue, $yhteyslue) or die("Kysely ei onnistunut: ". mysql_error());
	mysql_close($yhteyslue);
}
	
	
	//suljetaan yhteys
	mysql_close($yhteys);
	//siirrytään takasin etusivulle
	header("location:etusivu.php");	
	}
//jos virheitä ilmaantui, suljetaan yhteys
mysql_close($yhteys);
?>