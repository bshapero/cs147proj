<?php
	session_start();
	include("config.php");
	
	if(isset($_SESSION["id"])) {
		$email = $_SESSION["id"];		
		$site = $_POST["site"];
		$rating = $_POST["slider"];
		$comment = $_POST["comment"];
		$t = "time";
		$query = "SELECT * FROM Sites WHERE site_url = '$site'";
		$result = mysql_query($query);
		while ($row = mysql_fetch_assoc($result)) {
			$site_id = $row['site_id'];
			$query2 = "INSERT INTO Reviews values (5, '$comment', '$email', '$rating', 0, '$site_id', '$t')";
			$result2 = mysql_query($query2);
			if ($result2) {
				echo "SUCCESS";
			}
		}
	}
?>