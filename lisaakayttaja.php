<?php
include('admin.php');



$nimi = $_POST["tunnus"];
$salasana = md5($_POST["salasana"]);
$uusisalasana = md5($_POST["uusisalasana"]);
$oikeus = $_POST["jarjestys"];
$virhe = "0";



//yhdistet��n tietokantaan
include('tietokanta.php');

if (strlen($nimi) == 0)
	{
		echo "tunnuskentta ei saa olla tyhj&auml;";
		$virhe++;
	}
if (strlen($salasana) == 0)
	{
		echo "salasanakentta ei saa olla tyhj&auml;";
		$virhe++;
	}	
if ($salasana != $uusisalasana)
	{
	echo "salasana meni v&auml;&auml;rin";
		$virhe++;
	}
	$query = "SELECT * FROM tunnus WHERE nimi='$nimi';";
	$res = mysql_query($query);
	if (mysql_num_rows($res) >= 1)
	{
	echo "<p>Tunnus on jo rekister&ouml;ity, kirjaudu sis&auml;&auml;n tai rekister&ouml;idy uudella tunnuksella</p> <br /> <a href=\"kayttaja.php\"><p>Palaa k&auml;ytt&auml;j&auml;hallintaan</p></a>";
	$virhe++;
	}


	
if($virhe > 0)
	{
	
		echo "<a href=\"kayttaja.php\"><p>Palaa k�ytt�j�hallintaan</p></a>";
	}
if($virhe == 0)
	{
	//lis�t��n t�ytetyt kent�t tietokantaan
		$sql="INSERT INTO tunnus SET
			nimi = '".$nimi."',
			salasana = '".$salasana."',
			oikeus = '".$oikeus."'";
			
	
	//Tarkistetaan onnistuiko lis�ys
	$mysql_haun_tulos = mysql_query($sql, $yhteys) or die("Kysely ei onnistunut: ". mysql_error());
	//suljetaan yhteys
	mysql_close($yhteys);
	//siirryt��n takasin etusivulle
	header("location:kayttaja.php");	
	}
//jos virheit� ilmaantui, suljetaan yhteys
mysql_close($yhteys);
?>