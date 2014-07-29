<?php
include('useroikeus.php');

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
				<td><a href="usersuosikit.php" alt="suosikit">
					<input type="button" style="width:70px" value ="<?php echo $nappiteksti_suosikit; ?>" />
					</a>
				</td>
				<!-- kaikki  -->
				<td>
					<a href="user.php" alt="suosikit">
					<input type="button" style="width:70px" value ="<?php echo $nappiteksti_kaikki; ?>" />
					</a>
				</td>
				<!-- pvm  -->
				<td>
					<form name="valinta" action="usersuosikit.php" method="post">
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

			</tr>
		</table>
	</div>
		
		<!-- sivuston alaosa, johon tehd&auml;&auml;n kuvalistaus plus tiedot kohteista -->
		<div class="sisalto">			
			<?php
				if($jarjestys=='2')
				{
					include ('userluesuosikit2.php');
				}
				if($jarjestys=='1')
				{
					include('userluesuosikit.php');
				}

			?>
		</div>
</div>
</body>
</html>