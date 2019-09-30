<?php
	function readAllFilms(){
		//loeme andmebaasist
		//loome andmebaasiühenduse (näiteks $conn)

		//var_dump($GLOBALS);
		$conn = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
		//valmistame ette päringu
		$stmt = $conn->prepare("SELECT pealkiri, aasta FROM film");
		//soeme saadava tulemuse muutujaga
		$stmt->bind_result($filmTitle, $filmYear);
		//käivitame SQL päringu
		$stmt->execute();
		$filmInfoHTML = "";
		while($stmt->fetch()){
			$filmInfoHTML .= "<h3>" .$filmTitle ."</h3>";
			$filmInfoHTML .= "<p>Tootmisaasta: " .$filmYear .".</p>";
			//echo $filmTitle;
			//echo ", ";
		}
		//echo $filmTitle;
		//sulgeme ühenduse
		$stmt->close();
		$conn->close();
		//väljastan väärtuse
		return $filmInfoHTML;
	}
		
	function saveFilmInfo($filmTitle, $filmYear, $filmDuration, $filmGenre, $filmCompany, $filmDirector){
		$conn = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
		$stmt = $conn->prepare("INSERT INTO film (pealkiri, aasta, kestus, zanr, tootja, lavastaja) VALUES (?,?,?,?,?,?)");
		echo $conn->error;
		//s - string, i - integer, d - decimal 
		$stmt->bind_param("siisss", $filmTitle, $filmYear, $filmDuration, $filmGenre, $filmCompany, $filmDirector);
		$stmt->execute();
		
		$stmt->close();
		$conn->close();
	}
	
?>