<?php	
	session_start();
	include("config.php");
	if(isset($_SESSION["id"])) {
		
		$email = mysql_real_escape_string($_SESSION["id"]);		
		$rating = mysql_real_escape_string($_POST["slider"]);
		$comment = mysql_real_escape_string($_POST["comment"]);
		$site = mysql_real_escape_string($_POST["site"]);
		$t = date("Y-m-d H:i:s", time());

		$q1 = "SELECT * FROM Reviews, Sites WHERE user_name = '$email' AND site_url = '$site' AND Sites.site_id = Reviews.site_id AND Reviews.user_name = '$email'";
		$r1 = mysql_query($q1);
		$rowCheck = mysql_num_rows($r1);
		if ($rowCheck > 0) {
			$review = mysql_fetch_assoc($r1);
			$oldscore = $review['star_rating'];
			$q2 = "UPDATE Reviews SET star_rating = '$rating', written_review = '$comment', date_created = '$t' WHERE user_name = '$email'";
			$q3 = "UPDATE Sites SET sum_score = sum_score - '$oldscore' + '$rating' WHERE site_url = '$site'";
			$r2 = mysql_query($q2);
			$r3 = mysql_query($q3);
			echo "Updated your review.";
		} else {
			echo 'No review before';
			$t = date("Y-m-d H:i:s", time());
			$q = "select MAX(review_id) AS max from Reviews";
	    	$id = mysql_fetch_assoc(mysql_query($q));
	    	$id1 = $id["max"] + 1;
			$query = "SELECT * FROM Sites WHERE site_url = '$site'";
			$result = mysql_query($query);
			while ($row = mysql_fetch_assoc($result)) {
				$site_id = $row['site_id'];
				$sum_score = $row['sum_score'] + $rating;
				$query2 = "INSERT INTO Reviews values ('$id1', '$comment', '$email', '$rating', 0, '$site_id', '$t')";
				$result2 = mysql_query($query2);
				$query3 = "UPDATE Sites SET sum_score = '$sum_score', num_reviews = num_reviews + 1 WHERE site_url = '$site'";
				$result3 = mysql_query($query3);
				echo "Added your review.";
			}
		}
	} else {
		echo "Please sign in";
	}
?>
