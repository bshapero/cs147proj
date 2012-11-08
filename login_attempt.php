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

    $result   = mysql_query("select * from Users where email='$email' AND pswd='$password'");
    $rowCheck = mysql_num_rows($result);
    if ($rowCheck > 0) {
        while ($row = mysql_fetch_array($result)) {

            $_SESSION['id'] = $row['email'];
  
        }
        
    header("Location: ./index.php");

        
    } else {
         header("Location: ./login_attempt_failure.php");
    }
}

?> 