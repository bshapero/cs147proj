<?php 	session_start();

	include("header.php");
	include("config.php");

 ?>
<!DOCTYPE html> 
<html>
<head>
	
</head> 

	
<body> 
	<div data-role="page">
	<div data-role="header">
		<a href="#" data-icon="back" data-rel="back">Back</a>
		<h1>Chirp</h1>
			<?php
				if(isset($_SESSION['id'])) { 
					$user_email = $_SESSION['id'];
					$name = current(explode("@", $user_email));
					echo "$first";
					echo "<a href=\"profile.php\" data-icon=\"gear\" class=\"ui-btn-right\">";
					echo "$name";
					echo "</a>";
				}
			?>
	</div><!-- /header -->

	<div data-role="content">
	<h1>My Profile: </h1>
		<?php
		if(isset($_SESSION['id'])) {
			$user = $_SESSION['id'];
			$query = "SELECT * FROM Users WHERE email = '$user'";
			$result = mysql_query($query);
			while ($row = mysql_fetch_assoc($result)) {
				if (isset($row["user_picture"])) {
					echo "<img src=".$row["user_picture"]." width=223 height=284/>\n";
				} else {
					echo "<img src='nophoto.png' ><br>\n";
				}
				echo "<form action='edit_profile.php' method='get'>\n";
				echo "<button class='edit_profile' type='submit' formaction='edit_profile.php' formmethod='get' >Edit Profile </button>\n";
				echo "</form>\n";
				echo "<p>Email: ".$row["email"]."</p>\n";
			}
			$query = "SELECT written_review FROM Users, Reviews WHERE Reviews.user_name = '$user' AND Users.email = '$user'";
			$result = mysql_query($query);
			while ($row = mysql_fetch_assoc($result)) {
				echo "<p>Review: ".$row["written_review"]."</p> <br>";
			}
		} else {
			echo "<p>In order to manage your profile, <a href='login.php'>please sign in here.</a></p>\n";
		}
		?>
	</div>

	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
			<ul>
				<li><a href="index.php" id="search" data-icon="custom">Search</a></li>
				<li><a href="profile.php" id="profile" data-icon="custom" class="ui-btn-active">My Profile</a></li>
				<li><a href="bookmarks.php" id="bookmarks" data-icon="custom">Bookmarks</a></li>
				<li><a href="login.php" id="login" data-icon="custom">Login</a></li>
			</ul>
		</div>
	</div>	
	</div> <!-- /page -->

</body>
</html>