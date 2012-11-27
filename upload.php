<?php
	session_start();
	include("config.php");
	$email = mysql_real_escape_string($_POST["old_email"]);
	$query = "SELECT * FROM Users where email = '$email'";
	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
	
function bytesToSize1024($bytes, $precision = 2) {
    $unit = array('B','KB','MB');
    return @round($bytes / pow(1024, ($i = floor(log($bytes, 1024)))), $precision).' '.$unit[$i];
}

$sFileName = $_FILES['image_file']['name'];
$sFileType = $_FILES['image_file']['type'];
$sFileSize = bytesToSize1024($_FILES['image_file']['size'], 1);
$picName = $row['user_id'];


if (move_uploaded_file($_FILES['image_file']['tmp_name'], "profile_pics/'$picName'")) {
	

}
echo <<<EOF
<p>Your file: {$sFileName} has been successsfully received.</p>
<p>Type: {$sFileType}</p>
<p>Size: {$sFileSize}</p>
EOF;
?>