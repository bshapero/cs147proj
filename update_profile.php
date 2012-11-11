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
	$email = mysql_real_escape_string($_SESSION['id']);
	$old_password = md5(mysql_real_escape_string($_POST["old_password"]));
	$new_password = md5(mysql_real_escape_string($_POST["new_password"]));
	$new_pic = mysql_real_escape_string($_POST["pic"]);
	$query = "UPDATE Users Set pswd = '$new_password' WHERE Users.email = '$email' AND pswd = '$old_password'";
	$result = mysql_query($query);
	if (!$result) {
		echo mysql_error();	
	}

	?>
<script>
window.location.href="profile.php";
</script>

</div>