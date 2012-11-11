<?php session_start(); ?>
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
		<?php
			include("top_bar.php");
		?>
	</div><!-- /header -->



	<div data-role="content">
	<h1>Bookmarks: </h1>
		<?php 
			if(isset($_SESSION['id'])) {
				$user = $_SESSION['id'];
				$query = "SELECT site_url FROM Bookmarks, Users, Sites WHERE Users.email = '$user' AND Users.user_id = Bookmarks.user_id AND Bookmarks.site_id = Sites.site_id";
				$result = mysql_query($query);
				$rowCheck = mysql_num_rows($result);
				if ($rowCheck > 0) {
				echo "<ul>";
				while ($row = mysql_fetch_array($result)) {
				
					$url = $row['site_url'];	
					echo "<div>
								<form action='site.php' method='get'>
								<input type='hidden' name='site_url' value='$url'/>
								<input type='submit' value='$url'/>
								</form>
							  </div>";
					
					
				}
				echo "</ul>";
				}
			} else {
				echo "<p>In order to bookmark pages you like and refer to them later, <a href='login.php'>please sign in here.</a></p>";
			}
		?>
	</div>


	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
			<ul>
				<?php
					include("bottom_bar.php");
				?>
				<script>
					$('#search').attr('class', 'ui-btn-active');
				</script>
			</ul>
		</div>
	</div>
	
</body>
</html>