<?php 	session_start(); ?>
<!DOCTYPE html> 
<html>

<head>
	<?php
	include("header.php");
	?>
</head> 

	
<body> 
	<div data-role="header">
	
	<?php
		if(isset($_SESSION['id'])) { 
			$user_email = $_SESSION['id'];
			echo "<h1> Welcome $user_email :) </h1>";
		} else { 
			echo "<h1>Chirp</h1>";
		}
		?>
		<!-- Ryan: If someone is logged in write "Welcome [username]" -->
	</div><!-- /header -->

	<div data-role="content">	
		<div class="center">
			<h1>SEARCH</h1>
			<p>by website</p>
			<?php
				include("search_form.php");
			?>
			<h1>OR</h1>
			<p>by category</p>
			<ul data-role="listview" data-inset="true" data-filter="true">
				<li><a href="#">News</a></li>
				<li><a href="#">Social Media</a></li>
				<li><a href="#">Health Care</a></li>
				<li><a href="#">Sports</a></li>
				<li><a href="#">Entertainment</a></li>
				<li><a href="#">Games</a></li>
				<li><a href="#">Electronics</a></li>
			</ul>
		</div>
	</div><!-- /content -->
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
			<ul>
				<li><a href="index.php" id="search" data-icon="custom" class="ui-btn-active">Search</a></li>
				<li></li>
				<li><a href="profile.php" id="profile" data-icon="custom">My Profile</a></li>
				<li><a href="bookmarks.php" id="bookmarks" data-icon="custom">Bookmarks</a></li>
			</ul>
		</div>
	</div>
	

</script>

</body>
</html>