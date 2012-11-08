<?php session_start(); ?>
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
		<a href="#" data-icon="back" data-rel="back">Back</a>
		<h1>Chirp</h1>
		<a href="profile.php" data-icon="gear" class="ui-btn-right">
		<?php
		if(isset($_SESSION['id'])) { 
			$user_email = $_SESSION['id'];
			echo "$user_email";
		}
		?>
		</a>
	</div><!-- /header -->



	<div data-role="content">
	<h1>Bookmarks: </h1>
		<?php 
			if(isset($_SESSION['id'])) {
				$user = $_SESSION['id'];
				$query = "SELECT site_url FROM Bookmarks, Users, Sites WHERE Users.email = '$user' AND Users.user_id = Bookmarks.user_id AND Bookmarks.site_id = Sites.site_id";
				$result = mysql_query($query);
				$rowCheck = mysql_num_rows($result);
				if ($rowCheck > 0) {
				echo "<ul>";
				while ($row = mysql_fetch_array($result)) {
				
					$url = $row['site_url'];	
					echo "<div>
								<form action='site.php' method='get'>
								<input type='hidden' name='site_url' value='$url'/>
								<input type='submit' value='$url'/>
								</form>
							  </div>";
					
					
				}
				echo "</ul>";
				}
			} else {
				echo "<p>In order to bookmark pages you like and refer to them later, <a href='login.php'>please sign in here.</a></p>";
			}
		?>
	</div>


	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
			<ul>
				<li><a href="index.php" id="search" data-icon="custom">Search</a></li>
				<li><a href="profile.php" id="profile" data-icon="custom">My Profile</a></li>
				<li><a href="bookmarks.php" id="bookmarks" data-icon="custom" class="ui-btn-active">Bookmarks</a></li>
				<li><a href="login.php" id="login" data-icon="custom">Login</a></li>
			</ul>
		</div>
	</div>
	
</body>
</html>