<?php 
	session_start();
	if (!isset($_GET["site-url"])) {
		header("Location: ./index.php");
	}
?>
<!DOCTYPE html> 
<html>

<head>
	<?php
	include("header.php");
	include("config.php");
	?>
</head> 

<body>
	<div data-role="header">
		<a href="index.php">Back</a>
		<h1>Chirp</h1>
		<!-- Ryan: If someone is logged in write "Welcome [username]" -->
	</div><!-- /header -->

	<div data-role="content">
		<div class="site-url"></div>
		<div class="avg-rating"></div>
		<div class="review-count"></div>
		<div class="add-favorite-btn"></div>
		<div class="site-reviews"></div>
	</div><!-- /content -->

	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
			<ul>
				<li><a href="index.php" id="search" data-icon="custom">Search</a></li>
				<li></li>
				<li><a href="profile.php" id="profile" data-icon="custom">My Profile</a></li>
				<li><a href="bookmarks.php" id="bookmarks" data-icon="custom" >Bookmarks</a></li>
			</ul>
		</div>
	</div>


</body>
</html>	