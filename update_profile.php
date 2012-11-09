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
	$query = "UPDATE Users Set Users.email = '$new_email' WHERE Users.email = '$old_email'";
	$result = mysql_query($query);
	$_SESSION['id'] = $new_email;

	header("Location: ./profile.php");
?>

</div>