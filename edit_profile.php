<?php 
	session_start();
	include("config.php");
	$email = mysql_real_escape_string($_POST["old_email"]);
	$query = "SELECT * FROM Users where email = '$email'";
	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
?>
    <script src='js/upload_script.js'></script>
    <style>
    input {
    border-radius:10px;
    -moz-border-radius:10px;
    -ms-border-radius:10px;
    -o-border-radius:10px;
    -webkit-border-radius:10px;

    border:1px solid #ccc;
    font-size:14pt;
    padding:5px 10px;
	}
	
    #fileinfo,#error,#error2,#abort,#warnsize {
	    color:#aaa;
	    display:none;
	    font-size:10pt;
	    font-style:italic;
	    margin-top:10px;
	}
	</style>
	<h2>Edit Profile</h2>
	<?php
		if (isset($row["user_picture"])) {
			echo "<img id=profile_pic src=profile_pics/".$row["user_picture"]." width=223 height=284 />\n";
		} else {
			echo "<img id=profile_pic src=nophoto.png /><br>\n";
		}
		echo "<img id=preview />";

	?>
	
	<!-- Straight copying of week 5 example -->
	<div class="container">
            
            <div class="upload_form_cont">
                <form id="upload_form" enctype="multipart/form-data" method="post" action="upload.php">
                    <div>
                        <div><label for="image_file">Choose New Profile Picture</label></div>
                        <div><input type="file" name="image_file" id="image_file" onchange="fileSelected();" /></div>
                    </div>
                    <div>
                    <input type="button" value="Save Picture Changes" class="ui-btn-inner ui-btn ui-shadow ui-btn-corner-all ui-submit ui-btn-up-c" onclick="startUploading()" />
                    </div>
                    <div id="fileinfo">
                        <div id="filename"></div>
                        <div id="filesize"></div>
                        <div id="filetype"></div>
                        <div id="filedim"></div>
                    </div>
                    <div id="error">You should select valid image files only!</div>
                    <div id="error2">An error occurred while uploading the file</div>
                    <div id="abort">The upload has been canceled by the user or the browser dropped the connection</div>
                    <div id="warnsize">Your file is very big. We can't accept it. Please select more small file</div>

                </form>

            </div>
        </div>
	<!--  End of example -->

	<form action="update_profile.php" method="post" class="edit-profile">
	<!--input type="file" id="image_file" name="image_file" onchange="fileSelected();" /><br><br-->
	Old Password: <input type="password" name="old_password" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset" />
	New Password: <input type="password" name="new_password" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset" /><br>
	<div data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span" data-icon="null" data-iconpos="null" data-theme="c" class="ui-btn ui-shadow ui-btn-corner-all ui-submit ui-btn-up-c" aria-disabled="false"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">Save Password Changes</span></span><input type="submit" value="Save Password Changes" class="ui-btn-hidden" aria-disabled="false"></div><br>
	</form>
