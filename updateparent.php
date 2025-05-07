<?php include("connection.php"); //$conn ?> 
<?php 
    $stu_id = $_POST['stu_id']; 
    $fname = $_POST['fname']; 
    $fatno = $_POST['fatno']; 
    $mname = $_POST['mname']; 
    $motno = $_POST['motno']; 
    $address = $_POST['address']; 
 
    $sql = "UPDATE parent SET father_name = '".$fname."', father_no = '$fatno', mother_name = '".$mname."', mother_no = '$matno', address = '".$address."' WHERE stu_id = '$stu_id'"; 
    if($conn -> query($sql) === true) { 
        echo "<script>alert('Your data has succesfully updated!'); 
        window.location = 'info.php?id=".$id."';</script>"; 
    } else { 
        echo "<script>alert('Failed to update your data. Please try again!'); 
        window.location = 'info.php';</script>"; 
    } 
?>