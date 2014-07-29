
<?php
include('tietokanta.php');
$sql = "SELECT * FROM kieli WHERE id = '1'";
$mysql_haun_tulos = mysql_query($sql, $yhteys);
while($mysql_Tiedot = mysql_fetch_array($mysql_haun_tulos))
	{
		$lisaa_sivu = $mysql_Tiedot["lisaa_sivu"];
		$lisaa_kuva = $mysql_Tiedot["lisaa_kuva"];
		$lisaa_kauppa = $mysql_Tiedot["lisaa_kauppa"];
		$lisaa_paiva = $mysql_Tiedot["lisaa_paiva"];
		$lisaa_aika = $mysql_Tiedot["lisaa_aika"];
		$lisaa_hinta = $mysql_Tiedot["lisaa_hinta"];
		$lisaa_suosikki = $mysql_Tiedot["lisaa_suosikki"];
		$lisaa_viesti = $mysql_Tiedot["lisaa_viesti"];
		$lisaa_lisaa = $mysql_Tiedot["lisaa_lisaa"];
		$nappiteksti_paiva = $mysql_Tiedot["nappiteksti_paiva"];
		$nappiteksti_hinta = $mysql_Tiedot["nappiteksti_hinta"];
		$teksti_nakyma = $mysql_Tiedot["teksti_nakyma"];
		$lisaa_myyntihinta = $mysql_Tiedot["lisaa_myyntihinta"];
		$nappiteksti_3kuvaa = $mysql_Tiedot["nappiteksti_3kuvaa"];
		$nappiteksti_5kuvaa = $mysql_Tiedot["nappiteksti_5kuvaa"];
		$nappiteksti_7kuvaa = $mysql_Tiedot["nappiteksti_7kuvaa"];
		$nappiteksti_suosikit = $mysql_Tiedot["nappiteksti_suosikit"];
		$nappiteksti_kaikki = $mysql_Tiedot["nappiteksti_kaikki"];
		$nappiteksti_exit = $mysql_Tiedot["nappiteksti_exit"];
		$nappiteksti_historia = $mysql_Tiedot["nappiteksti_historia"];
		$nappiteksti_kayttajahallinta = $mysql_Tiedot["nappiteksti_kayttajahallinta"];
		$teksti_kauppa = $mysql_Tiedot["teksti_kauppa"];
		$teksti_hinta = $mysql_Tiedot["teksti_hinta"];
		$teksti_teksti = $mysql_Tiedot["teksti_teksti"];
		$teksti_lisaaja = $mysql_Tiedot["teksti_lisaaja"];
		$teksti_sulkeutuu = $mysql_Tiedot["teksti_sulkeutuu"];
		$teksti_aika = $mysql_Tiedot["teksti_aika"];
		$nappiteksti_poista = $mysql_Tiedot["nappiteksti_poista"];
		$lisaa_tunnus = $mysql_Tiedot["lisaa_tunnus"];
		$lisaa_salasana = $mysql_Tiedot["lisaa_salasana"];
		$lisaa_salasanauud = $mysql_Tiedot["lisaa_salasanauud"];
		$lisaa_kayttaja = $mysql_Tiedot["lisaa_kayttaja"];
		$lisaa_admin = $mysql_Tiedot["lisaa_admin"];
		$teksti_tunnus = $mysql_Tiedot["teksti_tunnus"];
		$teksti_kayttooikeus = $mysql_Tiedot["teksti_kayttooikeus"];
		$nappiteksti_etusivu = $mysql_Tiedot["nappiteksti_etusivu"];
		$suodatus0 = $mysql_Tiedot["suodatus0"];
		$suodatus1 = $mysql_Tiedot["suodatus1"];
		$suodatus2 = $mysql_Tiedot["suodatus2"];
		$suodatus3 = $mysql_Tiedot["suodatus3"];
		$suodatus4 = $mysql_Tiedot["suodatus4"];
		$suodatus5 = $mysql_Tiedot["suodatus5"];
		$suodatus6 = $mysql_Tiedot["suodatus6"];
		$nappi_suodata = $mysql_Tiedot["nappi_suodata"];
		$nappi_poista = $mysql_Tiedot["nappi_poista"];
		$nappi_muokkaa = $mysql_Tiedot["nappi_muokkaa"];
		$nappi_aktiivithuutokaupat = $mysql_Tiedot["nappi_aktiivithuutokaupat"];
		$nappi_huutokauppahistoria  = $mysql_Tiedot["nappi_huutokauppahistoria"];
		$nappi_kohteidenlisays = $mysql_Tiedot["nappi_kohteidenlisays"];
		$nappi_valittujenkohteidenkatsominen = $mysql_Tiedot["nappi_valittujenkohteidenkatsominen"];
		$teksti_tiedot = $mysql_Tiedot["teksti_tiedot"];
		$teksti_annapvm = $mysql_Tiedot["teksti_annapvm"];
		$teksti_annakaupannimi = $mysql_Tiedot["teksti_kaupannimi"];
		$teksti_annakaupanurl = $mysql_Tiedot["teksti_kaupanurl"];
		$teksti_annamaa = $mysql_Tiedot["teksti_maa"];
		$teksti_annakello = $mysql_Tiedot["teksti_kello"];
		$teksti_kauppapaivamaara = $mysql_Tiedot["teksti_paivamaara"];
		$teksti_kauppanimi = $mysql_Tiedot["teksti_kauppanimi"];
		$teksti_kauppaaika = $mysql_Tiedot["teksti_kauppaaika"];
		$teksti_kauppamaa = $mysql_Tiedot["teksti_kauppamaa"];
		$teksti_kauppakatsottu = $mysql_Tiedot["teksti_kauppakatsottu"];
		$teksti_kauppapoista = $mysql_Tiedot["teksti_kauppapoista"];
		$teksti_kauppaeikatsottu = $mysql_Tiedot["teksti_kauppaeikatsottu"];
		$teksti_kauppapoista = $mysql_Tiedot["teksti_kauppapoista"];
		$teksti_hintasuodatin = $mysql_Tiedot["teksti_hintasuodatin"];


	
		
	}
?>