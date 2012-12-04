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