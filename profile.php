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
		<?php
			include("top_bar.php");
		?>
	</div><!-- /header -->

	<div data-role="content">

	<div id="profile-area">
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
				echo "<button class='edit_profile' type='submit' formaction='edit_profile.php' formmethod='get' >Change Password</button>\n";
				echo "</form>\n";
				echo "<p>Email: ".$row["email"]."</p>\n";
			}
			$query = "SELECT * FROM Users, Reviews WHERE Reviews.user_name = '$user' AND Users.email = '$user'";
			$result = mysql_query($query);
			echo "<b>My Reviews: </b><br>";
			while ($row = mysql_fetch_assoc($result)) {
				$site_id = $row["site_id"];
				$q1 = "SELECT * FROM Sites WHERE site_id = '$site_id'";
				$r1 = mysql_query($q1);
				$site_data = mysql_fetch_array($r1);
				echo "<div class='my-review' >";
				echo "Review for: <a href=site.php?site_url=".$site_data["site_url"]." >".$site_data["site_url"]."</a><br>";
				echo "Posted at: ".date($row["date_created"])."<br>";
				echo "Rating: ".$row["star_rating"]."<br>";
				echo "Comment: ".$row["written_review"]."<br>";
				echo "Likes: ".$row["num_likes"]."<br>";
				echo "</div><br>";
			}
		} else {
			echo "<p>In order to manage your profile, <a href='login.php'>please sign in here.</a></p>\n";
		}
		?>
	</div>
	</div>
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
			<ul>
				<?php
					include("bottom_bar.php");
				?>
				<script>
					$('.profile_btm_nav').attr('class', 'profile_btm_nav ui-btn ui-btn-inline ui-btn-icon-top ui-btn-up-a ui-btn-active');
				</script>
			</ul>
		</div>
	</div>	
	<script>
	$(".edit_profile").click(function(event) {
		event.preventDefault();
		//event.stopPropagation();
		var email = '<?php echo $_SESSION["id"]; ?>';
		$("#profile-area").load("edit_profile.php?", { old_email:email });
	});
	
	</script>
	</div> <!-- /page -->
	
	
	

</body>
</html>