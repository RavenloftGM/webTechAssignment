<?php
// resumes session
session_start();
$connection = require_once 'conn.php';
// takes user input & sanitises it 
$myemail = htmlspecialchars($_POST["email"]);
$mypassword = htmlspecialchars($_POST["password"]);
// finds user in database from email provided
$query ="SELECT * from tbl_users WHERE user_email = '$myemail'";
$result = mysqli_query($connection, $query);
$count = mysqli_num_rows($result);
// if no user is found, redirects to login page
if ($count == null) {
header ('Location: login.php'); //fail state: username does not exist,
}
// if the user IS found, compares password provided to password in database
else{
$record = mysqli_fetch_array($result, MYSQLI_ASSOC);
$dbpassword = $record["user_pass"];
// if successful, logs the user in and stores their name
if ($mypassword == $dbpassword){
$_SESSION["logged"] = true;
$_SESSION["user_id"] = $record["user_id"];
$_SESSION["name"] = $record["user_full_name"];
header ('Location: index.php');
}else{
// if failed, takes them back to start login
header ('Location: login.php'); 
}
}
?>
