<?php 	session_start(); ?>
<!DOCTYPE html> 
<html>

<head>
	<?php
	include("header.php");
	?>
</head> 

	
<body> 
	<style type="text/css">
		#popupPanel-popup {
	    right: 0 !important;
	    left: auto !important;
		}
		#popupPanel {
		    
		    border: 1px solid #000;
		    border-right: none;
		    background: rgba(0,0,0,.9);
		    margin: -1px 0;
		}
		#helper {
			position:absolute;
			color:#fff;
			top:70px;
			left:20px;
		}
		#popupPanel .ui-btn {
		    margin: 2em 15px;
		}
	</style>
	<div data-role="header">
		<?php
			include("top_bar.php");
		?>
	</div><!-- /header -->

	<div data-role="content">	
		<div class="center">
			<h1 class="smoosh">SEARCH</h1>
			<p class="smoosh">by website</p>
			<?php
				include("search_form.php");
			?>
			<h1 class="smoosh">OR</h1>
			<p>by category</p>
			
			<ul data-role="listview" data-inset="true" data-filter="true">
			<li><a href="site_queries.php?search_by_category=News">News</a></li>
			<li><a href="site_queries.php?search_by_category=Social Media">Social Media</a></li>
			<li><a href="site_queries.php?search_by_category=Health Care">Health Care</a></li>
			<li><a href="site_queries.php?search_by_category=Sports">Sports</a></li>
			<li><a href="site_queries.php?search_by_category=Entertainment">Entertainment</a></li>
			<li><a href="site_queries.php?search_by_category=Games">Games</a></li>
			<li><a href="site_queries.php?search_by_category=Electronics">Electronics</a></li>
			</ul>
			
		</div>
		<script type="text/javascript">	
		
		$(document).unbind('pageshow');
		$(document).bind('pageshow', function(event){ 
			$("#popupPanel").popup({history: false});
			
			$( "#popupPanel" ).on({
		    popupbeforeposition: function() {
		        var h = $( window ).height();
		        var w = $( window ).width();
		
		        $( "#popupPanel" ).css( "height", 3 * h / 4 );
		        $( "#popupPanel" ).css( "width", w );
		        
		    }
			});
			$("#popupPanel").popup("open");
		});
		</script> 
	</div><!-- /content -->
	<div data-role="popup" id="popupPanel" data-corners="false" data-theme="none" data-shadow="false" data-tolerance="0,0">
		<div class="right">
		<a href="#" data-rel="back">Close</a>
		</div>
		<div class="center" id="helper">
		<p>Welcome to Chirp!</p>
		<p>New User?</p>
		<p>Click the about page to get started</p>
		<img src="dwnarrow.png" style="right:0"/>
		</div>
	</div>
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
			<ul>
				<?php
					include("bottom_bar.php");
				?>
				<script>
					$('.search_btm_nav').attr('class', 'search_btm_nav ui-btn ui-btn-inline ui-btn-icon-top ui-btn-up-a ui-btn-active');
				</script>
			</ul>
		</div>
	</div>
	


</body>
</html>
