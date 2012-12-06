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
			include("back_button_bar.php");
			include("top_bar.php");
		?>
	</div><!-- /header -->

	<div data-role="content">	
		<div class="center">
			<?php
				
				$search_by_website = mysql_real_escape_string($_GET['search_by_website']);
				$search_by_category = mysql_real_escape_string($_GET['search_by_category']);

			 	if (!empty($search_by_category)) {
      			
      			     echo "<h1>Results: </h1>";
      				 $result   = mysql_query("select * from Sites where category='$search_by_category' order by sum_score / num_reviews DESC");
  					 $rowCheck = mysql_num_rows($result);
  					 if ($rowCheck > 0) {
      				  while ($row = mysql_fetch_array($result)) {
						$url = $row[site_url];
						$category = $row[category];
						$avgScore = "Not Reviewed";
						if ($row[num_reviews] != 0) {
							$avg = round($row[sum_score] / $row[num_reviews], 1);
							$avgScore = $avg."/5 Stars";
						}
						echo "<div style='border-bottom:solid; border-bottom-width:1px'>
								$avgScore
								<form action='site.php' method='get'>
								<input type='hidden' name='site_url' value='$url'/>
								<input type='submit' value='$url #$category'/>
								</form>
							  </div>";
      					}    
      				}
      			
				} else  {
   					
   					echo "Can't find what you're looking for? Try <a href='add_website.php'>adding a new website here</a> :)";	
					
					$queryDelims = array(" ", "www.", "https://", "http://");
   					$modifiedQuery = str_replace($queryDelims,"",strtolower($search_by_website));
   					$modifiedQuery = $modifiedQuery;
   					
   					 echo "<h1>Search results for $modifiedQuery: </h1>";
   					 $result   = mysql_query("select * from Sites where site_url like '%$modifiedQuery%'");
   					 $rowCheck = mysql_num_rows($result);
  					 if ($rowCheck > 0) {
      				  while ($row = mysql_fetch_array($result)) {
						$url = $row[site_url];
						$category = $row[category];
						$avgScore = "Not Reviewed";
						if ($row[num_reviews] != 0) {
							$avg = round($row[sum_score] / $row[num_reviews], 1);
							$avgScore = $avg."/5 Stars";
						}
						echo "
							<div style='border-bottom:solid; border-bottom-width:1px'>
								$avgScore
								<form action='site.php' method='get'>
								<input type='hidden' name='site_url' value='$url'/>
								<input type='submit' value='$url #$category'/>
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
				<?php
					include("bottom_bar.php");
				?>
			</ul>
		</div>
	</div>
	

</script>

</body>
</html>