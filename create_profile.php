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
	</div>

	<div class="form">
		<form action="create_profile_attempt" method="post" id="login">
							
			<h2><span>Create Profile</span></h2>
								
			<p>
			<label>Set Email</label>
			<input type="text" id="email" name="email" />
			</p>
									
			<p>
			<label>Set Password</label>
			<input type="password" id="password" name="password" />
			</p>
														
			<input type="submit" id = "submit" value="Here We Go!"/>
								
		</form>	
	</div>
	

	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
			<ul>
				<li><a href="index.php" id="search" data-icon="custom">Search</a></li>
				<li><a href="profile.php" id="profile" data-icon="custom">My Profile</a></li>
				<li><a href="bookmarks.php" id="bookmarks" data-icon="custom">Bookmarks</a></li>
				<li><a href="login.php" id="login" data-icon="custom" >Login</a></li>
			</ul>
		</div>
	</div>
</div>
	

</script>

</body>
</html>