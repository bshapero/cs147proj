<?php
session_start();
?>
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
	
	<?php
		if(isset($_SESSION['id'])) { 
			include("logout_form.php");
		} else {
			include("login_form.php");
		}
	?>
	
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
