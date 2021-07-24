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
	<a href="MyFavorites.php" class="active">My Favorites</a>
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
			<h1 class="center gamerfont">These are my Current Favorite Video Games</h1>
				<h2 class="center">Runescape 3</h2>
					<section class="container">	
						<div class="lineSpacing">
							<p>
								There is endless amounts of things that you can do, and how you do them. There are so many different customizations
								that you can make to your playstyle and even purely cosmetic changes. There are currently 28 different skills that you
								can train, and the capacity is so high that you would have to play this game for years to hit it, which is nice because
								it always leaves you more to accomplish. Some people sit in highly populated areas and just talk to others, duel,
								and trade. If none of this interests you, you can go do quests, raids, or even build a house full of useful utilities.
								I mainly do quests, and train to do higher level quests, my end goal is to complete every quest.	
								
							</p>
							
							<div class="image">
								<a href="https://www.runescape.com/community">
								<img src="img/rs.png" alt="Runescape 3"></a>
							</div>
							
								<h2 class="center">Warframe</h2>
							<p>
								Warframe is another one of my favorite games currently, it's considered a MMo 3rd person shooter.
								This game is just like all other MMOs and MMORPGs, you have to do a bunch of grinding for materials
								and currencies to advance into the mid/late game. There are clans that you can join which open up even
								more items for you to research and build, you can play with up to squads of four to do just about anything
								in the game. This game is so great to me because I enjoy the continuous grind for upgrading all aspects of your
								character, weapons, and companions. 
								
							</p>
							
							<div class="image">
								<a href="https://www.warframe.com/">
								<img src="img/warframe.png" alt="Warframe"></a>
							</div>
							
								<h2 class="center">Call of Duty Modern Warfare</h2>
							<p>
								Everybody has heard of, seen, or played Call of Duty. Every one of the games are the same, but with different
								guns, maps, and themes. I've always enjoyed playing these games with my friends and family. The most fun about
								playing these games are the custom games where you compete with your friends playing with specific criteria such as
								"quick scoping" only. It's a very competitive game to play, every Call of Duty i've played I average a 2 kd ratio (kills
								to death ratio). 
								
							</p>
							
							<div class="image">
								<a href="https://www.callofduty.com/">
								<img src="img/cod.png" alt="Call of Duty"></a>
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