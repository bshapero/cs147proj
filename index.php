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
		<h1>Chirp</h1>
		<a href="profile.php" data-icon="gear" class="ui-btn-right">
		<?php
		if(isset($_SESSION['id'])) { 
			$user_email = $_SESSION['id'];
			echo "$user_email";
		}
		?>
		</a>
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
			<li><a href="site_queries.php?search_by_category=News">News</a></li>
			<li><a href="site_queries.php?search_by_category=Social Media">Social Media</a></li>
			<li><a href="site_queries.php?search_by_category=Health Care">Health Care</a></li>
			<li><a href="site_queries.php?search_by_category=Sports">Sports</a></li>
			<li><a href="site_queries.php?search_by_category=Entertainment">Entertainment</a></li>
			<li><a href="site_queries.php?search_by_category=Games">Games</a></li>
			<li><a href="site_queries.php?search_by_category=Electronics">Electronics</a></li>
			</ul>
			
		</div>
	</div><!-- /content -->
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
			<ul>
				<li><a href="index.php" id="search" data-icon="custom" class="ui-btn-active">Search</a></li>
				<li><a href="profile.php" id="profile" data-icon="custom">My Profile</a></li>
				<li><a href="bookmarks.php" id="bookmarks" data-icon="custom">Bookmarks</a></li>
				<li><a href="login.php" id="login" data-icon="custom">Login</a></li>
			</ul>
		</div>
	</div>
	

</script>

</body>
</html>