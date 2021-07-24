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
	