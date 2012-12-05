<?php session_start(); ?>
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
		<p>Have you ever wondered what popular websites other people are using to satisfy their web surfing needs? Chirp is a web app designed to fulfill just that need. Come on in and take a look at what other people are checking out!</p>
		<h1>1.</h1>
		<p>Go to the search page and either type in a website you are interested, or search websites by category.</p>
		
		<img style="max-width:280px; border:1px solid black" src="about1.png"></img>
		
		<h1>2.</h1>
		<p>'Like' websites</p>
		<h1>3.</h1>
		<p>Comment on and rate websites yourself!</p>
		<div style="border:1px solid black">
		<img style="max-width:280px" src="about2.png"></img>
		</div>
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