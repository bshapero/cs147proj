<?php

session_start();
include("config.php");
if (!isset($_SESSION['id'])) {
	header("Location: login.php");	
}
$email = mysql_real_escape_string($_POST["email"]);
$review_id = mysql_real_escape_string($_POST["review_id"]);
echo "email: " . $email . " review_id: " . $review_id."\n";


$idquery = "Select user_id from Users where email='$email'";
$id = mysql_fetch_assoc(mysql_query($idquery));
$user_id = $id["user_id"];

echo "user_id: ".$user_id;


$q = "SELECT * FROM Likes, Users where Users.email = '$email' AND Likes.user_id = Users.user_id AND Likes.review_id = '$review_id'";
$r   = mysql_query($q);
$rnum  = mysql_num_rows($r);

if ($rnum == 0) {
	mysql_query("insert into Likes values('$user_id', '$review_id')");	
	echo "insert success\n";
	$q2 = "UPDATE Reviews Set Reviews.num_likes = Reviews.num_likes + 1 where review_id = '$review_id'";
	$r2 = mysql_query($q2);
	if (!$r2) {
		echo mysql_error();	
	}
	echo "update success\n";
} else {
	mysql_query("delete from Likes where user_id = '$user_id' AND review_id = '$review_id'");
	$q3 = "UPDATE Reviews Set Reviews.num_likes = Reviews.num_likes - 1 where review_id = '$review_id'";
	$r3 = mysql_query($q3);
	if (!$r3) {
		echo mysql_error();	
	}

}
?> 