<?php
/*
 * Template Name: Review
 * Template Post Type: page,post
 */
   ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Room Review</title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/Review.css" />
<link rel="stylesheet" href="Review.css">
<style type="text/css">
</style>
</head>
<?php 
	
	$rating = get_field('rating');
	$diff = get_field('difficulty');
	$scare = get_field('fear');
	$loc = get_field('location');
	$comp = get_field('company');
	$logo = get_field('logo');
	$room = get_field('room');
	$numplayer = get_field('players');
	$price = get_field('price');
	$market = get_field('story');
	$production = get_field('immersion');
	$puzzles = get_field('puzzles');
	$experience = get_field('service');
	$summary = get_field('summary');
	$mainimg = get_field('main_image');
	?>


<body>
	<img class='roomimage' src="<?php echo $mainimg ?>" width="100%" height="472" alt=""/>
	<div clas = "rating">
	<h1 class="Room">Red Giant</h1>
<h4 class="by">by</h6>
<?php
	switch($comp){
		case 1:
			echo '<h2 class = "company">Questroom</h2>';
			echo '<img src="https://escapetherapists.com/wp-content/uploads/2018/04/Questroom.jpg" class = "logo" height=150 alt=""/>';
			break;
		case 2:
			echo '<h2 class = "company">60Out</h2>';
			echo '<img src="https://escapetherapists.com/wp-content/uploads/2018/04/60out.png" class = "logo" height=150 alt=""/>';
			break;
		case 3:
			echo '<h2 class = "company">Maze Rooms LA</h2>';
			echo '<img src="https://escapetherapists.com/wp-content/uploads/2018/04/MazeLA.png" class = "logo" height=150 alt=""/>';
			
			break;
		case 4:
			echo '<h2 class = "company">Trapped!</h2>';
			echo '<img src="https://escapetherapists.com/wp-content/uploads/2018/04/trapped.png" class = "logo" height=150 alt=""/>';
			break;
		case 5:
			echo '<h2 class = "company">Evil Genius</h2>';
			echo '<img src="https://escapetherapists.com/wp-content/uploads/2018/04/EvilGenius.png" class = "logo" height=150 alt=""/>';
			break;
		case 6:
			echo '<h2 class = "company">Cross Roads</h2>';
			echo '<img src="https://escapetherapists.com/wp-content/uploads/2018/04/CrossRoads_Logo_color.png"  class = "logo" height=150 alt=""/>';
			break;
		case 7:
			echo '<h2 class = "company">Puzzle Workshop</h2>';
			echo '<img src="https://escapetherapists.com/wp-content/uploads/2018/04/Puzzleworkshop.png" class = "logo" alt=""/>';
			break;
		case 8:
			echo '<h2 class = "company">Exodus</h2>';
			echo '<img src="https://escapetherapists.com/wp-content/uploads/2018/04/exodus.png" class = "logo" alt=""/>';
			break;
		default:
			echo '<h2 class = "company">'.$comp.'</h2>';
			echo '<img src="'.$logo.'" alt=""/>" class = "logo" height=150 alt=""/>';
	}
	
	?>


<p class="diff">
  Difficulty:
  <?php
	switch($diff){
		case 1:
			echo '<img class = "ratimg" src="https://escapetherapists.com/wp-content/uploads/2018/04/D-1.png" width="150" height="20" alt="1/5"/>';
			break;
		case 2:
			echo '<img  class = "ratimg" src="https://escapetherapists.com/wp-content/uploads/2018/04/D-2.png" width="150" height="20" alt="2/5"/>';
			break;
		case 3:
			echo '<img class = "ratimg"  src="https://escapetherapists.com/wp-content/uploads/2018/04/D-3.png" width="150" height="20" alt="3/5"/>';
			break;
		case 4:
			echo '<img class = "ratimg" src="https://escapetherapists.com/wp-content/uploads/2018/04/D-4.png" width="150" height="20" alt="4/5"/>';
			break;
		case 5;
			echo '<img class = "ratimg" src="https://escapetherapists.com/wp-content/uploads/2018/04/D-5.png" width="150" height="20" alt="5/5"/>';
			break;
	}
	
	?>
  </p>
	<p class="fear">
	Fear Factor:
		<?php
	switch($scare){
		case 1:
			echo '<img class = "ratimg" src="https://escapetherapists.com/wp-content/uploads/2018/04/S-1.png" width="150" height="20" alt="1/5"/>';
			break;
		case 2:
			echo '<img class = "ratimg" src="https://escapetherapists.com/wp-content/uploads/2018/04/S-2.png" width="150" height="20" alt="2/5"/>';
			break;
		case 3:
			echo '<img class = "ratimg" src="https://escapetherapists.com/wp-content/uploads/2018/04/S-3.png" width="150" height="20" alt="3/5"/>';
			break;
		case 4:
			echo '<img class = "ratimg" src="https://escapetherapists.com/wp-content/uploads/2018/04/S-4.png" width="150" height="20" alt="4/5"/>';
			break;
		case 5;
			echo '<img class = "ratimg" src="https://escapetherapists.com/wp-content/uploads/2018/04/S-5.png" width="150" height="20" alt="5/5"/>';
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
	<p class="intro" id = 'text'>
	
	<?php
	echo $market;
	?>
	</p>
<h3 class = "Heading">Immersion</h3>
	<p class = "scene" id = "text">
	<?php
	echo $production;
	?>
	</p>
<h3 class = "Heading">Puzzles</h3>
	<p class = "puzzles" id = "text">
	<?php
	echo $puzzles;
	?>
	</p>
<h3 class = "Heading">Experience</h3>
	<p class = "exp" id = "text">
	<?php
	echo $experience;
	?>
	</p>
<h3 class = "Heading">Summary</h3>
	<p class = "summary" id = "text">
	<?php
	echo $summary;
	?>
	</p>
</div>	

</body>
</html>