<?php 
	session_start();
	if (!isset($_GET["site_url"])) {
		header("Location: ./index.php");
	}
?>
<!DOCTYPE html> 
<html>

<head>
	<?php
	include("header.php");
	include("config.php");
	?>
</head> 

<body>
	<div data-role="page">
	<div data-role="header">
		<a href="#" data-icon="back" data-rel="back">Back</a>
		<h1>Chirp</h1>
			<?php
				if(isset($_SESSION['id'])) { 
					$user_email = $_SESSION['id'];
					$name = current(explode("@", $user_email));
					echo "$first";
					echo "<a href=\"profile.php\" data-icon=\"gear\" class=\"ui-btn-right\">";
					echo "$name";
					echo "</a>";
				}
			?>
	</div><!-- /header -->

	<div data-role="content">
		<div class="site-url">
			<?php
					echo "<a href=".$_GET['site_url']." >";
					echo $_GET['site_url']."</a><br>";
			?>
		</div>
		<div class="avg-rating">
			<?php 
				$site_url = mysql_real_escape_string($_GET["site_url"]);
				$query = "SELECT distinct num_reviews, sum_score FROM Sites, Reviews where Sites.site_url = '$site_url' AND Reviews.site_id = Sites.site_id";
				$result = mysql_query($query);
				$rowCheck = mysql_num_rows($result);
				while ($row = mysql_fetch_array($result)) {
					$avg = $row["sum_score"] / $row["num_reviews"];
					echo "<p>Average Rating: ".$avg."/5 </p>";
				}
			?>
		</div>
		<div class="review-count">
			<?php
				$site_url = mysql_real_escape_string($_GET["site_url"]);
				$query = "SELECT num_reviews FROM Sites where site_url = '$site_url'";
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result)) {
					echo "<p>Number of Reviews: ".$row["num_reviews"]."</p>";
				}
			?>
		</div>
		<div class="add-favorite">
			<?php
				if(isset($_SESSION['id'])) {
					$site_url = mysql_real_escape_string($_GET["site_url"]);
					$email = $_SESSION['id'];	
					$query = "SELECT Bookmarks.user_id, Bookmarks.site_id from Bookmarks, Users, Sites WHERE Bookmarks.site_id = Sites.site_id AND Sites.site_url = '$site_url' AND Users.user_id = Bookmarks.user_id  AND Users.email = '$email'";
					$result = mysql_query($query);
					$rowCheck = mysql_num_rows($result);
					if ($rowCheck > 0) {
						$row = mysql_fetch_array($result);
						echo "Favorited";
					} else {
						echo "<button class='add-favorite-btn' >Add To My Favorites</button>";
					}
				}
			?>
		</div>
		<div class="site-reviews">
			<?php
				$site_url = mysql_real_escape_string($_GET["site_url"]);
				$query = "SELECT * FROM Sites, Reviews where Sites.site_url = '$site_url' AND Reviews.site_id = Sites.site_id ORDER BY date_created";
				$result = $result = mysql_query($query);
				while ($row = mysql_fetch_array($result)) {
					echo "<div class='site-review' >";
					echo "<button class='like-review-btn'>Like</button>";
					echo $row["user_name"].": <br>";
					echo date($row["date_created"])."<br>";
					echo "Rating: ".$row["star_rating"]."<br>";
					echo "Comment: ".$row["written_review"]."<br>";
					echo "Likes: ".$row["num_likes"]."<br>";
					echo "</div><br>";
				}
			?>
		</div>
		<script type="text/javascript">
			$(".add-favorite-btn").click(function(event) {
				event.preventDefault();
				event.stopPropagation();
				var user_id = '<?php echo $_SESSION["id"]; ?>';
				if (user_id) {
					var site_url = '<?php echo $_GET["site_url"]; ?>';
					$(".add-favorite").load("add_bookmark.php?email="+user_id+"&site_url="+site_url);
				} else {
					alert("Bye");
				}
			});			
		</script>
		
		<h1 class="center">Review this website</h1>
		
		<form action="add_review.php" method="post" id="add_review">
		
			<div data-role="fieldcontain">
			<label for="slider">Stars:</label>
			<input type="range" name="slider" id="slider" value="0" min="0" max="5" />
		    </div>
		    
		    <div data-role="fieldcontain">
		     <label for="foo">Comment:</label>
		     <input type="text" name="comment" id="comment" value=""  />
			</div>
			
			<div class="ui-block-b">
			<button type="submit" data-theme="a">Post Review</button>
			</div>
	
			</form>
			<div id="result"></div>

			<script type="text/javascript">
				$("#add_review").submit(function() {
	          					  event.preventDefault();
	          					  event.stopPropagation();
	          					  $.post("add_review.php", $("#add_review").serialize(),
	          					  function(data) {
	          					  	$("#result").html(data);
	          					  });	
	              });
			</script>
		
		
	</div><!-- /content -->

	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
			<ul>
				<li><a href="index.php" id="search" data-icon="custom">Search</a></li>
				<li><a href="profile.php" id="profile" data-icon="custom">My Profile</a></li>
				<li><a href="bookmarks.php" id="bookmarks" data-icon="custom">Bookmarks</a></li>
				<li><a href="login.php" id="login" data-icon="custom">Login</a></li>
			</ul>
		</div>
	</div> <!-- /footer -->
	</div> <!-- /page -->


</body>
</html>	