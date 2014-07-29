<?php
//aloittaa session
session_start();
include('tietokanta.php');

//muuttujat
$tunnus = mysql_real_escape_string($_POST["tunnus"]);
$salasana = mysql_real_escape_string(md5($_POST["salasana"]));

$viesti = "Tunnus tai salasana on väärin";

//haetaan tietokannasta käytäjätunnus & salasana
$kirjaudu = mysql_query("SELECT * FROM tunnus WHERE (nimi = '" . $tunnus . "') and (salasana = '" . $salasana . "')");

//funktio jossa kutsutaan virheboksia
function virhe($viesti)
	{
		echo ("<script langauge=\"javascript\">alert(\"".$viesti."\");window.location = './index.php';</script>");
	} 

//tarkistetaan täsmääkö tunnus / salasana
if (mysql_num_rows($kirjaudu) == 1)
	{
		// SQL-kysely - haetaan kaikki tiedot ja lajitellaan ne hinnan mukaan
		$sql="select * from tunnus where nimi='".$tunnus."'";

		//suoritetaan kysely
		$mysql_haun_tulos = mysql_query($sql, $yhteys);

		while($mysql_tiedot = mysql_fetch_array($mysql_haun_tulos))
			{
				if ($mysql_tiedot["oikeus"] == 2) //user
					{
						$oikeus = $tunnus . "." . $mysql_tiedot["oikeus"];
						
						$_SESSION['user'] = $oikeus;
						//ohjataan etusivulle
						header('Location: user.php');
						//suljetaan mysql yhteys
						mysql_close($yhteys);
					}

				if ($mysql_tiedot["oikeus"] == 1) //admin
					{						
						$oikeus = $tunnus . "." . $mysql_tiedot["oikeus"];
												
						$_SESSION['user'] = $oikeus;
						//ohjataan etusivulle
						header('Location: kauppalistaus.php');
						//suljetaan mysql yhteys
						mysql_close($yhteys);
					}
		
			}
		}
else
	{
		//suljetaan mysql yhteys
		mysql_close($yhteys);
		
		//kutsutaan funktio joka tuo errorboxin
		virhe($viesti); 
		
	}
mysql_free_result($mysql_haun_tulos);
mysql_close($yhteys);
?>