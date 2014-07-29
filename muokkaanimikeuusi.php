<?php 
include('admin.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title></title>
<link href="valikko5.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="etusivu">
<?php
include('tietokanta.php');
include('kieli.php');
include('navi.html');
?>
	<div class="valikko">
		<div class="lisaalayer">
			<form action = "muokkaanimike.php" method="post">
				<div class="lisaalayervasen">

					<table>
<?php


$sql1="SELECT * FROM `sisalto` WHERE id = '$_GET[id]' ORDER BY id DESC LIMIT 1";

						$mysql_haun_tulos1 = mysql_query($sql1, $yhteys);
						//$viimeisin_osoite = "kukkuu";
						while($mysql_Tiedot1 = mysql_fetch_array($mysql_haun_tulos1))
						{
							
							$id = $mysql_Tiedot1["id"];
							$viimeisin_osoite = $mysql_Tiedot1["osoite"];
							$viimeisin_kuvaurl= $mysql_Tiedot1["kuva"];
							$viimeisin_kauppa = $mysql_Tiedot1["kauppa"];
							$viimeisin_pvm = explode("-", ($mysql_Tiedot1["sulkeutuu"]));
							$viimeisin_aika = $mysql_Tiedot1["aika"];
							$viimeisin_hinta = $mysql_Tiedot1["hinta"];
							$viimeisin_tarjoustaso = $mysql_Tiedot1["myyntihinta"];
							$viimeisin_teksti = $mysql_Tiedot1["teksti"];
							$viimeisin_tieto1 = $mysql_Tiedot1["tietokentta1"];
							$viimeisin_tieto2 = $mysql_Tiedot1["tietokentta2"];
							$viimeisin_lisaaja = $mysql_Tiedot1["lisaaja"];
							
						}
						mysql_free_result($mysql_haun_tulos1);
						?>
							<tr><td>ID</td><td><input type="text" name="id" value="<?php echo $id; ?>" readonly="readonly" style="width:100px; height:20px;"/></td></tr>
							<tr>
								<td width=80px><?php echo $lisaa_sivu; ?></td>
								<td>
								<?php// echo $mysql_Tiedot1["osoite"]; echo $viimeisin_osoite ?>
									<!--sivun osoite-->
									<input type="text" name="sivuurl" style="width:780px; height:20px;" value="<?php echo $viimeisin_osoite; ?>" />
								</td>
							</tr>
									<!-- kuvaurl kirjoitetaan tahan -->
							<tr>
								<td><?php echo $lisaa_kuva;?></td>
								<td>
									
									<input type="text" name="kuvaurl" style="width:780px; height:20px;" value="<?php echo $viimeisin_kuvaurl; ?>" />	
								</td>
							</tr>									
							<tr>	
								<td><?php echo $teksti_kauppa;?></td>
								<td>
										
									<!--kaupan nimi-->
									<input type="text" name="kauppa" style="width:280px; height:20px;" value="<?php echo $viimeisin_kauppa; ?>" />
								</td>
							</tr>			
						</table>
						<?php
						/*
						Taulukkojen välikohta
						*/
						?>	<table>		
							<tr>
								<td>
									<?php echo $nappiteksti_paiva;?> 
								</td>
								<td>									
									<!-- sulkeutuuaika kirjoitetaan tahan pieni-->
									<input type="text" name="sulkeutuu" style="width:100px; height:20px;" value="<?php echo $viimeisin_pvm[2] . "." . $viimeisin_pvm[1] . "." . $viimeisin_pvm[0]; /*$lisaa_paiva;*/ ?>" />			
									
								</td>
								<td>
									<?php echo $lisaa_aika;?>
								</td>
								<td>
									<input type="text" name="aika" style="width:100px; height:20px;" value="<?php echo $viimeisin_aika; ?>" />
								</td>
							</tr>		

							<tr style="width=100px;">
								<td>
									<?php echo $lisaa_hinta;?>
								</td>
								
								<td>			
									<input type="text" name="hinta" style="width:100px; height:20px;" value="<?php echo $viimeisin_hinta;?>" />	
								</td>
								<td>
									<?php echo $teksti_lisaaja; ?>
								</td>
								<td> 
								<input type="text" name="lisaaja" value="<?php echo $viimeisin_lisaaja ?>" readonly="readonly" />
								</tr>
							<tr>
								<td>
									<?php echo $nappiteksti_hinta;?>

								</td>
								<td>

									<input type="text" name="myyntihinta" style="width:100px; height:20px;" value="<?php echo $viimeisin_tarjoustaso;?>" />	
								</td>
								
															
								<td>
									<select name="mydropdown1">
										<option value="tieto0"><?php echo $suodatus0;?></option>
										<option value="tieto1"><?php echo $suodatus1;?></option>
										<option value="tieto2"><?php echo $suodatus2;?></option>
										<option value="tieto3"><?php echo $suodatus3;?></option>
										<option value="tieto4"><?php echo $suodatus4;?></option>
										<option value="tieto5"><?php echo $suodatus5;?></option>
										<option value="tieto6"><?php echo $suodatus6;?></option>
									</select>							
								</td>
	
							</tr>
					</table>			
				</div>
				
				<div class="lisaalayeroikea">			
						<!-- style="width:450px; height:80px; -->
						<div class="tekstikenttaiso">
							<!-- <input type="text" name="sulkeutuu" style="width:390px; height:75px;" />	-->
							<textarea name="teksti" cols="30" rows="6" value="<?php echo $viimeisin_teksti; ?>"><?php echo $viimeisin_teksti; ?></textarea>
						</div>

						<div class="lisaanappi">
							<input type="submit" value ="<?php echo $lisaa_lisaa; ?>" />
						</div>
				</div>
			</form>
		</div>		
	</div>
	</div>

</body>
</html>