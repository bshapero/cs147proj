<?php 	session_start(); ?>
<!DOCTYPE html> 
<html>

<head>
<?php
	include("header.php");
	include("config.php");
	?>
</head> 

	
<body> 

	<div data-role="header">
		<a href="#" data-icon="back" data-rel="back">Back</a>
		<h1>Chirp</h1>
			<?php
				if(isset($_SESSION['id'])) { 
					$user_email = $_SESSION['id'];
					echo "<a href=\"profile.php\" data-icon=\"gear\" class=\"ui-btn-right\">";
					echo "$user_email";
					echo "</a>";
				}
			?>
		<!-- Ryan: If someone is logged in write "Welcome [username]" -->
	</div><!-- /header -->

	<div data-role="content">
		
		<form action="add_website_attempt.php" method="post" id="add_website_form">
		<div data-role="fieldcontain">
	     <label for="foo">Website URL:</label>
	     <?php
	     $url = mysql_real_escape_string($_GET['url']);
	     echo "<input type='text' name='url' value='$url' />";
	     ?>
	    <br/>Example: http://www.google.com/
	     
		</div>
		<label>Category:</label>
	      <select name="category_dropdown" form="add_website_form">
  			<option value="News">News</option>
 			<option value="Social Media">Social Media</option>
  			<option value="Health Care">Health Care</option>
  			<option value="Sports">Sports</option>
  			<option value="Entertainment">Entertainment</option>
  			<option value="Games">Games</option>
  			<option value="Electronics">Electronics</option>
		</select>
		
		<div class="ui-block-b"><button type="submit" data-theme="a">Add Website</button></div>

		</form>
		
		 
		
	</div>

	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
			<ul>
				<li><a href="index.php" id="search" data-icon="custom">Search</a></li>
				<li><a href="profile.php" id="profile" data-icon="custom">My Profile</a></li>
				<li><a href="bookmarks.php" id="bookmarks" data-icon="custom">Bookmarks</a></li>
				<li><a href="login.php" id="login" data-icon="custom">Login</a></li>
			</ul>
		</div>
	</div>
</div>
	

</script>

</body>
</html>