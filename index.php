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
		if(isset($_SESSION['id'])) { 
			$user_email = $_SESSION['id'];
			echo "<h1>$user_email</h1>";
		} else { 
			echo "<h1>Chirp</h1>";
		}
		?>
		<!-- Ryan: If someone is logged in write "Welcome [username]" -->
	</div><!-- /header -->

	<div data-role="content">	
		<div class="center">
			<h1>SEARCH</h1>
			<p>by website</p>
			<?php
				include("search_form.php");
			?>
			<h1>OR</h1>
			<p>by category</p>
			
			<ul data-role="listview" data-inset="true" data-filter="true">
			<li>
			    <form action='site_queries.php' method='post'>
				<input type='hidden' name='search_by_category' value='News'/>
				<input type='submit' value='News'/>
				</form>
		    </li>
			<li>
				<form action='site_queries.php' method='post'>
				<input type='hidden' name='search_by_category' value='Social Media'/>
				<input type='submit' value='Social Media'/>
				</form>
			</li>
			<li>
				<form action='site_queries.php' method='post'>
				<input type='hidden' name='search_by_category' value='Health Care'/>
				<input type='submit' value='Health Care'/>
				</form>
			</li>
			<li>
				<form action='site_queries.php' method='post'>
				<input type='hidden' name='search_by_category' value='Sports'/>
				<input type='submit' value='Sports'/>
				</form>
			</li>
			<li>
				<form action='site_queries.php' method='post'>
				<input type='hidden' name='search_by_category' value='Entertainment'/>
				<input type='submit' value='Entertainment'/>
				</form>
			</li>
			<li>
				<form action='site_queries.php' method='post'>
				<input type='hidden' name='search_by_category' value='Games'/>
				<input type='submit' value='Games'/>
				</form>
			</li>
			<li>
				<form action='site_queries.php' method='post'>
				<input type='hidden' name='search_by_category' value='Electronics'/>
				<input type='submit' value='Electronics'/>
				</form>
			</li>
			</ul>
			
		</div>
	</div><!-- /content -->
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
			<ul>
				<li><a href="index.php" id="search" data-icon="custom" class="ui-btn-active">Search</a></li>
				<li></li>
				<li><a href="profile.php" id="profile" data-icon="custom">My Profile</a></li>
				<li><a href="bookmarks.php" id="bookmarks" data-icon="custom">Bookmarks</a></li>
			</ul>
		</div>
	</div>
	

</script>

</body>
</html>