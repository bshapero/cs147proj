<!DOCTYPE html> 
<html>

<head>
<?php
	include("header.php");
?>
</head> 

	
<body> 

	<div data-role="header">
		<h1>Chirp</h1>
	</div><!-- /header -->
	
	<div data-role="content">
		<ul>
			<li><a href="index.php"><img src="browse.gif"></img></a></li>
			<li><a href="login.php"><img src="login.gif"></img></a></li>
			<li><a href="about.php"><img src="new_user.gif"></img></a></li>
		</ul>
		
	</div>
	
	
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

</body>
</html>