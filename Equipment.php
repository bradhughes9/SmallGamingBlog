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
	<a href="NewReleases.php">New Releases</a>
	<a href="Equipment.php" class="active">Must Have Equipment</a>
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
			<h1 class="center gamerfont">Equipment Every Gamer Needs!</h1>
			<h2 class="center">A Quality Desk</h2>
				<section class="container">	
					<div class="lineSpacing">
						<p>
							Having a good desk to support your entire gaming setup is nearly essential for comfort, cleanliness, and will just
							look better. Instead of having your PC on the floor, you want to be able to store it somewhere more safe, along with
							your mouse, keyboard, and others for safety and comfort. There all kinds of desks from movable desks, to standing desks, the options
							are very wide.
							<br>
							<br>
							<br>
							This desk is on my wishlist, it's very room and will make it easy to keep all my equipment nice and organized.
							
						</p>
						
						<div class="image">
							<a href="https://www.kindpng.com/imgv/hwRJJow_r2-gaming-desk-black-and-blue-gaming-desks/"><img src="img/desk.png" alt="Gaming Desk"></a>
						</div>
						
							<h2 class="center">A Gaming Chair</h2>
						<p>
							Having a nice gaming chair changed everything for me, instead of sitting in a old plastic office chair. The gaming chair provides much
							more comfort, supports posture, and feels like a much better quality than my previous chair. In my opinion they also fit much better 
							in your gaming setup than a regular old office chair. Gaming chairs are good for your health in minor ways and just compliment your setup.
							
						</p>
						
						<div class="image">
							<a href="https://www.bestbuy.com/site/arozzi-milano-gaming-chair-red/6180855.p?skuId=6180855&ref=212&loc=1">
							<img src="img/chair.jpg" alt="Gaming Chair"></a>
						</div>
						
							<h2 class="center">Wireless Gaming Mouses and keyboards</h2>
						<p>
							Having a lag-free wireless gaming mouse is one of my best purchases in my opinion, having a cord get caught on something would
							always drove me nuts no matter what I was doing. I puchased the Logitech G602 and there is no input lag at all, it feels like
							i'm still using a wired mouse. My keyboard is the same way, not only is it convienient to have free motion, but there aren't wires dangling
							from your desk to your computer which makes everything look a lot cleaner.
							
						</p>
						
						<div class="image">
							<a href="https://www.amazon.com/Rechargeable-Mechanical-Mouse-Fast-Adjustable-Anti-ghosting/dp/B07CN1VG3Y">
							<img src="img/equipment.jpg" alt="Call of Duty"></a>
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