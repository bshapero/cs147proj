<!DOCTYPE html> 
<html>

<head>
	<title>NELP!</title> 
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="jquery.mobile-1.2.0.css" />
	<link rel="stylesheet" href="nelpstyle.css" />
	
	<!--RYAN - Change images for these two-->
	<link rel="apple-touch-icon" href="appicon.png" />
	<link rel="apple-touch-startup-image" href="startup.png">
	
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>
</head> 

<body> 

	<div data-role="header">
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
														
			<input type="submit" id = "submit" value="Login"  />
								
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
