<?php
	$userName = "Klaus Erik Kruus";
	$fullTimeNow = date("d.m.Y H:i:s");
	$hourNow = date("H");
	$partOfDay = "Hägune aeg";
	if($hourNow < 8){
		$partOfDay = "varane hommik";
	
	
	
	//info semestri kulgemise kohta
	$semesterStart = new DateTime("2019-9-2");
	$semesterEnd = new DateTime("2019-12-13");
	$semesterDuration = $semesterStart->diff($semesterEnd);
	$today = new DateTime("now");
	$fromSemesterStart = $semesterStart->diff($today);
	var_dump($fromSemesterStart);
?>

<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="utf-8"> 	
  <title>
	<?php
	echo $userName;
	?>
	veebiproge</title>
</head>
<body>
	<?php
		echo "<h1>" .$userName ." koolitöö leht </h1>";
	?>
  <p>See leht on loodud koolis õppetöö raames ja ei sisalda tõsiseltvõetavat sisu! </p>
  <hr>
  <p>Lehe avamise hetkel oli aeg:
  <?php
	echo $fullTimeNow;
  ?>
  .</p>
  <?php
	echo "<p>Lehe avamise hetkel oli " .$partOfDay .".</p>";
  ?>
</body>
</html>
