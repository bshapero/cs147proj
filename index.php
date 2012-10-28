<!DOCTYPE html> 
<html>

<head>
	<title>NELP!</title> 
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="jquery.mobile-1.2.0.css" />
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="nelpstyle.css" />
	
	<link rel="apple-touch-icon" href="appicon.png" />
	<link rel="apple-touch-startup-image" href="startup.png">
	
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>

</head> 

	
<body> 
	<div data-role="header">
		<h1>NELP!</h1>
		<!-- Ryan: If someone is logged in write "Welcome [username]" -->
	</div><!-- /header -->

	<div data-role="content">	
	
		<form action="search.php" method="post">
			<label for="foo">Search:</label>
			<input type="text" name="search" id="foo">
		</form>
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