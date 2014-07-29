<?php
/*muodostetaan yhteys tietokantapalvelimeen.
 localhost tilalle tulee palvelimen nimi mikäli
 tietokantapalvelin sijaitsee eri palvelimella. tunnus tilalle tulee tietokannan kirjautumistunnus.
Salasanan tilalle tulee tietokannan kirjautumistunnuksen salasana. 
 */
   $yhteys = mysql_connect("localhost", "tunnus", "salasana")
   or die("Yhdistäminen ei onnistunut!");

//valitaan tietokanta
/*
tietokannanNimi tilalle tulee tietokannan nimi.
*/
   mysql_select_db("tietokannanNimi", $yhteys) or
   die("Tietokantaa ei löytynyt!".mysql_error($yhteys));
?>