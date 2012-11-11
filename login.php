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
		<?php
			include("top_bar.php");
		?>
	</div><!-- /header -->


	<div class="form">
		<form action="login_attempt.php" method="post" id="login">
							
			<h2 class="smoosh"><span>Login</span></h2>
								
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
				<?php
					include("bottom_bar.php");
				?>
			</ul>
		</div>
	</div>
</div>
	

</script>

</body>
</html>
