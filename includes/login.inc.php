<?php

// get values from POST
if(isset($_POST['login'])) {
    $email= $_POST['email'];
    $pwd= $_POST['pwd'];
} else {
    header("Location: ../views/login.php?message=Please submit form");
    exit();
}


// connect to the database and start the session
include "session.php";
include "dbh.inc.php";

// check if email is in user table
$result = $conn->query("SELECT `user_id`,`user_email`,`user_first` FROM `users` WHERE `user_email`='$email' AND `password`='$pwd'");


if ($result->num_rows > 0) {
    $isUser = TRUE;
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $_SESSION['user_id'] = $row["user_id"];
        $_SESSION['user_email'] = $row["user_email"];
        $_SESSION['user_first'] = $row["user_first"];  
    }
} else {
    $isUser = FALSE;
}
$conn->close();


//account dont exist
if(!$isUser) {
	header("Location: ../views/login.php?error=This account does not exist!");
    exit;
    // account exist
} else {
	header("Location: ../pre_views/album_coll_pre.php");
	exit;
}