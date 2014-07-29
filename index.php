<?php
session_start();
?>
<html>
<head>
<title>kirjaudu</title>
</head>

<body>
<link href="valikko.css" rel="stylesheet" type="text/css" />
<link href="sisalto.css" rel="stylesheet" type="text/css" />
<link href="kirjaudu.css" rel="stylesheet" type="text/css" />

<!-- koko sivuston pohja, leveys on 1100px, korkeus auto -->
<div class="etusivu">

	<!-- sivuston ylaosa, johon keskimmainen layer --> 
	<div class="valikko">

	<!-- keskimmainen layer johon laitetaan tunnus, salasana ja kirjaudunappi -->
		<form action = "kirjaudu.php" method="post">
		<div class="lisaalayerkeski">
		
		
		<!-- tassa lukee tunnuskentan otsikko -->
		<div class="tekstikenttaotsikkopieni">
		Tunnus:
		</div>
		
		<!-- tassa on itse tunnuskentta -->
		<div class="tunnuskentta">
		<input type="text" name="tunnus" style="width:200px; height:20px;" />
		</div>
		
		<!-- tassa lukee salasanan otsikko -->
		<div class="tekstikenttaotsikkopieni">
		Salasana:
		</div>
		
		<!-- tassa itse salasanakentta -->
		<div class="salasanakentta">
		<input type="password" name="salasana" style="width:200px; height:20px;" />
		</div>
		
		<!-- ja nappi joka kutsuu kirjaudu.php -->
		<div class="valikkonappi">
				<input type="submit" value ="Kirjaudu" />
		</div>
		
		
		</div>
		</form>









	</div>
</div>




</body>
</html>