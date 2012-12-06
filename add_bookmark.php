
<?php 
//	session_start();
	include("config.php");
	$site_url = $_GET["site_url"];
	$email = mysql_real_escape_string($_GET["email"]);
	$query = "SELECT user_id, site_id from Users, Sites WHERE Sites.site_url = '$site_url' AND Users.email = '$email'";
	$result = mysql_query($query);
	$rowCheck = mysql_num_rows($result);
	while ($row = mysql_fetch_array($result)) {
		$insert = "INSERT INTO Bookmarks values (".$row["user_id"].", ".$row["site_id"].")";
		$r1 = mysql_query($insert);
		echo "<div class=center ><b>Favorited</b></div>";
	}

?>
