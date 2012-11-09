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
		<h1>Chirp</h1>
			<?php
				if(isset($_SESSION['id'])) { 
					$user_email = $_SESSION['id'];
					$name = current(explode("@", $user_email));
					echo "$first";
					echo "<a href=\"profile.php\" data-icon=\"gear\" class=\"ui-btn-right\">";
					echo "$name";
					echo "</a>";
				}
			?>
	</div><!-- /header -->

	<div data-role="content">	
	
Success!!

    </div>

	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
			<ul>
				<li><a href="index.php" id="home" data-icon="custom" class="ui-btn-active">Home</a></li>
				<li></li>
				<li></li>
				<li><a href="login.php" id="login" data-icon="custom">Login</a></li>
			</ul>
		</div>
	</div>
	

</script>

</body>
</html>