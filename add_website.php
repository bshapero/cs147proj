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
		<a href="index.php">Back</a>
		<h1>Add Website</h1>
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
				<li><a href="index.php" id="home" data-icon="custom">Home</a></li>
				<li></li>
				<li></li>
				<li><a href="login.php" id="login" data-icon="custom">Login</a></li>
			</ul>
		</div>
	</div>
</div>
	

</script>

</body>
</html>