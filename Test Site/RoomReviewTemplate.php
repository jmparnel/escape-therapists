<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Room Review</title>
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
	<img class='roomimage' src="roomimage.jpg" width="100%" height="472" alt=""/>
	<div clas = "rating">
	<h1 class="Room">Red Giant</h1>
<h4 class="by">by</h6>
<?php
	switch($comp){
		case 1:
			echo '<h2 class = "company">Questroom</h2>';
			echo '<img src="Images/Logos/Questroom.jpg" class = "logo" height=150 alt=""/>';
			break;
		case 2:
			echo '<h2 class = "company">60Out</h2>';
			echo '<img src="Images/Logos/60out.svg" class = "logo" height=150 alt=""/>';
			break;
		case 3:
			echo '<h2 class = "company">Maze Rooms LA</h2>';
			echo '<img src="Images/Logos/MazeLA.svg" class = "logo" height=150 alt=""/>';
			
			break;
		case 4:
			echo '<h2 class = "company">Trapped!</h2>';
			echo '<img src=""Images/Logos/trapped.svg"" class = "logo" height=150 alt=""/>';
			break;
		case 5:
			echo '<h2 class = "company">Evil Genius</h2>';
			echo '<img src="Images/Logos/EvilGenius.png" class = "logo" height=150 alt=""/>';
			break;
		case 6:
			echo '<h2 class = "company">Cross Roads</h2>';
			echo '<img src="Images/Logos/CrossRoads_Logo_color.png"  class = "logo" height=150 alt=""/>';
			break;
		case 7:
			echo '<h2 class = "company">Puzzle Workshop</h2>';
			echo '<img src="Images/Logos/Puzzleworkshop.png" class = "logo" alt=""/>';
			break;
		case 8:
			echo '<h2 class = "company">Exodus</h2>';
			echo '<img src="Images/Logos/exodus.png" class = "logo" alt=""/>';
			break;
		default:
			echo '<h2 class = "company">'.$comp.'</h2>';
			echo '<img src="{CUSTOM PIC HERE}" alt=""/>" class = "logo" height=150 alt=""/>';
	}
	
	?>


<p class="diff">
  Difficulty:
  <?php
	switch($diff){
		case 1:
			echo '<img src="Images/D-1.png" width="150" height="20" alt="1/5"/>';
			break;
		case 2:
			echo '<img src="Images/D-2.png" width="150" height="20" alt="2/5"/>';
			break;
		case 3:
			echo '<img src="Images/D-3.png" width="150" height="20" alt="3/5"/>';
			break;
		case 4:
			echo '<img src="Images/D-4.png" width="150" height="20" alt="4/5"/>';
			break;
		case 5;
			echo '<img src="Images/D-5.png" width="150" height="20" alt="5/5"/>';
			break;
	}
	
	?>
  </p>
	<p class="fear">
	Fear Factor:
		<?php
	switch($scare){
		case 1:
			echo '<img src="Images/S-1.png" width="150" height="20" alt="1/5"/>';
			break;
		case 2:
			echo '<img src="Images/S-2.png" width="150" height="20" alt="2/5"/>';
			break;
		case 3:
			echo '<img src="Images/S-3.png" width="150" height="20" alt="3/5"/>';
			break;
		case 4:
			echo '<img src="Images/S-4.png" width="150" height="20" alt="4/5"/>';
			break;
		case 5;
			echo '<img src="Images/S-5.png" width="150" height="20" alt="5/5"/>';
			break;
		default:
			echo "NA";
	}
		
	
	?>
	</p>

<p class="numplay">
	Number of Players: <?php echo $numplayer ?>
	</p>
<p class="price">
	Price: <?php echo $price ?>
	</p>
</div>

<div class="AfterRating">
  <h3 class = "firstHeading">About the Room</h3>
	<p class="intro">
	
	<?php
	echo "<i>".$market."</i>";
	?>
	</p>
</div>	

</body>
</html>