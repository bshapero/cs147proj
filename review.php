<!DOCTYPE html> 
<html>

<head>
	<title>NELP!</title> 
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="jquery.mobile-1.2.0.css" />

	<link rel="stylesheet" href="nelpstyle.css" />
	
	<link rel="apple-touch-icon" href="appicon.png" />
	<link rel="apple-touch-startup-image" href="startup.png">
	
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>

</head> 

	
<body> 

	<div data-role="header">
		<a href="index.php">Back</a>
		<h1>Write A Review</h1>
		<!-- Ryan: If someone is logged in write "Welcome [username]" -->
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
		
	</div>

	<script type="text/javascript">
	$("#add_review").submit(function (event) {
							event.preventDefault();
							alert("Hello world");
						});
	
	</script>


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