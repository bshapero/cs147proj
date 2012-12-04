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
		<?php
			include("back_button_bar.php");
			include("top_bar.php");
		?>
	</div><!-- /header -->

	<div data-role="content">	
	<h1>Oops! </h1>
	This username-password combination doesn't exist! <a href='login.php'> Please try again.</a>

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
	

</script>

</body>
</html>