<?php
// resumes session, destroys session, & redirects to the homepage
session_start();
$_SESSION["logged"] = false;
session_destroy(); 
header("Location: index.php"); 
exit();
?>