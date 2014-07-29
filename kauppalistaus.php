<?php
include('admin.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title></title>

<link href="kauppalistaus.css" rel="stylesheet" type="text/css"/>

</head>

<body>		
<?php
//t&auml;ss&auml; tulostetaan kaikki tekstit tietokannan kielitaulusta muuttujiin joita k&auml;ytet&auml;&auml;n 

include('tietokanta.php');
include('kieli.php');
?>
<!-- koko sivuston pohja, leveys on 1100px, korkeus auto -->

<div id="container">
<?php
include('navi.html');
?>
<div id="content">
	<form action = "lisaaseurantaan.php" method="post">
	<table id="listaus">
		<tr>
			<td><?php echo $teksti_annapvm; ?> </td>
			<td><?php echo $teksti_annakaupannimi; ?></td>
			<td><?php echo $teksti_annakaupanurl; ?></td>
			<td><?php echo $teksti_annamaa; ?></td>
			<td><?php echo $teksti_annakello; ?></td>

		</tr>
		<tr>
			<td><input type="text" name="PVM" style="width:150px; height:20px;" /></td>
			
			<td><input type="text" name="kauppa" style="width:150px; height:20px;" /></td>
			
			<td><input type="text" name="osoite" style="width:150px; height:20px;" /></td>

			<td><input type="text" name="aika" style="width:150px; height:20px;" /></td>
			
			<td><input type="text" name="maa" style="width:150px; height:20px;" /></td>
			
			<td><input type="submit" value ="<?php echo $lisaa_lisaa; ?>" style="width:150px; height:20px;" /></td>
		</tr>
	</table>
	</form>
	
	<table border = "0">
		
		<tr>
			<td>&nbsp;</td>
		</tr>
	</table>
	<?php

	?>
	<table id="listaus">
		
		<tr>
			<td><?php echo $teksti_kauppapaivamaara; ?></td>
			<td><?php echo $teksti_kauppanimi; ?></td>
			<td><?php echo $teksti_kauppamaa; ?></td>	
			<td><?php echo $teksti_kauppaaika; ?></td>
		
			<td><?php echo $teksti_kauppakatsottu; ?></td>
			<td><?php echo $teksti_kauppapoista; ?></td>
		</tr>
		<?php
			$sql="select * from seuranta WHERE pvm >= CURDATE() order by pvm";
		
			$mysql_haun_tulos = mysql_query($sql, $yhteys);

			while($mysql_Tiedot = mysql_fetch_array($mysql_haun_tulos))
			{
				$i = explode("-",$mysql_Tiedot["pvm"]);
				$j = $i[2].".".$i[1].".".$i[0];
			   
				$k = explode(":",$mysql_Tiedot["aika"]);
				$l = $k[0].":".$k[1];
					echo "
					<tr>
						<td>".$j."</td>
						<td><a href=\" ".$mysql_Tiedot["kurl"]."\" target=\"_blank\"><button style=\"width:150px;height20px\">".$mysql_Tiedot["knimi"]."</button></a></td>
						<td>".$k[0]."</td>
						<td>". $mysql_Tiedot["maa"]."</td>
						
						<td>";
						
						if ($mysql_Tiedot["katsottu"] == 0)
						{
						echo "<a href=\"katsottu0.php?id=".$mysql_Tiedot["id"]."\"> <button style=\"background-color:red;width:150px;height:20px\">$teksti_kauppaeikatsottu </button> </a>";
						}
						if ($mysql_Tiedot["katsottu"] == 1)
						{
						echo "<a href=\"katsottu1.php?id=".$mysql_Tiedot["id"]."\"> <button style=\"background-color:green;width:150px;height:20px\">$teksti_kauppakatsottu</button> </a>";
						} 
						echo "
						
						</td>
						<td><a href=\"poistaseurannasta.php?id=".$mysql_Tiedot["id"]."\"> <button style=\"width:100px;height:20px;margin-left:25px;\">$teksti_kauppapoista</button> </a></td>
					</tr>";
			}
			mysql_free_result($mysql_haun_tulos);
			mysql_close($yhteys);

		?>
	</table>
</div><!--content-->
</div><!--container-->
</body>
</html>
</body>
</html>