<?php
 //muodostetaan yhteys tietokantapalvelimeen
 /*
 localhost tilalle tulee palvelimen nimi mik�li
 tietokantapalvelin sijaitsee eri palvelimella. tunnus tilalle tulee tietokannan kirjautumistunnus.
 */
   $yhteyslue = mysql_connect("localhost", "tunnus", "salasana")
   or die("Yhdist�minen ei onnistunut!");

//valitaan tietokanta
/*
tietokannanNimi tilalle tulee tietokannan nimi.
*/
   mysql_select_db("tietokannanNimi", $yhteys) or
   die("Tietokantaa ei l�ytynyt!".mysql_error($yhteys));
?>