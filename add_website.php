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
		<h1>Add Website</h1>
		<!-- Ryan: If someone is logged in write "Welcome [username]" -->
	</div><!-- /header -->

	<div data-role="content">
		
		<form action="submit.php" method="post">
		<div data-role="fieldcontain">
	     <label for="foo">Website URL:</label>
	     <input type="text" name="site" id="site" value=""  />
		</div>
		
		<div class="ui-block-b"><button type="submit" data-theme="a">Add Website</button></div>

		</form>
		
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