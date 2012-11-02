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