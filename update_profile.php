<?php 
	session_start();
	
?>
<div data-role="page">
<?php 
	if (!isset($_POST["email"])) {
		header("Location: ./index.php");
	}
	
	if (!isset($_SESSION['id'])) {
		header("Location: ./index.php");
	}
	include("config.php");
	$old_email = mysql_real_escape_string($_SESSION['id']);
	$new_email = mysql_real_escape_string($_POST["email"]);
	$old_password = md5(mysql_real_escape_string($_POST["old_password"]));
	$new_password = md5(mysql_real_escape_string($_POST["new_password"]));
	$new_pic = mysql_real_escape_string($_POST["pic"]);
	$query = "UPDATE Users Set Users.email = '$new_email', pswd = '$new_password' WHERE Users.email = '$old_email' AND pswd = '$old_password'";
	$result = mysql_query($query);
	if (!$result) {
		echo mysql_error();	
	}
	$_SESSION['id'] = $new_email;

	header("Location: ./profile.php");
?>

</div>