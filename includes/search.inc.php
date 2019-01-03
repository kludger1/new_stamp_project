<?php

// connect to the database and start the session
include "session.php";
include "dbh.inc.php";

$userID = $_SESSION['user_id'];
$currentAlbumName = $_SESSION['current_album_name'];
$albumId = $_SESSION['current_album_id'];

if(empty($userID)) {
  header("Location: ../views/login.php?error=You need to login first");
  exit;
}

if(isset($_GET['stamp_search_btn'])) {
$stampSearch = $_GET['stamp_search'];
$stamps = [];
$result = $conn->query("SELECT * FROM `stamps` WHERE  `album_id`= $albumId AND `stamp_name` LIKE '%$stampSearch%'");
while ($row = $result->fetch_object()) {
  $stamps[] = $row;
}
$success = FALSE;
include "../views/album_stamp_collection.php";

}


if(isset($_GET['album_search_btn'])) {
$albumSearch = $_GET['album_search'];
$albums = [];
$result = $conn->query("SELECT * FROM `albums` WHERE `user_id`= $userID AND `album_name` LIKE '%$albumSearch%'");
while ($row = $result->fetch_object()) {
  $albums[] = $row;
}

$success = FALSE;
include "../views/album_collection.php";
}



