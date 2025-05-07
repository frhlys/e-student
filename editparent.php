<?php include("connection.php"); //$conn ?>
<?php
   
    $id = $_GET['id'];

    $sql = "SELECT * FROM parent WHERE stu_id = '$id'";
    $query = $conn -> query($sql);
    $row = $query -> fetch_assoc();
?>
<html>
    <body>
       
       
        <div align="center">
            <h1>Edit Parent</h1>
           
            <form method="post" action="updateparent.php">
            <table>
                <tr><td>Father's name: </td><td><input type="text" name="fname" value="<?php echo $row['father_name']; ?>"></td></tr>
                    <tr><td>Father's no: </td><td><input type="text" name="fatno" value="<?php echo $row['father_no']; ?>"></td></tr>
                    <tr><td>Mother's name: </td><td><input type="text" name="mname" value="<?php echo $row['mother_name']; ?>"></td></tr>
                    <tr><td>Mother's no: </td><td><input type="text" name="motno" value="<?php echo $row['mother_no']; ?>"></td></tr>
                    <tr><td>Address: </td><td><textarea name="address"><?php echo $row['address']; ?>"</textarea></td></tr>
                <tr><td colspan="2" align="right"><input type="submit"></td></tr>
               
                <input type="hidden" name="stu_id" value="<?php echo $id; ?>">
            </table>
            </form>
        </div>
    </body>
</html>