<?php	
	session_start();
	include("config.php");
	echo "<div>hello world</div>";
	if(isset($_SESSION["id"])) {
		$email = mysql_real_escape_string($_SESSION["id"]);		
		$rating = mysql_real_escape_string($_POST["slider"]);
		$comment = mysql_real_escape_string($_POST["comment"]);
		$site = mysql_real_escape_string($_POST["site"]);
		$t = time();
		$query = "SELECT * FROM Sites WHERE site_url = '$site'";
		$result = mysql_query($query);
		while ($row = mysql_fetch_assoc($result)) {
			echo "'$row'<br>";
			$site_id = $row['site_id'];
			$query2 = "INSERT INTO Reviews values (5, '$comment', '$email', '$rating', 0, '$site_id', '$t')";
			$result2 = mysql_query($query2);
			if ($result2) {
				echo "SUCCESS";
			} else {
				echo "\nFAILURE";
			}
		}
		echo "<br>tada";
	} else {
		echo "Please sign in";
	}
?>
