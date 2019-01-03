<?php

// get values from POST
if(isset($_POST['sign_up'])) {
 $email= $_POST['email'];
$first= $_POST['first'];
$last= $_POST['last'];
$pwd= $_POST['pwd'];   
} else {
    header("Location: ../views/signup.php?error=Please submit form");
    exit();
}


// connect to the database and start the session
include "session.php";
include "dbh.inc.php";


// check if email is in user table
$result = $conn->query("SELECT `user_email` FROM `users` WHERE `user_email`='$email'");
$isUser = $result->num_rows > 0;

// if true error alredy signed up
if($isUser) {
	header("Location: ../views/signup.php?error=This person already signed up!");
	exit;
}


// add it to the database
$conn->query("
INSERT INTO users (`user_email`, `user_first`, `user_last`, `password`)
VALUES ('$email', '$first', '$last', '$pwd')");

// redirect to login
header("Location: ../views/login.php?success=Successful Login");
