<?php
Session_start();
$_SESSION["logged"] = false;
Session_destroy();
?>