<?php
include('admin.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title></title>
</head>
<body>
<?php


//tarkastetaan onko sessio user päällä, jos ei ole ohjataan kirjautumaan.
if (!isset($_SESSION['user'])) 
	{
		header('Location: index.index');
	}

$kayttaja = explode(".",($_SESSION[user]));

include('tietokanta.php');

include('kieli.php');

$sql="select * from sisalto WHERE sulkeutuu >= CURDATE() order by sulkeutuu";

$mysql_haun_tulos = mysql_query($sql, $yhteys);

while($mysql_Tiedot = mysql_fetch_array($mysql_haun_tulos))
	{
	$i = explode("-",$mysql_Tiedot["sulkeutuu"]);
	$j = $i[2].".".$i[1].".".$i[0];
   
	$k = explode(":",$mysql_Tiedot["aika"]);
	$l = $k[0].":".$k[1];
	
	echo "<div class=\"kuvabox\">
						<center>
						<table>
							<tr>
								<td> 
									<a href=\"poistanimikeuusi.php?id=".$mysql_Tiedot["id"]."\"> <input type=\"submit\"value =\"".$nappiteksti_poista."\" class=\"btn\"/> </a>
								</td>
								<td>
									<a href=\"muokkaanimikeuusi.php?id=".$mysql_Tiedot["id"]."\"> <input type=\"submit\"value =\"".$nappi_muokkaa."\" class=\"btn\"/> </a>
								</td>
								<td> 
									<a href=\"suosikkinimikeuusi.php?id=".$mysql_Tiedot["id"]."&lisaaja=".$kayttaja[0]."&pvm=".$mysql_Tiedot["sulkeutuu"]."\"> <input type=\"submit\"value =\"".$lisaa_suosikki."\" class=\"btn\" /> </a>
								</td>
							</tr>
						</table>	
						
							<a href=\" ". $mysql_Tiedot["osoite"]." \" target=\"_blank\">
								<img src=\"". $mysql_Tiedot["kuva"]."\"/>
							</a>
						</center>
						
						
						<ul class=\"tuoteinfo\">
							
							<li>
							<a>".$teksti_tiedot ."</a>
							<ul>
								<li>
								<a>".$teksti_kauppa. $mysql_Tiedot["kauppa"]."</a>
							</li>
							<li>
							<a>". $teksti_hinta. $mysql_Tiedot["hinta"]."</a>
							<ul>
								<li><a>". $lisaa_myyntihinta .": ". $mysql_Tiedot["myyntihinta"]."</a></li>

								<li><a>". $teksti_sulkeutuu. $j ."</a></li>
								<li><a>". $teksti_aika. $l ."</a></li>
								<li><a>". $teksti_teksti . $mysql_Tiedot["teksti"]."</a></li>
								<li><a>". $teksti_lisaaja . $mysql_Tiedot["lisaaja"]."</a></li>
							</ul>
						</li>
						</ul>
	
				
		</div>";		
   }

mysql_free_result($mysql_haun_tulos);

mysql_close($yhteys);
?>
</body>
</html>