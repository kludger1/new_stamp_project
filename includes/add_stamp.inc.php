<?php

// get values from POST
if(isset($_POST['add_stamp_btn'])) {
    $stampName = $_POST['stamp_name'];
    $stampDescr = $_POST['stamp_description']; 
 }
 
 // connect to the database and start the session
 include "session.php";
 include "dbh.inc.php";
 
 $userID = $_SESSION['user_id'];
 $currentAlbumID = $_SESSION['current_album_id'];

 if(empty($userID)) {
	header("Location: ../views/login.php?error=You need to login first");
	exit;
}

 // upload and save the image
 $file = $_FILES['stamp_img']['tmp_name'];
 $allowed = array("image/jpeg", "image/gif", "image/png");
 if (! $allowed) die("This type of pic is not allowed");
 if ( ! isset($file)) die("Please select a stamp");
 else move_uploaded_file($file, "../stampsPics/$stampName.jpg");


// add it to the database
$conn->query("INSERT INTO stamps (`album_id`,`stamp_name`,`stamp_description`)
VALUES ($currentAlbumID, '$stampName', '$stampDescr');");


 
header('Location: ../pre_views/stamp_coll_pre.php?success=stamp added');