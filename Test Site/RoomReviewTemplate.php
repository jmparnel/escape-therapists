<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Room Review Template</title>
<link rel="stylesheet" href="RoomReviewTemplate.css">
</head>
	<body>
<?php 
	$textfilename = 'TestReview.txt';
	
	$rawText = file_get_contents($textfilename);
	
	$matches = array();
	preg_match('/{(\[.*?\])\s*(\[.*?\])\s*(\[.*?\])\s*(\[.*?\])\s*(\[.*?\])\s*(\[.*?\])}\s*({.*})\s*({.*})\s*({.*})\s*({.*})\s*({.*})/',$rawText,$matches);
	
	function clean($string) {return str_replace(array('[',']','{','}'),'',$string);}
	
	$rating = clean($matches[1]);
	$diff = clean($matches[2]);
	$scare = clean($matches[3]);
	$loc = clean($matches[4]);
	$comp = clean($matches[5]);
	$room = clean($matches[6]);
	$market = clean($matches[7]);
	$production = clean($matches[8]);
	$puzzles = clean($matches[9]);
	$experience = clean($matches[10]);
	$summary = clean($matches[11]);
	?>


	
	
	<diff>
	Difficulty:
	<?php
	switch($diff){
		case 1:
			echo '<img src="Images/D-1.png" width="150" height="30" alt=""/>';
			break;
		case 2:
			echo '<img src="Images/D-2.png" width="150" height="30" alt=""/>';
			break;
		case 3:
			echo '<img src="Images/D-3.png" width="150" height="30" alt=""/>';
			break;
		case 4:
			echo '<img src="Images/D-4.png" width="150" height="30" alt=""/>';
			break;
		case 5;
			echo '<img src="Images/D-5.png" width="150" height="30" alt=""/>';
			break;
	}
	
	?>
	</diff>
	<fear>
	Fear Factor:
		<?php
	switch($scare){
		case 1:
			echo '<img src="Images/S-1.png" width="150" height="30" alt=""/>';
			break;
		case 2:
			echo '<img src="Images/S-2.png" width="150" height="30" alt=""/>';
			break;
		case 3:
			echo '<img src="Images/S-3.png" width="150" height="30" alt=""/>';
			break;
		case 4:
			echo '<img src="Images/S-4.png" width="150" height="30" alt=""/>';
			break;
		case 5;
			echo '<img src="Images/S-5.png" width="150" height="30" alt=""/>';
			break;
	}
		
	
	?>
	</fear>



	<h1>About the Room</h1>
	<?php
	echo "<p class = intro><i>".$market."</i></p>";
	?>
		
	<h1>Production</h1>
	<?php
	echo "<p class = intro><i>".$production."</i></p>";
	?>
	
		<h1>Puzzles</h1>
	<?php
	echo "<p class = intro><i>".$puzzles."</i></p>";
	?>
		<h1>Customer Service</h1>
	<?php
	echo "<p class = intro><i>".$experience."</i></p>";
	?>
		<h1>Overall</h1>
	<?php
	echo "<p class = intro><i>".$summary."</i></p>";
	?>
	
</body>
</html>