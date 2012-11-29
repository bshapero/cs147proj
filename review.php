<?php
	include("header.php");
	include("config.php");



	$review_id = mysql_real_escape_string($_POST["review_id"]);
	echo "<div id=num_likes >";
	$query = "SELECT * FROM Reviews WHERE review_id = '$review_id'";
	$r = mysql_query($query);
	$row = mysql_fetch_array($r);
	echo "Likes: ".$row["num_likes"];
	echo "</div>";
?>	


