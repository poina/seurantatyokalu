<html>
<head>
<title></title>
<!--<link href="sisalto.css" rel="stylesheet" type="text/css" />-->
</head>
<body>
<?php
//Käynnistetään sessio
include('useroikeus.php');

include('tietokanta.php');
include('kieli.php');

$sql="SELECT *
FROM sisalto, suosikit
WHERE (sisalto.id = suosikit.sisaltoID AND suosikit.lisaaja = '".$kayttaja[0]."') AND sisalto.sulkeutuu >= CURDATE()
ORDER BY CAST(SUBSTRING(sisalto.hinta,LOCATE(' ',sisalto.hinta)+1) AS SIGNED) DESC";

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
									<a href=\"usersuosikkinimikeuusi.php?id=".$mysql_Tiedot["id"]."&lisaaja=".$kayttaja[0]."&pvm=".$mysql_Tiedot["sulkeutuu"]."\"> <input type=\"submit\"value =\"".$lisaa_suosikki."\" class=\"btn\" /> </a>
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
								<li><a>". $teksti_sulkeutuu. $j ."</a></li>
								<li><a>". $teksti_aika. $l ."</a></li>
								<li><a>". $teksti_teksti . $mysql_Tiedot["teksti"]."</a></li>
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