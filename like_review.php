<?php

session_start();
$host = "mysql-user-master.stanford.edu";
$user = "ccs147bshapero";
$pass = "joogoyae";
$mysql_database = "c_cs147_bshapero";
$link = mysql_connect($host, $user, $pass);
if (!$link) {
    die('Not connected : ' . mysql_error());
}

// Connect to the database
$db_selected = mysql_select_db($mysql_database, $link);
if (!$db_selected) {
    die ('Can\'t use to connect to database : ' . mysql_error());
}


$email = mysql_real_escape_string($_POST["email"]);
$review_id = mysql_real_escape_string($_POST["review_id"]);
echo "email: " . $email . " review_id: " . $review_id;


$idquery = "Select user_id from Users where email='$email'";
$id = mysql_fetch_assoc(mysql_query($idquery));
$user_id = $id["user_id"];

echo "user_id: ".$user_id;


$q = "SELECT * FROM Likes, Users where Users.email = '$email' AND Likes.user_id = Users.user_id AND Likes.review_id = '$review_id'";
$r   = mysql_query($q);
$rnum  = mysql_num_rows($r);

if ($rnum == 0) mysql_query("insert into Likes values('$user_id', '$review_id')");	

?> 