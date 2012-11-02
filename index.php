<!DOCTYPE html> 
<html>

<head>
	<?php
	include("header.php");
	?>
</head> 

	
<body> 
	<div data-role="header">
		<h1>NELP!</h1>
		<!-- Ryan: If someone is logged in write "Welcome [username]" -->
	</div><!-- /header -->

	<div data-role="content">	
	
		<?php
			include("search_form.php");
		?>
		<!-- Ryan: Add css so that these lists show up as buttons with logos using good css -->
		
		<table class="home-table">
			<tr>
				<th><a href="profile.php" id="myprofile" data-icon="custom">My Profile</a></th>
				<th class="table-cell-middle"><a href="search.php" id="search" data-icon="custom">Search</a></th>
				<th><a href="review.php" id="writereview" data-icon="custom">Write Review</a></th>
			</tr>
		
			<tr>
				<td><a href="add_website.php" id="addwebsite" data-icon="custom">Add Website</a></td>
				<td class="table-cell-middle"><a href="bookmarks.php" id="bookmarks" data-icon="custom">Bookmarks</a></td>
				<td><a href="about.php" id="about" data-icon="custom">About Nelp</a></td>
			</tr>
		</table>
	</div><!-- /content -->
	
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