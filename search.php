<!DOCTYPE html> 
<html>

<head>
	<title>NELP!</title> 
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="jquery.mobile-1.2.0.css" />

	<link rel="stylesheet" href="style.css" />
	
	//RYAN - Change images for these two
	<link rel="apple-touch-icon" href="appicon.png" />
	<link rel="apple-touch-startup-image" href="startup.png">
	
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>

</head> 

	
<body> 

	<div data-role="header">
		<a href="index.php">Back</a>
		<h1>Search</h1>
		<!-- Ryan: If someone is logged in write "Welcome [username]" -->
	</div><!-- /header -->
	
	<div data-role="content">
		
		<ul data-role="listview" data-inset="true" data-filter="true">
			<li><a href="#">News</a></li>
			<li><a href="#">Social Media</a></li>
			<li><a href="#">Health Care</a></li>
			<li><a href="#">Sports</a></li>
			<li><a href="#">Entertainment</a></li>
			<li><a href="#">Games</a></li>
			<li><a href="#">Electronics</a></li>
		</ul>
		
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