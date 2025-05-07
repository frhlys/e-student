<?php include("connection.php"); //$conn ?>
<?php
	$id = $_GET['id'];
	
	$sql = "DELETE student, parent FROM student JOIN
	parent USING (stu_id) WHERE stu_id = '$id'";
	$conn -> query($sql);
	
	header("Location: info.php");

?>