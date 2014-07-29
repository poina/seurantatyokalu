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


	<!-- sivuston ylaosa, johon sijoitetaan napit sisaltava nappilayer ja lisattavan sivuston kentat --> 

<!-- filtteri alkaa tästä -->

	<div id="filtteri">
<?php
include('navi.html');
?>
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
				<!-- pvm  -->
				<td>
				<a href="usersuosikit.php" alt="suosikit">
					<input type="button" style="width:70px" value ="<?php echo $nappiteksti_suosikit; ?>" />
					</a>
				</td>
					<td><a href="user.php" alt="kaikki">
					<input type="submit" style="width:70px" value ="<?php echo $nappiteksti_kaikki; ?>" />
					</a>
				</td>

				<td>
					<form name="valinta" action="user.php" method="post">
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
				<td>
					<form action = "user.php" method="post">
					<select name="mydropdown1">
										<option value="tieto0"><?php echo $suodatus0;?></option>
										<option value="tieto1"><?php echo $suodatus1;?></option>
										<option value="tieto2"><?php echo $suodatus2;?></option>
										<option value="tieto3"><?php echo $suodatus3;?></option>
										<option value="tieto4"><?php echo $suodatus4;?></option>
										<option value="tieto5"><?php echo $suodatus5;?></option>
										<option value="tieto6"><?php echo $suodatus6;?></option>

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
				<td>
				<input type="submit" style="width:100px" value ="<?php echo $nappiteksti_exit; ?>" onClick="location.href='logout.php'"/>
				</td>
			</tr>
		</table>
	</div>
		
		<!-- sivuston alaosa, johon tehd&auml;&auml;n kuvalistaus plus tiedot kohteista -->
		<div class="sisalto">			
			<?php
				if($jarjestys=='2')
				{
					include 'lueuser2.php';
				}
				if($jarjestys=='1')
				{
					include 'lueuser.php';
				}
				if($jarjestys=='3')
				{
					include('suodatauser1.php');
				}
				if($jarjestys=='4')
				{
					include('suodatauser2.php');
				}
				if($jarjestys=='5')
				{
					include('suodatauser3.php');
				}
				if($jarjestys=='6')
				{
					include('suodatauser4.php');
				}
				if($jarjestys=='7')
				{
					include('suodatauser5.php');
				}
				if($jarjestys=='8')
				{
					include('suodatauser6.php');
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