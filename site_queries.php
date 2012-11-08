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
		<a href="profile.php" data-icon="gear" class="ui-btn-right">
			<?php
				if(isset($_SESSION['id'])) { 
					$user_email = $_SESSION['id'];
					echo "$user_email";
				}
			?>
		</a>
	</div><!-- /header -->

	<div data-role="content">	
		<div class="center">
			<?php
				
				$search_by_website = mysql_real_escape_string($_POST['search_by_website']);
				$search_by_category = mysql_real_escape_string($_GET['search_by_category']);

			 	if (!empty($search_by_category)) {
      			
      			     echo "<h1>Results: </h1>";
      				 $result   = mysql_query("select * from Sites where category='$search_by_category' order by site_url");
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
      			
				} else  {
   					
   					 $result2   = mysql_query("select * from Sites where site_url='$search_by_website'");
  					 $rowCheck2 = mysql_num_rows($result2);
  					 if ($rowCheck2 == 0 && !empty($search_by_website)) {
  					 echo "No exact match...Would you like to <a href='add_website.php?url=$search_by_website'>add this website here: \"$search_by_website\"?</a>";	
  					 }
   					
   					
   					 echo "<h1>Results: </h1>";
   					 $result   = mysql_query("select * from Sites where site_url like '%$search_by_website%' order by category, site_url");
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
				<li><a href="index.php" id="search" data-icon="custom">Search</a></li>
				<li><a href="profile.php" id="profile" data-icon="custom">My Profile</a></li>
				<li><a href="bookmarks.php" id="bookmarks" data-icon="custom">Bookmarks</a></li>
				<li><a href="login.php" id="login" data-icon="custom" >Login</a></li>
			</ul>
		</div>
	</div>
	

</script>

</body>
</html>