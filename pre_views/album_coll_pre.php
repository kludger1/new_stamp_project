<?php
// connect to the database and start the session
include "../includes/session.php";
include "../includes/dbh.inc.php";

// get users name from the session
$firstName = $_SESSION['user_first'];
$userID = $_SESSION['user_id'];

// else redirect to login
if(empty($firstName)) {
	header("Location: ../views/login.php?error=You need to login first");
	exit;
}

// get the albums
$albums = [];
$result = $conn->query("SELECT * FROM `albums` WHERE `user_id` = $userID");
while ($row = $result->fetch_object()) {
	$albums[] = $row;
}


// print_r($albums);

//include the view
include "../views/album_collection.php";
