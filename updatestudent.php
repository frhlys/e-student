<?php include("connection.php"); //$conn ?>
<?php
	$rec_id = $_POST['rec-id'];
	$name = $_POST['name'];
	$id = $_POST['id'];
	$program = $_POST['program'];
	$gender = $_POST['gender'];
	$about = $_POST['about'];
	
	$sql = "UPDATE student SET stu_name = '".$name."', stu_id = '$id',
	program = '".$program."', gender = '$gender', about = '".$about."'
	WHERE rec_id = '$rec_id'";
	if($conn -> query($sql) === true){
		echo "<script>alert('Your data has successfully updated!');
		window.location = 'editparent.php?id=".$id."';</script>";
	} else {
		echo "<script>alert('Failed to update your data. Please try again!');
		window.location = 'info.php';</script>";
	}
	
?>