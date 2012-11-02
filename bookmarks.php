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
		<a href="index.php">Back</a>
		<h1>Bookmarks</h1>
		<!-- Ryan: If someone is logged in write "Welcome [username]" -->
	</div><!-- /header -->


	<div data-role="content">
		<?php 
			if(isset($_SESSION['id'])) {
				$user = $_SESSION['id'];
				$query = "SELECT site_url FROM Bookmarks, Users, Sites WHERE Users.email = '$user' AND Users.user_id = Bookmarks.user_id AND Bookmarks.site_id = Sites.site_id";
				$result = mysql_query($query);
				echo "<ul>";
				while ($row = mysql_fetch_assoc($result)) {
					echo "<li><a href=".$row['site_url']." >";
					echo $row['site_url']."</a></li><br>";
				}
				echo "</ul>";
			} else {
				echo "<p>Please sign in.</p>";
			}
		?>
	</div>


	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
			<ul>
				<li><a href="index.php" id="home" data-icon="custom">Home</a></li>
				<li></li>
				<li></li>
				<li><a href="login.php" id="login" data-icon="custom">Login</a></li>
			</ul>
		</div>
	</div>
	
</body>
</html>