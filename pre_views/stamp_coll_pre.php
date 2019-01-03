<?php

// connect to the database and start the session
include "../includes/session.php";
include "../includes/dbh.inc.php";


$key = isset($_GET['key']) && $_GET['key'] != "" ? $_GET['key'] : false;
$name = isset($_GET['name']) && $_GET['name'] != "" ? $_GET['name'] : false;
$success = isset($_GET['success']) && $_GET['success'] != "" ? $_GET['success'] : false;

if($key && $name) {
    $_SESSION['current_album_id'] = $key;
    $_SESSION['current_album_name'] = $name;
    
}

// get albums name and id
$currentAlbumName = $_SESSION['current_album_name'];
$currentAlbumID = $_SESSION['current_album_id'];


   $stamps = [];
$result = $conn->query("SELECT * FROM `stamps` WHERE `album_id` = $currentAlbumID;");
while ($row = $result->fetch_object()) {
	$stamps[] = $row;
}




include "../views/album_stamp_collection.php";