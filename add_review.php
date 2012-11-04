<?php	
	session_start();
	include("config.php");
	if(isset($_SESSION["id"])) {
		$email = mysql_real_escape_string($_SESSION["id"]);		
		$rating = mysql_real_escape_string($_POST["slider"]);
		$comment = mysql_real_escape_string($_POST["comment"]);
		$site = mysql_real_escape_string($_POST["site"]);
		$t = date("Y-m-d H:i:s", time());
		$q = "select MAX(review_id) AS max from Reviews";
    	$id = mysql_fetch_assoc(mysql_query($q));
    	echo $id["max"];
    	$id1 = $id["max"] + 1;
		$query = "SELECT * FROM Sites WHERE site_url = '$site'";
		$result = mysql_query($query);
		while ($row = mysql_fetch_assoc($result)) {
			$site_id = $row['site_id'];
			$query2 = "INSERT INTO Reviews values ('$id1', '$comment', '$email', '$rating', 0, '$site_id', '$t')";
			$result2 = mysql_query($query2);
			
		}
	} else {
		echo "Please sign in";
	}
?>
