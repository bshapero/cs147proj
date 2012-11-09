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
					echo "<a href=\"profile.php\" data-icon=\"gear\" class=\"ui-btn-right\">";
					echo "$user_email";
					echo "</a>";
				}
			?>
		</div><!-- /header -->
	
		<div data-role="content">
			
			<form action="add_review.php" method="post" id="add_review">
			<div data-role="fieldcontain">
		     <label for="foo">Website URL:</label>
		     <input type="text" name="site" id="site" value=""  />
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
		</div><!-- /footer -->
	</div><!-- page -->


</body>
</html>