<?php
// resumes session, destroys session, & redirects to the homepage
session_start();
session_destroy(); 
header("Location: index.php"); 
exit();
?>