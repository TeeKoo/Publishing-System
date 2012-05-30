<?php 
//simple logout script that redirects the user back to mainlogin.php
session_start();
session_destroy();
header('location: mainlogin.php');
?>