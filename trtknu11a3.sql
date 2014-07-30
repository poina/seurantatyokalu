-- phpMyAdmin SQL Dump
-- version 3.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 30, 2014 at 05:13 PM
-- Server version: 5.0.26
-- PHP Version: 5.2.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trtknu11a3`
--

-- --------------------------------------------------------

--
-- Table structure for table `kieli`
--

CREATE TABLE IF NOT EXISTS `kieli` (
  `id` int(16) NOT NULL auto_increment,
  `kieli` varchar(16) NOT NULL,
  `lisaa_sivu` varchar(128) NOT NULL,
  `lisaa_kuva` varchar(128) NOT NULL,
  `lisaa_kauppa` varchar(128) NOT NULL,
  `lisaa_paiva` varchar(128) NOT NULL,
  `lisaa_aika` varchar(128) NOT NULL,
  `lisaa_hinta` varchar(128) NOT NULL,
  `lisaa_suosikki` varchar(128) NOT NULL,
  `lisaa_viesti` varchar(128) NOT NULL,
  `lisaa_lisaa` varchar(128) NOT NULL,
  `nappiteksti_paiva` varchar(128) NOT NULL,
  `nappiteksti_hinta` varchar(128) NOT NULL,
  `teksti_nakyma` varchar(128) NOT NULL,
  `nappiteksti_3kuvaa` varchar(128) NOT NULL,
  `nappiteksti_5kuvaa` varchar(128) NOT NULL,
  `nappiteksti_7kuvaa` varchar(128) NOT NULL,
  `nappiteksti_suosikit` varchar(128) NOT NULL,
  `nappiteksti_kaikki` varchar(128) NOT NULL,
  `nappiteksti_exit` varchar(128) NOT NULL,
  `nappiteksti_historia` varchar(128) NOT NULL,
  `nappiteksti_kayttajahallinta` varchar(128) NOT NULL,
  `nappiteksti_etusivu` varchar(128) NOT NULL,
  `lisaa_myyntihinta` varchar(128) NOT NULL,
  `teksti_kauppa` varchar(128) NOT NULL,
  `teksti_hinta` varchar(128) NOT NULL,
  `teksti_teksti` varchar(128) NOT NULL,
  `teksti_lisaaja` varchar(128) NOT NULL,
  `teksti_sulkeutuu` varchar(128) NOT NULL,
  `teksti_aika` varchar(128) NOT NULL,
  `nappiteksti_poista` varchar(128) NOT NULL,
  `lisaa_tunnus` varchar(128) NOT NULL,
  `lisaa_salasana` varchar(128) NOT NULL,
  `lisaa_salasanauud` varchar(128) NOT NULL,
  `lisaa_kayttaja` varchar(128) NOT NULL,
  `lisaa_admin` varchar(128) NOT NULL,
  `teksti_tunnus` varchar(128) NOT NULL,
  `teksti_kayttooikeus` varchar(128) NOT NULL,
  `suodatus0` text NOT NULL,
  `suodatus1` text NOT NULL,
  `suodatus2` text NOT NULL,
  `suodatus3` text NOT NULL,
  `suodatus4` text NOT NULL,
  `suodatus5` text NOT NULL,
  `suodatus6` text NOT NULL,
  `nappi_suodata` text NOT NULL,
  `nappi_poista` text NOT NULL,
  `nappi_muokkaa` text NOT NULL,
  `nappi_aktiivithuutokaupat` text NOT NULL,
  `nappi_huutokauppahistoria` text NOT NULL,
  `nappi_kohteidenlisays` text NOT NULL,
  `nappi_valittujenkohteidenkatsominen` text NOT NULL,
  `teksti_tiedot` text NOT NULL,
  `teksti_annapvm` text NOT NULL,
  `teksti_kaupannimi` text NOT NULL,
  `teksti_kaupanurl` text NOT NULL,
  `teksti_maa` text NOT NULL,
  `teksti_kello` text NOT NULL,
  `teksti_paivamaara` text NOT NULL,
  `teksti_kauppanimi` text NOT NULL,
  `teksti_kauppaaika` text NOT NULL,
  `teksti_kauppamaa` text NOT NULL,
  `teksti_kauppakatsottu` text NOT NULL,
  `teksti_kauppapoista` text NOT NULL,
  `teksti_kauppaeikatsottu` text NOT NULL,
  `teksti_hintasuodatin` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kieli`
--

INSERT INTO `kieli` (`id`, `kieli`, `lisaa_sivu`, `lisaa_kuva`, `lisaa_kauppa`, `lisaa_paiva`, `lisaa_aika`, `lisaa_hinta`, `lisaa_suosikki`, `lisaa_viesti`, `lisaa_lisaa`, `nappiteksti_paiva`, `nappiteksti_hinta`, `teksti_nakyma`, `nappiteksti_3kuvaa`, `nappiteksti_5kuvaa`, `nappiteksti_7kuvaa`, `nappiteksti_suosikit`, `nappiteksti_kaikki`, `nappiteksti_exit`, `nappiteksti_historia`, `nappiteksti_kayttajahallinta`, `nappiteksti_etusivu`, `lisaa_myyntihinta`, `teksti_kauppa`, `teksti_hinta`, `teksti_teksti`, `teksti_lisaaja`, `teksti_sulkeutuu`, `teksti_aika`, `nappiteksti_poista`, `lisaa_tunnus`, `lisaa_salasana`, `lisaa_salasanauud`, `lisaa_kayttaja`, `lisaa_admin`, `teksti_tunnus`, `teksti_kayttooikeus`, `suodatus0`, `suodatus1`, `suodatus2`, `suodatus3`, `suodatus4`, `suodatus5`, `suodatus6`, `nappi_suodata`, `nappi_poista`, `nappi_muokkaa`, `nappi_aktiivithuutokaupat`, `nappi_huutokauppahistoria`, `nappi_kohteidenlisays`, `nappi_valittujenkohteidenkatsominen`, `teksti_tiedot`, `teksti_annapvm`, `teksti_kaupannimi`, `teksti_kaupanurl`, `teksti_maa`, `teksti_kello`, `teksti_paivamaara`, `teksti_kauppanimi`, `teksti_kauppaaika`, `teksti_kauppamaa`, `teksti_kauppakatsottu`, `teksti_kauppapoista`, `teksti_kauppaeikatsottu`, `teksti_hintasuodatin`) VALUES
(1, 'Suomi', 'Kohde URL', 'Kuva URL', 'Kaupan nimi tulee t&auml;h&auml;n.', 'Sulk. paiva', 'Sulk. aika', 'Pohjahinta', 'Suosikki', 'Kirjoita kommentti t&auml;h&auml;n', 'Lis&auml;&auml;', 'PVM', 'Tarjoustaso', 'N&auml;kym&auml;', '3 Kuvaa', '5 Kuvaa', '7 Kuvaa', 'Suosikit', 'Kaikki', 'Exit', 'Historia', 'K&auml;ytt&auml;j&auml;hallinta', 'Etusivu', 'Tarjoustaso', 'Kauppa ', 'Pohjahinta: ', 'Kommentti: ', 'Lis&auml;&auml;j&auml; ', 'Sulkeutuu: ', 'Klo: ', 'Poista', 'Tunnus', 'Salasana', 'Salasana uudelleen', 'K&auml;ytt&auml;j&auml;', 'Admin: ', 'Tunnus: ', 'K&auml;ytt&ouml;oikeus: ', 'Suodatus', 'Valinta 1', 'Valinta 2', 'Valinta 3', 'Valinta 4', 'Valinta 5', 'Valinta 6', 'Suodata', 'Poista', 'Muokkaa', 'Aktiivit huutokaupat', 'Huutokauppa-historia', 'Kohteiden lisäys', 'Valittujen kohteiden katsominen', 'Tiedot: ', 'Anna p&auml;iv&auml;&auml;r&auml;', 'Anna kaupan nimi', 'Anna kaupan URL', 'Anna maa', 'Anna kellonaika', 'PVM', 'Kauppa', 'Aika', 'Maa', 'Katsottu', 'Poista', 'Ei ole katsottu', 'Hinta');

-- --------------------------------------------------------

--
-- Table structure for table `seuranta`
--

CREATE TABLE IF NOT EXISTS `seuranta` (
  `id` int(11) NOT NULL auto_increment,
  `pvm` date NOT NULL,
  `aika` text NOT NULL,
  `maa` text NOT NULL,
  `knimi` text NOT NULL,
  `kurl` text NOT NULL,
  `katsottu` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `seuranta`
--

INSERT INTO `seuranta` (`id`, `pvm`, `aika`, `maa`, `knimi`, `kurl`, `katsottu`) VALUES
(39, '2013-01-21', 'Saksa:00', '', 'Gärtner', 'http://www.auktionen-gaertner.de', 0),
(30, '2012-12-01', '10:00:00', 'Saksa', 'Schultze', 'http://www.philasearch.com/de/country_topic.html?set_anbieter=9094&set_auktionnr=266', 0),
(31, '2012-11-27', '8:00:00', 'Saksa', 'Dresdner', 'http://www.philasearch.com/de/country_topic.php3?set_anbieter=44&set_auktionnr=658', 0),
(32, '2012-11-29', '8:00:00', 'Englanti', 'Corbitts', 'http://www.philasearch.com/de/country_topic.php3?set_anbieter=9232&set_auktionnr=3307', 0),
(33, '2012-12-11', '8:00:00', 'Saksa', 'Badische Briefm', 'http://www.philasearch.com/de/country_topic.html?set_anbieter=29&set_auktionnr=272', 0),
(41, '2020-09-01', 'Suomi:00', '10:00', 'tulostintavaratalo', 'http://www.tulostintavaratalo.fi/', 0),
(34, '2012-11-22', '8:00:00', 'Saksa', 'Schwanke', 'http://www.schwanke-auktionen.de/home', 0),
(40, '2018-11-25', 'Suomi:00', '10:00', 'Projektoritavaratalo', 'http://www.projektoritavaratalo.fi/', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sisalto`
--

CREATE TABLE IF NOT EXISTS `sisalto` (
  `id` int(11) NOT NULL auto_increment,
  `kuva` text NOT NULL,
  `osoite` text NOT NULL,
  `kauppa` text NOT NULL,
  `hinta` text NOT NULL,
  `sulkeutuu` date NOT NULL,
  `nakyvyys` int(11) NOT NULL,
  `suosikki` int(11) NOT NULL,
  `teksti` text NOT NULL,
  `lisaaja` varchar(32) NOT NULL,
  `myyntihinta` text NOT NULL,
  `aika` text NOT NULL,
  `tietokentta1` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=569 ;

--
-- Dumping data for table `sisalto`
--

INSERT INTO `sisalto` (`id`, `kuva`, `osoite`, `kauppa`, `hinta`, `sulkeutuu`, `nakyvyys`, `suosikki`, `teksti`, `lisaaja`, `myyntihinta`, `aika`, `tietokentta1`) VALUES
(530, 'http://www.philasearch.com/bilder/A09232/S143/166.jpg', 'http://www.philasearch.com/de/i_9232_166/Finnland/9232-A143-166.html?breadcrumbId=1353504466.7409', 'Corbitts', '125 GBP', '2012-11-29', 0, 0, 'ehkä?', 'toni', '', '', '0'),
(531, 'http://www.philasearch.com/bilder/A09196/E12501/1250107734.jpg', 'http://www.philasearch.com/de/i_9112_10856/Finnland/michel_2.html?breadcrumbId=1353505334.8274', 'Badisce', 'GEBOT', '2012-12-11', 0, 0, 'Ohut\r\n\r\nmutta hyvä leima!', 'toni', '', '', '0'),
(532, 'http://www.philasearch.com/bilder/A09196/E16530/1653008489.jpg', 'http://www.philasearch.com/de/i_9112_10862/Finnland/michel_35%2C+GSP.html?breadcrumbId=1353505466.9539', 'Badisce', 'GEBOT', '2012-12-11', 0, 0, 'Constantinopeliin rengaslisämerkillä!', 'toni', '', '', '0'),
(529, 'http://www.philasearch.com/bilder/A00044/S166/545.jpg', 'http://www.philasearch.com/de/i_9121_545/Finnland_Besetzung_Aunus__Olonez_/michel_1_7.html?breadcrumbId=1353503767.1054', 'Dresdner', '50', '2012-11-27', 0, 0, '1. painos *', 'toni', '', '', '0'),
(528, 'http://www.philasearch.com/bilder/A00044/S166/544.jpg', 'http://www.philasearch.com/de/i_9121_544/Finnland_Besetzung_Aunus__Olonez_/michel_1_7.html?breadcrumbId=1353503767.1054', 'Dresdner', '100', '2012-11-27', 0, 0, '* tarjoa', 'toni', '', '', '0'),
(527, 'http://www.philasearch.com/bilder/A00044/S166/548.jpg', 'http://www.philasearch.com/de/i_9121_548/Finnland_Besetzung_Aunus__Olonez_/michel_1_7.html?breadcrumbId=1353503767.1054', 'Dresdner', '80', '2012-11-27', 0, 0, 'schwenson atesti\r\n\r\n5 mk mukaan tarjous?', 'toni', '', '', '0'),
(526, 'http://www.philasearch.com/bilder/A09094/S149/4881.jpg', 'http://www.philasearch.com/de/i_9094_4881/Finnland/michel_1.html?breadcrumbId=1353503510.7585', 'Schultze', '200', '2012-12-01', 0, 0, 'Leimaväärenne?', 'toni', '', '', '0'),
(523, 'http://www.schwanke-auktionen.de/imagedata/338/detail/338-6142-0.jpg', 'http://www.schwanke-auktionen.de/auctions/338/catalogue/lots/6142', 'Schwanke', '100', '2012-11-18', 0, 0, 'Kirjoita kommentti tähän', 'Esa', '', '', '0'),
(524, 'http://www.schwanke-auktionen.de/imagedata/338/detail/338-392-0.jpg', 'http://www.schwanke-auktionen.de/auctions/338/catalogue/lots/392', 'Schwanke', '200', '2012-11-22', 0, 0, 'Kirjoita kommentti tähän', 'Esa', '', '', '0'),
(525, 'http://www.philasearch.com/bilder/A09094/S149/4880.jpg', 'http://www.philasearch.com/de/i_9094_4880/Finnland/michel_1.html?breadcrumbId=1353503510.7585', 'Schultze', '600', '2012-12-01', 0, 0, 'Kirjoita kommentti tähän', 'toni', '', '', '0'),
(518, 'http://www.schwanke-auktionen.de/imagedata/338/detail/338-6142-0.jpg', 'http://www.schwanke-auktionen.de/auctions/338/catalogue/lots/6142', 'Schwanke', '100', '2012-11-10', 0, 0, '1. testi', 'Esa', 'Tarjoustaso', 'Sulk. aika:00', '0'),
(533, 'http://www.philasearch.com/bilder/A09196/E16530/1653010697.jpg', 'http://www.philasearch.com/de/i_9112_10877/Finnland/michel_204.html?breadcrumbId=1353505643.6419', 'Badisce', 'GEBOT', '2012-12-11', 0, 0, 'Istanbuliin', 'toni', '', '', '0'),
(534, 'http://www.philasearch.com/bilder/A09330/S633/1416.jpg', 'http://www.philasearch.com/en/i_9330_1416/Finland/9330-A633-1416.html?breadcrumbId=1354822432.4205', 'Kelleher', '275 USD', '2012-12-11', 0, 0, 'Kirjoita kommentti tähän', 'Esa', '', '', '0'),
(535, 'http://www.philasearch.com/bilder/A09330/S633/1417.jpg', 'http://www.philasearch.com/en/i_9330_1417/Finland/9330-A633-1417.html?breadcrumbId=1354822591.2019', 'Kelleher', '100 usd', '2012-12-11', 0, 0, 'Kirjoita kommentti tähän', 'Esa', '', '', '0'),
(536, 'http://www.philasearch.com/bilder/A09330/S633/1625.jpg', 'http://www.philasearch.com/en/i_9330_1625/Russia/9330-A633-1625.html?breadcrumbId=1354822759.4066', 'Kelleher', '300 usd', '2012-12-11', 0, 0, 'Extensin schwenson', 'Esa', '', '', '0'),
(537, 'http://www.kerailija.net/auction/images/12.jpg', 'http://www.kerailija.net/auction/eng/karelia/classics/ovals/12', 'Karelia', '50', '2013-01-07', 0, 0, 'Hämeenlinna ?', 'esa', '140', '', 'tieto1'),
(538, 'http://www.kerailija.net/auction/images/7.jpg', 'http://www.kerailija.net/auction/eng/karelia/classics/ovals/7', 'Karelia', '60', '2013-01-07', 0, 0, 'Väri?\r\noranssi...', 'esa', '100', '', '0'),
(539, 'http://www.kerailija.net/auction/images/3.jpg', 'http://www.kerailija.net/auction/eng/karelia/classics/ovals/3', 'Karelia', '190', '2013-01-07', 0, 0, 'Ehkä pohja', 'esa', '', '', '0'),
(540, 'http://www.kerailija.net/auction/images/2.jpg', 'http://www.kerailija.net/auction/eng/karelia/classics/ovals/2', 'Karelia', '330', '2013-01-07', 0, 0, 'Greenblue!\r\n\r\nnähtävä atesti, jos hyvä 600+', 'esa', '', '', '0'),
(541, 'http://www.kerailija.net/auction/images/1.jpg', 'http://www.kerailija.net/auction/eng/karelia/classics/ovals/1', 'Karelia', '150', '2013-01-07', 0, 0, 'Ohut mutta leveä!\r\n300-400', 'esa', '', '', '0'),
(543, 'http://stampcircuit.com/sites/default/files/styles/item_thumb/public/universal-philatelic-auctions/stampauction/sale-48/4396.jpg', 'http://stampcircuit.com/stamp-Auction/universal-philatelic-auctions/2505167/lot-4396', 'UPA', '400 GBP', '2013-01-08', 0, 0, 'Kallis?\r\n\r\n1856 ulkomaille!', 'esa', '', '', 'tieto1'),
(554, 'http://cat.auktionen-gaertner.de/GPKATAUK/99/13/9913A6/s275264.jpg?PIC', 'http://www.auktionen-gaertner.de/www/PHILNET/GAERTNER/GPKATAUK.NSF/LinkE/A346C680458F6377C1257AD80002B029?OpenDocument&SessionID=mnR6hSLmS07sWyYwTeqi', 'Gärtner', '80', '2013-01-21', 0, 0, '1887 todella paha!\r\n\r\nOnkohan toista', 'Esa', '', '10:00', 'tieto0'),
(555, 'http://cat.auktionen-gaertner.de/GPKATAUK/99/9F/999F0A/s284519.jpg?PIC', 'http://www.auktionen-gaertner.de/www/PHILNET/GAERTNER/GPKATAUK.NSF/LinkE/B5FC1FE6BF56B4D2C1257AD80003311C?OpenDocument&SessionID=mnR6hSLmS07sWyYwTeqi', 'Gärtner', '3000', '2013-01-21', 0, 0, 'LAskemalla voi päästä lähelle??', 'Esa', '', '10:00', 'tieto0'),
(556, 'http://cat.auktionen-gaertner.de/GPKATAUK/98/82/98820A/s214404.jpg?PIC', 'http://www.auktionen-gaertner.de/www/PHILNET/GAERTNER/GPKATAUK.NSF/LinkE/3F5B866A928EB046C1257AD8000226EC?OpenDocument&SessionID=mnR6hSLmS07sWyYwTeqi', 'Gärtner', '600', '2013-01-21', 0, 0, 'Lähellä', 'Esa', '', '10:00', 'tieto0'),
(557, 'http://cat.auktionen-gaertner.de/GPKATAUK/99/A4/99A442/s284858.jpg?PIC', 'http://www.auktionen-gaertner.de/www/PHILNET/GAERTNER/GPKATAUK.NSF/LinkE/7A3AD6F950126087C1257AD80003369B?OpenDocument&SessionID=mnR6hSLmS07sWyYwTeqi', 'Gärtner', '600', '2013-01-21', 0, 0, 'lisää kuvia?', 'Esa', '', '10:00', 'tieto0'),
(558, 'http://www.philasearch.com/bilder/A09224/S53/1136.jpg', 'http://www.philasearch.com/en/i_9224_1136/Finland/9224-A53-1136.html?breadcrumbId=1358353430.7182#.UPbUKax5eSo', 'Rölli', '400 CHF', '2013-01-30', 0, 0, 'Schwenson atesti\r\n\r\nTäydet reunat\r\n\r\n500', 'esa', '', '10:00', 'tieto0'),
(559, 'http://kuvat2.huuto.net/5/0c/a786bbccd5cee9f8d2c875e9bbdff-m.jpg', 'http://www.huuto.net/kohteet/hp-photosmart-935-digikamera-isopaketti-ei-hintavarusta/318803029', 'Huuto.net', '18', '2014-07-05', 0, 0, 'Ei hintavarausta', 'admin', '80', '10:00', 'tieto0'),
(560, 'http://kuvat2.huuto.net/c/18/2b9867092431cd0d3299829f2972d-m.jpg', 'http://www.huuto.net/kohteet/nikon-coolpix-s3100/319713930', 'Huuto.net', '56.00', '2014-07-05', 0, 0, 'Kirjoita kommentti tÃ¤hÃ¤n', 'admin', '', '12:00', 'tieto0'),
(561, 'http://kuvat2.huuto.net/2/f2/4eb468dda62407e34ad7b4b5eadda-m.jpg', 'http://www.huuto.net/kohteet/cyan-mustepatruuna-hp-951-xl-sis-rahti/311431339', 'Huuto.net', '12', '2014-07-25', 0, 0, 'Mustepatruuna', 'admin', '', '10:00', 'tieto0'),
(562, 'http://kuvat2.huuto.net/6/95/a3186522060420491358cfb7dd25c-m.jpg', 'http://www.huuto.net/kohteet/4-mustepatruunaa-hp-tulostimiin-h932-3-xl/311434507', 'Huuto.net', '45', '2014-07-25', 0, 0, 'Mustepatruuna', 'admin', '', '22:00', 'tieto0'),
(563, 'http://kauppa.cityplus.fi/fin/img/image.php?id=30000002346', 'http://kauppa.cityplus.fi/fin/tuote/ALL-PAC-CW-BD/BluRay_DiscCase_pakkaus_koneSemiAutomatic_laite', 'CityPlus', '6983', '2014-10-25', 0, 0, 'Testaus CityPlus-sivuilta', 'admin', '', '10:00', 'tieto0'),
(564, 'http://kauppa.cityplus.fi/fin/img/image.php?id=30000002830', 'http://kauppa.cityplus.fi/fin/tuote/F-ADP-RAID-CMBO/1_to_2_Cloning2_to_1_RAID_adapter__Includes_software', 'CityPlus', '1270', '2014-12-25', 0, 0, 'Kirjoita kommentti tÃ¤hÃ¤n', 'admin', '', '10:00', 'tieto0'),
(565, 'http://www.projektoritavaratalo.fi/img/image.php?id=7580', 'http://www.projektoritavaratalo.fi/epson_high_end_projektori_tarjoukset', 'CityPlus', '1999', '2015-12-25', 0, 0, 'Kirjoita kommentti tÃ¤hÃ¤n', 'admin', '', '22:00', 'tieto0'),
(566, 'http://www.tulostintavaratalo.fi/img/image.php?id=8694', 'http://www.tulostintavaratalo.fi/tuote/bro-hls7000dn/brother_hls7000dn_inkjet_printer', 'Tulostintavaratalo', '3450', '0000-00-00', 0, 0, 'Kirjoita kommentti tÃ¤hÃ¤n', 'admin', '', '10:00', 'tieto0'),
(567, 'http://www.tulostintavaratalo.fi/img/image.php?id=8694', 'http://www.tulostintavaratalo.fi/tuote/bro-hls7000dn/brother_hls7000dn_inkjet_printer', 'Tulostintavaratalo', '3450', '2020-10-12', 0, 0, 'Kirjoita kommentti tÃ¤hÃ¤n', 'admin', '', '10:00', 'tieto0'),
(568, 'http://kuvat2.huuto.net/5/ca/8df1c5b29ffd26c88c0f21aa3388b-m.jpg', 'http://www.huuto.net/kohteet/vihkisormus-_-kihlasormus--14k-koko-165mm-nopeimmalle/320147582', 'Huuto', '105', '2014-10-29', 0, 0, 'Vihkisormus', 'admin', '', '10:00', 'tieto0');

-- --------------------------------------------------------

--
-- Table structure for table `suosikit`
--

CREATE TABLE IF NOT EXISTS `suosikit` (
  `id` int(11) NOT NULL auto_increment,
  `sisaltoID` int(11) NOT NULL,
  `lisaaja` text NOT NULL,
  `pvm` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `suosikit`
--

INSERT INTO `suosikit` (`id`, `sisaltoID`, `lisaaja`, `pvm`) VALUES
(1, 520, 'admin', '2012-11-12'),
(25, 549, 'toni', '2013-01-10'),
(31, 537, 'toni', '2013-01-07'),
(10, 547, 'anssi', '2012-12-20'),
(14, 543, 'admin', '2013-01-08'),
(37, 554, 'Esa', '2013-01-22'),
(24, 549, 'toni', '2013-01-10'),
(23, 549, 'toni', '2013-01-10'),
(22, 549, 'toni', '2013-01-10'),
(26, 549, 'toni', '2013-01-10'),
(36, 553, 'admin', '2013-01-09'),
(33, 541, 'toni', '2013-01-07'),
(32, 541, 'toni', '2013-01-07');

-- --------------------------------------------------------

--
-- Table structure for table `tunnus`
--

CREATE TABLE IF NOT EXISTS `tunnus` (
  `id` int(11) NOT NULL auto_increment,
  `nimi` varchar(20) NOT NULL,
  `salasana` varchar(32) NOT NULL,
  `oikeus` int(2) NOT NULL default '2',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `nimi` (`nimi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `tunnus`
--

INSERT INTO `tunnus` (`id`, `nimi`, `salasana`, `oikeus`) VALUES
(1, 'admin', 'd8578edf8458ce06fbc5bb76a58c5ca4', 1),
(3, 'user', 'd8578edf8458ce06fbc5bb76a58c5ca4', 2),
(4, 'toni', 'd8578edf8458ce06fbc5bb76a58c5ca4', 1),
(21, 'ari', 'd8578edf8458ce06fbc5bb76a58c5ca4', 1),
(20, 'anssi', 'd8578edf8458ce06fbc5bb76a58c5ca4', 1),
(22, 'esa', 'b68ebdecf24d58f9ed1ed2e582026870', 1),
(23, 'tatu', '3b9b76fc3ec5b67f1cf55d0cc08110bd', 1),
(24, 'tomi', 'af0e98074591812dffbc71665781d713', 1),
(25, 'kari', '32ac1a6108c41d33fac71e9f4739ef4a', 1),
(26, 'juha', 'c9b857244c548ec20aa8c79cb4910732', 1),
(28, 'kaj', 'b695a0a8213c0829072cb4a8e5c09159', 1),
(33, 'reinikainen', '8c57d7c84c24305d0ef396f6c21e4a40', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
