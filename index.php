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
			include("top_bar.php");
		?>
	</div><!-- /header -->

	<div data-role="content">	
		<div class="center">
			<h1 class="smoosh">SEARCH</h1>
			<p class="smoosh">by website</p>
			<?php
				include("search_form.php");
			?>
			<h1 class="smoosh">OR</h1>
			<p>by category</p>
			
			<ul data-role="listview" data-inset="true" data-filter="true">
			<li><a href="site_queries.php?search_by_category=News">News</a></li>
			<li><a href="site_queries.php?search_by_category=Social Media">Social Media</a></li>
			<li><a href="site_queries.php?search_by_category=Health Care">Health Care</a></li>
			<li><a href="site_queries.php?search_by_category=Sports">Sports</a></li>
			<li><a href="site_queries.php?search_by_category=Entertainment">Entertainment</a></li>
			<li><a href="site_queries.php?search_by_category=Games">Games</a></li>
			<li><a href="site_queries.php?search_by_category=Electronics">Electronics</a></li>
			</ul>
			
		</div>
	</div><!-- /content -->
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
			<ul>
				<?php
					include("bottom_bar.php");
				?>
				<script>
					$('.search_btm_nav').attr('class', 'search_btm_nav ui-btn ui-btn-inline ui-btn-icon-top ui-btn-up-a ui-btn-active');
				</script>
			</ul>
		</div>
	</div>
	


</body>
</html>