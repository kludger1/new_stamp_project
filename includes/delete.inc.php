<?php
 // connect to the database and start the session
 include "session.php";
 include "dbh.inc.php";
 
 $userID = $_SESSION['user_id'];
 $stampId = isset($_GET['stampId']) && $_GET['stampId'] != "" ? $_GET['stampId'] : false;
 $albumId = isset($_GET['albumId']) && $_GET['albumId'] != "" ? $_GET['albumId'] : false;

 
 if(empty($userID)) {
     header("Location: ../views/login.php?error=You need to login first");
     exit;
}

include "../functions/functions.php";

if($stampId) {
    $header = "stamp_coll_pre.php?success=stamp deleted successfully";
    $sql = "DELETE FROM `stamps` WHERE `stamps`.`stamp_id` = $stampId";
    delete($conn,$sql,$header);
}


if($albumId) {
    $header = "album_coll_pre.php?success=stamp deleted successfully";
    $sql = "DELETE FROM `albums` WHERE `albums`.`album_id` =$albumId";
    delete($conn,$sql,$header);
}
