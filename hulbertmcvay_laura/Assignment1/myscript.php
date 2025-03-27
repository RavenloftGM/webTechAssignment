<?php
session_start();
$connection = require_once 'conn.php';
$myusername = htmlspecialchars($_POST["username"]);
$mypassword = htmlspecialchars($_POST["password"]);
$query ="SELECT * from tbl_users WHERE user_full_name = '$myusername'";
$result = mysqli_query($connection, $query);
$count = mysqli_num_rows($result);
if ($count == null) {
header ('Location: login.php'); //fail state: username does not exist,
}else{
$record = mysqli_fetch_array($result, MYSQLI_ASSOC);
$dbpassword = $record["user_pass"];
if ($mypassword == $dbpassword){
$_SESSION["logged"] = true;
$_SESSION["name"] = $record["user_full_name"];
header ('Location: index.php');
}else{
header ('Location: login.php'); //fail state: password does not match,
}//end if
}//end if
?>
