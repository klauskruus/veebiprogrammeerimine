<?php
	require("../../../config_vp2019.php");
	$userName = "Klaus Erik Kruus";
	$database = "if19_klaus_kr_1";
	require("functions_film.php");
	$filmInfoHTML = readAllFilms();
	
	
?>

<body>
	<?php
		echo "<h1>" .$userName ." koolitöö leht </h1>";
	?>
  <p>See leht on loodud koolis õppetöö raames ja ei sisalda tõsiseltvõetavat sisu! </p>
  <hr>
  <h2>Eesti filmid</h2>
  <p>Praegu on andmebaasis järgmised filmid:</p>
  <?php
	//echo "Server: " .$serverHost .", kasutaja: " .$serverUsername;
	echo $filmInfoHTML;
	?>
  
</body>
</html>