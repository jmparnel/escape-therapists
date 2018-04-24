<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Room Review Template</title>
<link rel="stylesheet" href="RoomReviewTemplate.css">
<style type="text/css">
</style>
</head>
<?php 
	$textfilename = 'TestReview.txt';
	
	$rawText = file_get_contents($textfilename);
	
	$matches = array();
	preg_match('/{(\[.*?\])\s*(\[.*?\])\s*(\[.*?\])\s*(\[.*?\])\s*(\[.*?\])\s*(\[.*?\])\s*(\[.*?\])\s*(\[.*?\])}\s*({.*})\s*({.*})\s*({.*})\s*({.*})\s*({.*})/',$rawText,$matches);
	
	function clean($string) {return str_replace(array('[',']','{','}'),'',$string);}
	
	$rating = clean($matches[1]);
	$diff = clean($matches[2]);
	$scare = clean($matches[3]);
	$loc = clean($matches[4]);
	$comp = clean($matches[5]);
	$room = clean($matches[6]);
	$numplayer = clean($matches[7]);
	$price = clean($matches[8]);
	$market = clean($matches[9]);
	$production = clean($matches[10]);
	$puzzles = clean($matches[11]);
	$experience = clean($matches[12]);
	$summary = clean($matches[13]);
	?>


<body>
	<h1>Red Giant</h1>
	
		<?php
	switch($comp){
		case 1:
			echo '<h2>Questroom</h2>';
			break;
		case 2:
			echo '<h2>60Out</h2>';
			break;
		case 3:
			echo '<h2>Maze Rooms</h2>';
			break;
	}
	
	?>
	<p class="diff">
	Difficulty:
	<?php
	switch($diff){
		case 1:
			echo '<img src="Images/D-1.png" width="150" height="20" alt=""/>';
			break;
		case 2:
			echo '<img src="Images/D-2.png" width="150" height="20" alt=""/>';
			break;
		case 3:
			echo '<img src="Images/D-3.png" width="150" height="20" alt=""/>';
			break;
		case 4:
			echo '<img src="Images/D-4.png" width="150" height="20" alt=""/>';
			break;
		case 5;
			echo '<img src="Images/D-5.png" width="150" height="20" alt=""/>';
			break;
	}
	
	?>
	</p>
	<p class="fear">
	Fear Factor:
		<?php
	switch($scare){
		case 1:
			echo '<img src="Images/S-1.png" width="150" height="20" alt=""/>';
			break;
		case 2:
			echo '<img src="Images/S-2.png" width="150" height="20" alt=""/>';
			break;
		case 3:
			echo '<img src="Images/S-3.png" width="150" height="20" alt=""/>';
			break;
		case 4:
			echo '<img src="Images/S-4.png" width="150" height="20" alt=""/>';
			break;
		case 5;
			echo '<img src="Images/S-5.png" width="150" height="20" alt=""/>';
			break;
	}
		
	
	?>
	</p>



	<h3 class = "firstHeading">About the Room</h3>
	<p class="intro">
	
	<?php
	echo "<i>".$market."</i>";
	?>
	</p>
	
</body>
</html>