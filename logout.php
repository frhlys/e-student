<?php
    session_start(); //initialize the session
	session_unset(); //unset all of the session variables
	session_destroy(); //finally, destroy the session
	header("location:login.php");
?>