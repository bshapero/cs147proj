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
			<?php
				include("top_bar.php");
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
					<?php
						include("bottom_bar.php");
					?>
				</ul>
			</div>
		</div><!-- /footer -->
	</div><!-- page -->


</body>
</html>