<?php
include('admin.php');

$tanaan = date("d.m.Y");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title></title>

<link href="valikko5.css" rel="stylesheet" type="text/css"/>
<link href="sisalto.css" rel="stylesheet" type="text/css" id="kuvat"/>

<script type="text/javascript">
function vaihda5() {
document.getElementById('kuvat').href = 'sisalto5.css';
}

function vaihda7() {
document.getElementById('kuvat').href = 'sisalto7.css';
}
function vaihda() {
document.getElementById('kuvat').href = 'sisalto.css';
}

function jarjesta() 
	{
		document.forms['valinta'].submit();
	}
	
function nakyma() 
	{
		document.forms['nakyy'].submit();
	}
function suodata()
	{
		document.forms['suodatus'].submit();
	}
</script>
</head>
<body>	


<?php $jarjestys = "1"; 	

//tässä tulostetaan kaikki tekstit tietokannan kielitaulusta muuttujiin joita käytetään 

include('tietokanta.php');
include('kieli.php');

$kayttaja = explode(".",($_SESSION[user]));
$tietokantaHaku_kayttaja = $kayttaja[0];

?>
<!-- koko sivuston pohja, leveys on 1100px, korkeus auto -->
<div class="etusivu">
<?php
include('navi.html');
?>
	<!-- sivuston ylaosa, johon sijoitetaan napit sisaltava nappilayer ja lisattavan sivuston kentat --> 
	<div class="valikko">
		<div class="lisaalayer">
			<form action = "lisaa.php" method="post">
				<div class="lisaalayervasen">

					<table>
						<?php 
						$sql1="SELECT * FROM `sisalto` WHERE lisaaja = '$tietokantaHaku_kayttaja' ORDER BY id DESC LIMIT 1";

						$mysql_haun_tulos1 = mysql_query($sql1, $yhteys);
						//$viimeisin_osoite = "kukkuu";
						while($mysql_Tiedot1 = mysql_fetch_array($mysql_haun_tulos1))
						{
							$viimeisin_osoite = $mysql_Tiedot1["osoite"];
							$viimeisin_kuvaurl= $mysql_Tiedot1["kuva"];
							$viimeisin_kauppa = $mysql_Tiedot1["kauppa"];
							$päivämäärä = $mysql_Tiedot1["sulkeutuu"];

							$viime = explode("-",$päivämäärä);
							$viimeisin_pvm = $viime[2].".".$viime[1].".".$viime[0];
						}
						mysql_free_result($mysql_haun_tulos1);
						

						?>
							<tr>
								<td width=80px><?php echo $lisaa_sivu;?></td>
								<td>
								<?php// echo $mysql_Tiedot1["osoite"]; echo $viimeisin_osoite ?>
									<!--sivun osoite-->
									<input type="text" name="sivuurl" style="width:770px; height:20px;" onfocus="this.select()" onblur="this.value=!this.value?'<?php echo $viimeisin_osoite; ?>':this.value;" value="<?php echo $viimeisin_osoite; ?>" />
								</td>
							</tr>
									<!-- kuvaurl kirjoitetaan tahan -->
							<tr>
								<td><?php echo $lisaa_kuva;?></td>
								<td>
									
									<input type="text" name="kuvaurl" style="width:770px; height:20px;" onfocus="this.select()" onblur="this.value=!this.value?'<?php echo $viimeisin_kuvaurl; ?>':this.value;" value="<?php echo $viimeisin_kuvaurl; ?>" />	
								</td>
							</tr>									
							<tr>	
								<td><?php echo $teksti_kauppa;?></td>
								<td>
										
									<!--kaupan nimi-->
									<input type="text" name="kauppa" style="width:280px; height:20px;" onclick="this.value='<?php echo $viimeisin_kauppa; ?>';" onfocus="this.select()" onblur="this.value=!this.value?'<?php echo $viimeisin_kauppa; ?>':this.value;" value="<?php echo $viimeisin_kauppa; ?>" />
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
									<input type="text" name="sulkeutuu" style="width:100px; height:20px;" value="<?php echo $viimeisin_pvm; /*$lisaa_paiva;*/ ?>" />			
									
								</td>
								<td>
									<?php echo $lisaa_aika;?>
								</td>
								<td>
									<input type="text" name="aika" style="width:100px; height:20px;" value="10:00" />
								</td>
							</tr>		

							<tr style="width=100px;">
								<td>
									<?php echo $lisaa_hinta;?>
								</td>
								
								<td>			
									<input type="text" name="hinta" style="width:100px; height:20px;" />	
								</td>
								<td>
									<?php echo $lisaa_suosikki; ?>
									<input type="checkbox" name="suosikki" value="suosikki" />
							<tr>
								<td>
									<?php echo $nappiteksti_hinta;?>
								</td>
								<td>

									<input type="text" name="myyntihinta" style="width:100px; height:20px;" />	
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
							<textarea name="teksti" cols="30" rows="6" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'<?php echo $lisaa_viesti; ?>':this.value;" value="<?php echo $lisaa_viesti; ?>"><?php echo $lisaa_viesti; ?></textarea>
						</div>

						<div class="lisaanappi">
							<input type="submit" value ="<?php echo $lisaa_lisaa; ?>" />
						</div>
				</div>
			</form>
		</div>		
	</div>

<!-- filtteri alkaa tästä -->

<div id="filtteri">
		<table>
			<tr>
				<!-- 3 kuvaa -->
				<td>
					<input type="button" onclick="vaihda();" value="<?php echo $nappiteksti_3kuvaa; ?>"/>
				</td>
				<!-- 5 kuvaa -->
				<td>
					<input type="button" onclick="vaihda5();" value="<?php echo $nappiteksti_5kuvaa; ?>"/>
				</td>
				<!-- 7 kuvaa -->
				<td>
					<input type="button" onclick="vaihda7();" value="<?php echo $nappiteksti_7kuvaa; ?>"/>
				</td>
				<!-- suosikit  -->
				<td><a href="suosikit.php" alt="suosikit">
					<input type="button" style="width:70px" value ="<?php echo $nappiteksti_suosikit; ?>" />
					</a>
				</td>
				<!-- kaikki  -->
				<td><a href="etusivu.php" alt="suosikit">
					<input type="submit" style="width:70px" value ="<?php echo $nappiteksti_kaikki; ?>"  />
					</a>
				</td>
				<!-- historia  -->
				<td>
					<input type="submit" style="width:100px" value ="<?php echo $nappiteksti_historia; ?>" onClick="location.href='ettusivuhistoria.php'"/>
				</td>
				<!-- pvm  -->
				<td>
					<form name="valinta" action="etusivu.php" method="post">
					<input name="jarjestys" type="radio" value="1" checked="checked" onchange="jarjesta()" 
					<?php 
					if($_POST['jarjestys']=='1')
					{
						?>
						checked="checked"
						<?php 
						$jarjestys = "1";
					}
					?> /> <?php echo $nappiteksti_paiva; ?>
				</td>
				<!-- hinta  -->
				<td>
					<input name="jarjestys" type="radio" value="2" onchange="jarjesta()" 
					<?php 
					if($_POST['jarjestys']=='2')
					{
						?>
						checked="checked"
						<?php
						$jarjestys = "2";
					}?> /> <?php echo $teksti_hintasuodatin; ?>
					</form>
				</td>
				<!-- alasvetovalikko 1  -->
				<form action = "etusivu.php" method="post">
				<td>
					<select name="mydropdown1">
						<option value="tieto0" onchange="suodata()"><?php echo $suodatus0;?></option>
						<option value="tieto1" onchange="suodata()"><?php echo $suodatus1;?></option>
						<option value="tieto2" onchange="suodata()"><?php echo $suodatus2;?></option>
						<option value="tieto3" onchange="suodata()"><?php echo $suodatus3;?></option>
						<option value="tieto4" onchange="suodata()"><?php echo $suodatus4;?></option>
						<option value="tieto5" onchange="suodata()"><?php echo $suodatus5;?></option>
						<option value="tieto6" onchange="suodata()"><?php echo $suodatus6;?></option>

					</select>
					<?php 
						if($_POST['mydropdown1']=='tieto1')
						{
							$jarjestys="3";
						}
						if($_POST['mydropdown1']=='tieto2')
						{
							$jarjestys="4";
						}
						if($_POST['mydropdown1']=='tieto3')
						{
							$jarjestys="5";
						}
						if($_POST['mydropdown1']=='tieto4')
						{
							$jarjestys="6";
						}
						if($_POST['mydropdown1']=='tieto5')
						{
							$jarjestys="7";
						}
						if($_POST['mydropdown1']=='tieto6')
						{
							$jarjestys="8";
						}

					?>
				</td>
				<td>
				<input type="submit" value="<?php echo $nappi_suodata;?>">
				</form>
				</td>

			</tr>
		</table>
	</div>
		
		<!-- sivuston alaosa, johon tehd&auml;&auml;n kuvalistaus plus tiedot kohteista -->
		<div class="sisalto">			
			<?php
				
				if($jarjestys=='1')
				{
					include('lue.php');
				}
				if($jarjestys=='2')
				{
					include('lue2.php');
				}
				if($jarjestys=='3')
				{
					include('suodata1.php');
				}
				if($jarjestys=='4')
				{
					include('suodata2.php');
				}
				if($jarjestys=='5')
				{
					include('suodata3.php');
				}
				if($jarjestys=='6')
				{
					include('suodata4.php');
				}
				if($jarjestys=='7')
				{
					include('suodata5.php');
				}
				if($jarjestys=='8')
				{
					include('suodata6.php');
				}				
				/*else
				{
					include('lue.php');
				}*/

			?>
		</div>
</div>
</body>
</html>