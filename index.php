<?php include("connection.php"); //$conn ?>
<?php
    if(isset($_POST['id'])) {
        $name = $_POST['name'];
        $id = $_POST['id'];    
        $program = $_POST['program'];    
        $gender = $_POST['gender'];
        $about = $_POST['about'];
       
        //check for duplicate id
        $sqlid = "SELECT * FROM student WHERE stu_id = '$id'";
        $queryid = $conn -> query($sqlid);
        $numid = $queryid -> num_rows;
       
        if($numid == 0) {
            $sql = "INSERT INTO student (stu_name, stu_id, program, gender, about) VALUES ('$name', '$id', '$program', '$gender', '$about')";
            if($conn -> query($sql) === true) {
                echo "<script>alert('Well Done !'); window.location='parent.php?id=".$id."'</script>";
            } else {
                echo "<script>alert('Do it Again !');</script>";
            }
        } else { echo "<script>alert('This student has already been registered!');</script>"; }
    }
?>

<html>
<head>
 <!-- Bootstrap CSS-->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all">
 <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css&quot; integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
</head>
    <body>
   
       
        <div align="center">
            <div><h1>Please fill in details</h1></div>
           
            <form method="post" action="index.php" onsubmit="return validate()">
                <table cellpadding="10">
                    <tr><td>Name: </td><td>
       
                    <input type="text" name="name" class="form-control" required></td></tr>
                   
                    <tr><td>ID: </td><td><input type="text" name="id" class="form-control" required></td></tr>
                    <tr><td>Program: </td><td><select name="program" class="form-control">
                        <option value="CS110">CS110</option>
                        <option value="BM110">BM110</option>
                        <option value="AM110">AM110</option>
                    </select></td></tr>
                    <tr><td>Gender: </td><td><input type="radio" name="gender" value="male"> Male <input type="radio" name="gender" value="female"> Female</td></tr>
                    <tr><td>About: </td><td><textarea name="about" class="form-control" required></textarea></td></tr>
                    <tr><td colspan="2" align="right"><input type="submit" class="btn btn-success btn-sm"></td></tr>
                </table>
            </form>
        </div>
       
        <script>
            function validate() {
                var name = document.getElementsByName("name")[0].value;
               
                if(isNaN(name) == false) {
                    alert("This field does not accept non alphabetic character!");
                    return false;
                }
            }
        </script>
    </body>
</html>
