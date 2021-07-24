<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Project</title>
			<link rel="stylesheet" href="css/firefox.css"/>
			<link rel="stylesheet" href="css/base.css"/>
			<link rel="stylesheet" href="css/nav.css"/>
			<link rel="stylesheet" href="css/desktop.css" media="only screen and (min-width:600px)"/>
			<!-- google fonts -->
			<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css2?family=Monofett&display=swap" rel="stylesheet">
			<!-- This link adds the 3 dotted line to the mobile nav bar -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">					
	</head>

<div class="topnav" id="myTopnav">
	<a href="index.php">Home</a>
	<a href="MyFavorites.php">My Favorites</a>
	<a href="NewReleases.php" class="active">New Releases</a>
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
			<h1 class="center gamerfont">New Releases I'm Looking Forward Too</h1>
				<h2 class="center">Assassin's Creed Valhalla</h2>
					<section class="container">	
						<div class="lineSpacing">
							<p>
								Assassin's Creed Valhalla is coming out "this holiday season" with no specific release date as of now.
								I love the newer Assassin's Creed games, because they've added all kinds of different ways to plan out
								strategies for different ways to play the game, whether you prefer to be sneaky or just run right into a group
								of people is up to you now. In this new game you'll be a viking leader of your clan, and you'll be in charge
								of upgrading your settlement, raids will be in this game, and more. If you enjoy the fighting, action, strategy styled
								game then this game is one to really look forward too.	
							</p>
							
							<div class="image">
								<img src="img/acv.jpg" alt="Assassin's Creed Valhalla">
							</div>
							
								<h2 class="center">Halo Infinite</h2>
							<p>
								This game has been in the making for too long, Halo 5 was released in 2015. I have been a big fan of Halo since Halo 3 came out
								on Xbox 360, my friends and I would play that game all day in just custom games having the time of our lives. Starting from Halo 3
								all the way up to Halo 5 my friends and I have challenged ourselves to beat the campaign on Legendary. Halo has a great storyline
								if you follow it, and I can't wait to see where the game takes you in this upcoming game. Halo is 
							</p>
							
							<div class="image">
								<img src="img/halo.jpg" alt="Halo Infinite">
							</div>
							
							
								<h2 class="center">Godfall</h2>
							<p>
								This game looks absolutely amazing, especailly if you love looter rpg games. This game will have similar looting style
								to the borderlands games, but will have fighting mechanincs similar to Dark Souls. This game is about knights fighting
								off evil to stop an apocolypse. You will have the option to play this game solo or coop which is always nice being
								able to play with your friends.
							</p>
							
							<div class="image">
								<img src="img/godfall.jpg" alt="Call of Duty">
							</div>
							
						</div>
					</section>
				<div>
					<?php include 'footer.php';?>
				</div>
		</body>
	</div>
</div>
</html>