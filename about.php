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
		<h1>About Nelp</h1>
		<!-- Ryan: If someone is logged in write "Welcome [username]" -->
	</div><!-- /header -->
	
	<div data-role="content">
		<div class="center">
		<h1>1.</h1>
		<p>Browse different websites on the internet that have been rated by people like you</p>
		<h1>2.</h1>
		<p>Like websites that you have found so you can come back and explore them later</p>
		<h1>3.</h1>
		<p>Login to comment and rate websites yourself!</p>
		<h1>4.</h1>
		<ul>
			<li><a href="index.php"><img src="browse.gif"></img></a></li>
			<li>or</li>
			<li><a href="login.php"><img src="login.gif"></img></a></li>
		</ul>
		</div>
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
</div>
	

</script>

</body>
</html>