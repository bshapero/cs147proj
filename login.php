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
		<a href="index.php">Back</a>
		<h1>Chirp</h1>
		<!-- Ryan: If someone is logged in write "Welcome [username]" -->
	</div><!-- /header -->


	<div class="form">
		<form action="login_attempt.php" method="post" id="login">
							
			<h2><span>Login</span></h2>
								
			<p>
			<label>Username</label>
			<input type="text" id="email" name="email" />
			</p>
									
			<p>
			<label>Password</label>
			<input type="password" id="password" name="password" />
			</p>
														
			<input type="submit" id = "submit" value="Login"/>
								
		</form>	
	</div>
	
	
	<div class = "center"> or </div>
	
	
	<div class="form">
		<form action="create_profile.php" method="post" id="login2">
																		
			<input type="submit" id = "submit2" value="Create New Profile"/>
								
		</form>	
	</div>

	<div class = "center"> or </div>

	<div class="form">
		<form action="logout.php" method="post" id="login2">
																		
			<input type="submit" id = "submit2" value="Logout"/>
								
		</form>	
	</div>

	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
			<ul>
				<li><a href="index.php" id="search" data-icon="custom" >Search</a></li>
				<li><a href="profile.php" id="profile" data-icon="custom">My Profile</a></li>
				<li><a href="bookmarks.php" id="bookmarks" data-icon="custom">Bookmarks</a></li>
				<li><a href="login.php" id="login" data-icon="custom" class="ui-btn-active">Login</a></li>
			</ul>
		</div>
	</div>
</div>
	

</script>

</body>
</html>
