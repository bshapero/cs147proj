<?php 	session_start(); ?>
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
		<h1>My Profile</h1>
		<!-- Ryan: If someone is logged in write "Welcome [username]" -->
	</div><!-- /header -->

	<div data-role="content">
		<?php
		if(isset($_SESSION['id'])) {
			$user = $_SESSION['id'];
			$query = "SELECT * FROM Users WHERE email = '$user'";
			$result = mysql_query($query);
			while ($row = mysql_fetch_assoc($result)) {
				if (isset($row["user_picture"])) {
					echo "<img src=".$row["user_picture"]." width=223 height=284/>";
				} else {
					echo "<img src='nophoto.png' ><br>";
				}
				echo "<button class=edit_profile >Edit Profile </button>";
				echo "<p>Email: ".$row["email"]."</p>";
			}
			$query = "SELECT written_review FROM Users, Reviews WHERE Reviews.user_name = '$user' AND Users.email = '$user'";
			$result = mysql_query($query);
			while ($row = mysql_fetch_assoc($result)) {
				echo "<p>Review: ".$row["written_review"]."</p> <br>";
			}
		} else {
			echo "<p>Please sign in.</p>";
		}
		?>
	</div>

	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
			<ul>
				<li><a href="./index.php" id="home" data-icon="custom">Home</a></li>
				<li></li>
				<li></li>
				<li><a href="login.php" id="login" data-icon="custom">Login</a></li>
			</ul>
		</div>
	</div>	

</body>
</html>