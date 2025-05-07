<?php include("connection.php"); //$conn ?>
<?php
	if (isset($_POST['fname'])) {
		$stu_id = $_GET['id'];
		$fname = $_POST['fname'];
		$fatno = $_POST['fatno'];
		$mname = $_POST['mname'];
		$motno = $_POST['motno'];
		$address = $_POST['address'];
	
	$sql = "INSERT INTO parent(stu_id,father_name,father_no,mother_name,mother_no,address)
		VALUES ('$stu_id','$fname','$fatno','$mname','$motno','$address')";
		 
            if($conn -> query($sql) === true) {
                echo "<script>alert('Well Done !'); 
				window.location='info.php'</script>";
            } else {
                echo "<script>alert('Do it Again !');</script>";
            }
	}
    
?>

<html>
    <body>
       
       
        <div align="center">
            <h1>Parent Details</h1>
           
            <form method="post" action="parent.php?id=<?php echo $_GET['id']; ?>">
                <table>
                    <tr><td>Father's name: </td><td><input type="text" name="fname"></td></tr>
                    <tr><td>Father's no: </td><td><input type="text" name="fatno"></td></tr>
                    <tr><td>Mother's name: </td><td><input type="text" name="mname"></td></tr>
                    <tr><td>Mother's no: </td><td><input type="text" name="motno"></td></tr>
                    <tr><td>Address: </td><td><textarea name="address"></textarea></td></tr>
                    <tr><td colspan="2" align="right"><input type="submit"></td></tr>
                </table>
            </form>
        </div>
    </body>
</html>