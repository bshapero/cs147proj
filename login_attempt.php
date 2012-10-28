<?php
session_start();
include("config.php");

$email = mysql_real_escape_string($_POST['email']);
$password = md5(mysql_real_escape_string($_POST['password']));

if (!isset($username) || !isset($password)) {

    header("Location: login_attempt_fail1.html");
    
}

elseif (empty($username) || empty($password)) {
	
    header("Location: login_attempt_fail2.html");
    
} else {
	
    $result   = mysql_query("select * from users where email='$email' AND password='$password'");
    $rowCheck = mysql_num_rows($result);
    if ($rowCheck > 0) {
        while ($row = mysql_fetch_array($result)) {

            $_SESSION['id'] = $row['email'];
  
        }
        
        header("Location: login_attempt_success.html");
        
    } else {
        header("Location: login_attempt_fail3.html");
    }
}

?> 