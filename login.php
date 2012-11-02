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
		<h1>Login</h1>
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
														
			<input type="submit" id = "submit1" value="Login"/>
								
		</form>	
	</div>

	<div class = "center"> or <div>
	<button>Create New Profile</button>


	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
			<ul>
				<li><a href="index.php" id="home" data-icon="custom">Home</a></li>
				<li></li>
				<li></li>
				<li><a href="login.php" id="login" data-icon="custom" class="ui-btn-active">Login</a></li>
			</ul>
		</div>
	</div>
</div>
	

</script>

</body>
</html>
