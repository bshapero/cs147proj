<?php 
	session_start();
	//include("header.php");
	include("config.php");
?>

	<h2>Edit Profile</h2>
	<form action="update_profile.php" method="post" class="edit-profile">
	Email: <input type="text" name="email" value="" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset"><br>
	<div data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span" data-icon="null" data-iconpos="null" data-theme="c" class="ui-btn ui-shadow ui-btn-corner-all ui-submit ui-btn-up-c" aria-disabled="false"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">Save Changes</span></span><input type="submit" value="Save Changes" class="ui-btn-hidden" aria-disabled="false"></div><br>
	</form>