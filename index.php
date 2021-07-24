<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Project</title>
			<link rel="stylesheet" href="css/firefox.css"/>
			<link rel="stylesheet" href="css/base.css"/>
			<link rel="stylesheet" href="css/nav.css"/>
			<!-- google fonts -->
			<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css2?family=Monofett&display=swap" rel="stylesheet">
			<!-- This link adds the 3 dotted line to the mobile nav bar -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">					
	</head>
	<div class="topnav" id="myTopnav">
	<a href="index.php" class="active">Home</a>
	<a href="MyFavorites.php">My Favorites</a>
	<a href="NewReleases.php">New Releases</a>
	<a href="Equipment.php">Must Have Equipment</a>
	<a href="javascript:void(0);" class="icon" onclick="myFunction()">
	<i class="fa fa-bars"></i>
	</a>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
	
	
<div class="page">
	<div class="content">
		<body>
			<h1 class="center gamerfont"> Welcome to Brad's Video Game Blog </h1>
				<h2 class="center">What this blog is about</h2>
					<section class="container">	
					<div class="lineSpacing">
						<p>
							This blog will be all about video games, my personal favorites, equipment and more! I have been a gamer my entire life, it's something i've been passionate about for as long as I can remember.
							I have played just about every modern video game console that is out today, along with playing a very wide variety of video games themselves. I hope that you reading this may persuade you to try
							out a different game, console, or maybe even a piece of equipment.
						<h2>There are more than 2.5 Billion gamers across the world.</h2>
						<p>
							A majority of people in the world are gamers, there are so many different ways that people can play games in todays world. You can even be considered a mobile gamer, there are plenty of 
							youtubers that play mobile games and make money from it. Not only are people playing video games on their brand new consoles but even old consoles are getting remastered and still being sold.
						</p>
					</div>
					</section>
						<div id="desktop">
							<?php include  'piechart.php';?>
						</div>
						<div id="mobile">
							<?php include  'bar.php';?>
						</div>
					<div>
						<?php include 'footer.php';?>
					</div>
		</body>
	
	</div>
</div>
</html>