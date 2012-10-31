<?php
session_start();
include("config.php");

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
        
    header("Location: ./login_attempt_success.php");

        
    } else {
         header("Location: ./login_attempt_failure.php");
    }
}

?> 