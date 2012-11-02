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
		<h1>Create Profile</h1>
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