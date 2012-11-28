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
	if(isset($_SESSION['id'])) {
		$email = $_SESSION['id'];
	}
	?>
</head> 

<body>
	<div data-role="page">
	<div data-role="header">
		<a href="#" data-icon="back" data-rel="back">Back</a>
		<?php
			include("top_bar.php");
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
		
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result)) {
					$review_id = $row["review_id"];
					$q1 = "SELECT * FROM Likes, Users where Users.email = '$email' AND Likes.user_id = Users.user_id AND review_id = '$review_id'";
					$r1 = mysql_query($q1);
					echo "<div class=site-review >";
					$rowCheck = mysql_num_rows($r1);
					if ($rowCheck > 0) {
					echo "<button class='unlike-review-btn' id=".$row['review_id']." >Unlike</button>";
					} else {
					echo "<button class='like-review-btn' id=".$row['review_id']." >Like</button>";
					}
					$q2 = "SELECT * FROM Users where email = '".mysql_real_escape_string($row['user_name'])."'";
					$r2 = mysql_query($q2);
					$row2 = mysql_fetch_array($r2);
					echo "<div class=reviewer id=reviewer-".$row['review_id']." >";
					if ($row2['user_picture'] != NULL) { 
						echo "<img width=128 height=128 src=profile_pics/".$row2['user_picture']." />";
					} else {
						echo "<img width=128 height=128 src=nophoto.png />";
					}
					echo $row["user_name"]."</div>";
					echo "<div class=review-time id=review-time-".$row['review_id']." >".date($row["date_created"])."</div>";
					echo "<div class=review-rating id=review-rating-".$row['review_id']." >Rating: ".$row["star_rating"]."</div>";
					echo "<div class=review-comment id=review-comment-".$row['review_id']." >Comment: ".$row["written_review"]."</div>";
					echo "<div class=review-likes id=review-likes-".$row['review_id']." >Likes: ".$row["num_likes"]."</div>";
					echo "</div><br>";
				}
			?>
		</div>
		
	
		
			<script>
			$(".like-review-btn").live("click", function(event) {
				event.preventDefault();
				var review_id = this.id;
				var email = '<?php echo $_SESSION["id"]; ?>';	
				if (!email) {
					alert("Please login");
					return;
				}
				$.post("like_review.php", { email : email, review_id : review_id }, function(data) {
					//alert(data + " liked!");
					$("button#"+review_id).removeClass("like-review-btn").addClass("unlike-review-btn");
					$("button#"+review_id).html("Unlike");
					$("button#"+review_id).button("refresh");
					$("#review-likes-"+review_id).load("review.php #num_likes", {review_id : review_id});				});
			});
			$(".unlike-review-btn").live("click", function(event) {
				event.preventDefault();
				var review_id = this.id;
				var email = '<?php echo $_SESSION["id"]; ?>';	
				$.post("like_review.php", { email : email, review_id : review_id }, function(data) {
					//alert(data + " unliked!");
					$("button#"+review_id).removeClass("unlike-review-btn").addClass("like-review-btn");
					$("button#"+review_id).html("Like");
					$("button#"+review_id).button("refresh");
					$("#review-likes-"+review_id).load("review.php #num_likes", {review_id : review_id});
					});
			});
			</script>
			
			
		<script>
			$(".add-favorite-btn").click(function(event) {
				event.preventDefault();
				event.stopPropagation();
				var user_id = '<?php echo $_SESSION["id"]; ?>';
				if (user_id) {
					var site_url = '<?php echo $_GET["site_url"]; ?>';
					$(".add-favorite").load("add_bookmark.php?email="+user_id+"&site_url="+site_url);
				} else {
					alert("Please login");
				}
			});			
		</script>
		
		<h1 class="center">Review this website</h1>
		
		<form action="add_review.php" method="post" id="add_review">
		
			<div data-role="fieldcontain">
			<input type="hidden" name="site" value='<?php echo $site_url; ?>' />
			</div>
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
	          					  	//alert(data);
	          					  	window.location.reload(true);
	          					  });	
	              });
			</script>
		
		
	</div><!-- /content -->

	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
			<ul>
				<?php
					include("bottom_bar.php");
				?>
			</ul>
		</div>
	</div> <!-- /footer -->
	</div> <!-- /page -->


</body>
</html>	