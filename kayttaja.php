<?php
include('admin.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link href="sisaltokayttaja.css" rel="stylesheet" type="text/css" />
<link href="valikkokayttaja.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function jarjesta() 
{
	document.forms['valinta'].submit();
}
</script>
</head>
<body>
<?php
include('tietokanta.php');
include('kieli.php');
?>



<!-- koko sivuston pohja, leveys on 1100px, korkeus auto -->
<div class="etusivu">
<?php
include('navi.html');
?>

	<!-- sivuston ylaosa, johon sijoitetaan napit sisaltava nappilayerit ja lisattavien asioiden kentat --> 
	<div class="valikko">


			

				
				
				

					<div class="lisaalayeroikea">
					<form action = "lisaakayttaja.php" method="post">
						
							
							
							<table>
								<tr>
									<td style="width:150px; text-align:right;">
											<?php echo $lisaa_tunnus; ?>
									</td>
									<td>
							
<input type="text" name="tunnus" style="width:280px; height:20px;" />	
									</td>
								</tr>
								
								<tr>
									<td style="width:150px; text-align:right;">
							
										<?php echo $lisaa_salasana; ?>
									</td>
									<td>
<input type="password" name="salasana" style="width:280px; height:20px;" />	
									</td>
								</tr>
								<tr>
									<td style="width:150px; text-align:right;">
										<?php echo $lisaa_salasanauud; ?>
									</td>
									<td>
<input type="password" name="uusisalasana" style="width:280px; height:20px;" />	
									</td>
								</tr>
								<tr>
									<td style="width:150px; text-align:right;">
										<?php echo $lisaa_kayttaja; ?>	
									</td>
									<td>
											<form name="valinta" action="kayttaja.php" method="post">
											<input name="jarjestys" type="radio" value="2" checked="checked" onchange="jarjesta()" 
									
											<?php 
												if($_POST['jarjestys']=='2')
												{
													?>
													checked="checked"
													<?php 
												}
											?> />
									</td>
								</tr>
								<tr>
									<td style="width:150px; text-align:right;">
										<?php echo $lisaa_admin; ?>
									</td>
									<td>
										<input name="jarjestys" type="radio" value="1" onchange="jarjesta()" 
														<?php 
															if($_POST['jarjestys']=='1')
															{
																?>
																checked="checked"
																<?php
														}?> /> 
									</form>
									</td>
									<td>
										<input type="submit"value ="<?php echo $lisaa_lisaa; ?>"/>
										</form>
									</td>
								</tr>						
							</table>
									

					</div>
				
			

		
	</div>
	
	
	
	<div class="sisalto">
	

		
		<div class="kayttajatunnusboxviiva">
				<div class="kayttajatunnusbox">
					
					
					<div class="tunnusboxotsikko">
					<?php echo $teksti_tunnus; ?>
					</div>
					
					
					
					<div class="tunnusboxotsikko">
					<?php echo $teksti_kayttooikeus ?>
					</div>
					
					<div class="poistanapinbox">
					<?php echo $nappiteksti_poista; ?>
					</div>
					
				</div>
		</div>
			<?php
			$a='';
			include('tietokanta.php');
				$sql="select * from tunnus WHERE id >'1' order by nimi ";
				$mysql_haun_tulos = mysql_query($sql, $yhteys);
				while($mysql_Tiedot = mysql_fetch_array($mysql_haun_tulos))
					{	$i=$mysql_Tiedot["oikeus"];
						$kayttaja="";
						if($mysql_Tiedot["oikeus"]==1)
							{
								$a="admin";
							}
						if($mysql_Tiedot["oikeus"]==2)
							{
								$a="user";
							}
						
			echo "<div class=\"kayttajatunnusboxviiva\">
				<div class=\"kayttajatunnusbox\">
					
				
					<div class=\"tunnusbox\">
				
					". $mysql_Tiedot["nimi"]."
					</div>
				
					
					
					<div class=\"tunnusboxotsikko\">
					". $a ."
					
					</div>
					
					<div class=\"poistanapinbox\">
					<a href=\"poistatunnus.php?id=".$mysql_Tiedot["id"]."\">
					<input type=\"submit\"value =\"". $nappiteksti_poista."\"/>
					</a>
					</div>
					
				</div>
			</div>";}?>
			
	</div>
		






</div>
</body>
</html>
