<?php
session_start();

$host = "mysql-user-master.stanford.edu";
$user = "ccs147bshapero";
$pass = "joogoyae";
$mysql_database = "c_cs147_bshapero";
$link = mysql_connect($host, $user, $pass);
if (!$link) {
    die('Not connected : ' . mysql_error());
}

// Connect to the database
$db_selected = mysql_select_db($mysql_database, $link);
if (!$db_selected) {
    die ('Can\'t use to connect to database : ' . mysql_error());
}


$category = $_POST['category_dropdown'];
$url = mysql_real_escape_string($_POST['url']);

if (!isset($url)) {
    header("Location: ./index.php");
}

else if (empty($url)) {
    header("Location: ./index.php");
    
} else {


    $result   = mysql_query("select * from Sites where site_url='$url'");
    $rowCheck = mysql_num_rows($result);
    if ($rowCheck == 0) {
    	
    	$q = "select MAX(site_id) as mx from Sites";
   		$id = mysql_fetch_assoc(mysql_query($q));
    	$newid = $id["mx"] + 1;
    	
    	
        mysql_query("insert into Sites values ('$newid', '$url', 0, 0, null, '$category')");
        header("Location: ./site.php?site_url=$url");
    } else {
         header("Location: ./index.php");
    }
}


?> 
