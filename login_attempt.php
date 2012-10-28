<?php
session_start();
include("config.php");

$email = mysql_real_escape_string($_POST['email']);
$password = md5(mysql_real_escape_string($_POST['password']));

if (!isset($username) || !isset($password)) {

    header("Location: ./index.php");
    
}

elseif (empty($username) || empty($password)) {
	
    header("Location: ./index.php");
    
} else {
	
    $result   = mysql_query("select * from users where email='$email' AND password='$password'");
    $rowCheck = mysql_num_rows($result);
    if ($rowCheck > 0) {
        while ($row = mysql_fetch_array($result)) {

            $_SESSION['id'] = $row['email'];
  
        }
        
        header("Location: ./index.php");
        
    } else {
        header("Location: ./index.php");
    }
}

?> 