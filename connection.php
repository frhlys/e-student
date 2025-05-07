<?php
	$servername="localhost";
	$username="root";
	$password="";
	$database="estudent";
	
	//create connection
	$conn= new mysqli($servername, $username, $password, $database);
	
	//check connection
	if($conn->connect_error){
		die("Connection failed: ". $conn->connect_error);
	}
	
	//start session
	session_start();
?>
	