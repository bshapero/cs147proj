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
		<div class="center">
		<h1>Walkthrough</h1>
		<h1>1.</h1>
		<p>Browse different websites on the internet that have been rated by people like you</p>
		<h1>2.</h1>
		<p>Like websites that you have found so you can come back and explore them later</p>
		<h1>3.</h1>
		<p>Login to comment and rate websites yourself!</p>
		<h1>4.</h1>
		<ul>
			<li><a href="index.php"><img src="browse.gif"></img></a></li>
			<li><a href="login.php"><img src="login.gif"></img></a></li>
		</ul>
		</div>
	</div>
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
			<ul>
				<?php
					include("bottom_bar.php");
				?>
				<script>
					$('.about_btm_nav').attr('class', 'about_btm_nav ui-btn ui-btn-inline ui-btn-icon-top ui-btn-up-a ui-btn-active');
				</script>
			</ul>
		</div>
	</div>

</div>
	

</script>

</body>
</html>
