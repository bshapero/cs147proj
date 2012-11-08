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

$email = mysql_real_escape_string($_POST['email']);
$password = md5(mysql_real_escape_string($_POST['password']));



if (!isset($email) || !isset($password)) {
    header("Location: ./login_attempt_failure.php");
}

else if (empty($email) || empty($password)) {
    header("Location: ./login_attempt_failure.php");
    
} else {

    $q = "select MAX(user_id) as max from Users";
    $id = mysql_fetch_assoc(mysql_query($q));
    $id1 = $id["max"] + 1;
    $result = mysql_query("insert into Users values('$id1', '$email', '$password', null, null);");
    
    $_SESSION['id'] = $email;
    header("Location: ./login_attempt_success.php");

}

?> 