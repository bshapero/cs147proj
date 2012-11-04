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

    $q = "select MAX(user_id) from Users";
    $id = (mysql_query($q));
    $id1 = $id + 1;
    $result = mysql_query("insert into Users values('$id1', '$email', '$password', null, null);");
    
    $_SESSION['id'] = $email;
    header("Location: ./login_attempt_success.php");

}

?> 