<h1>Chirp</h1>
<?php
	if(isset($_SESSION['id'])) { 
		$user_email = $_SESSION['id'];
		$name = current(explode("@", $user_email));
		echo "$first";
		echo "<a href=\"login.php\" data-icon=\"gear\" class=\"ui-btn-right\">";
		echo "$name";
		echo "</a>";
	} else {
		echo "<a href=\"login.php\" data-icon=\"gear\" class=\"ui-btn-right\">";
		echo "Login";
		echo "</a>";
	}
?>