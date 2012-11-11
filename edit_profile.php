<?php 
	session_start();
	include("config.php");
	$email = mysql_real_escape_string($_POST["old_email"]);
	$query = "SELECT * FROM Users where email = '$email'";
	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
?>
	<h2>Edit Profile</h2>
	<?php
		if (isset($row["user_picture"])) {
			echo "<img src=".$row["user_picture"]." width=223 height=284 />\n";
		} else {
			echo "<img src='nophoto.png' /><br>\n";
		}
	?>
	<form action="update_profile.php" method="post" class="edit-profile">
	<input type="file" id="change-pic" name="pic" onchange="upload()" /><br><br>
	Old Password: <input type="password" name="old_password" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset" />
	New Password: <input type="password" name="new_password" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset" /><br>
	<div data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span" data-icon="null" data-iconpos="null" data-theme="c" class="ui-btn ui-shadow ui-btn-corner-all ui-submit ui-btn-up-c" aria-disabled="false"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">Save Changes</span></span><input type="submit" value="Save Password Changes" class="ui-btn-hidden" aria-disabled="false"></div><br>
	</form>