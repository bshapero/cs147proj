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
	
	<?php
		if(isset($_SESSION['id'])) { 
			$user_email = $_SESSION['id'];
			echo "<h1>$user_email :) </h1>";
		} else { 
			echo "<h1>Chirp</h1>";
		}
		?>
		
	</div><!-- /header -->

	<div data-role="content">	
		<div class="center">
			<?php
				
				$search = mysql_real_escape_string($_POST['search']);

				if (!isset($search)) {
   					header("Location: ./login_attempt_failure.php");
     
				} else {

   					 $result   = mysql_query("select * from Sites where site_url like '%$search%' order by category");
  					 $rowCheck = mysql_num_rows($result);
  					 if ($rowCheck > 0) {
      				  while ($row = mysql_fetch_array($result)) {
						$url = $row[site_url];
						$category = $row[category];
						echo "<div>
								<form action='site.php' method='get'>
								<input type='hidden' name='site_url' value='$url'/>
								<input type='submit' value='$url  #$category'/>
								</form>
							  </div>";
      				  }     
    } 
}

?>

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