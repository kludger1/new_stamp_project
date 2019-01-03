<?php

// get values from POST
if(isset($_POST['add_album_btn'])) {
   $albumName = $_POST['album_name'];
   $albumDescr = $_POST['album_description']; 
}

// connect to the database and start the session
include "session.php";
include "dbh.inc.php";

$userID = $_SESSION['user_id'];

// is name in album table with that current users id
$result = $conn->query("SELECT * FROM `albums` WHERE `user_id`= $userID AND `album_name` = '$albumName'");
$isAlbum = $result->num_rows > 0;

// if it is redirect with error=You already have an album with this name
if($isAlbum) {
	header("Location: ../views/add_album.php?error=You already have an album with this name");
	exit;
}

// if not add it
$conn->query("INSERT INTO albums (`user_id`,`album_name`,`album_description`)
VALUES ($userID, '$albumName', '$albumDescr')");

//send back with success message

header('Location: ../pre_views/album_coll_pre.php?success=Album was added successfully!');