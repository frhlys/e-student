<?php 
     include("connection.php");
	 
	 if(isset($_POST['username'])){
		 //find username and password from database
		 $sql = "SELECT * FROM login WHERE username
		 = '".$_POST['username']."' AND password
		 = '".$_POST['password']."'";
		 $query = $conn -> query($sql);
		 $row = $query -> fetch_assoc();
		 $num = $query -> num_rows;
		 
		 //check if username and password are correct
		 if($num == 1){
			 $_SESSION ['userID'] = $row['username'];
			 $_SESSION ['userLevel'] = $row['level'];
			 $_SESSION ['username'] = $row['name'];
			 
			 if($row['level'] == "admin"){
				 header("Location: index.php");
			 } else{
				 header("Location: info.php");
			 }
		 } else {
			 echo "<script>alert('You have entered a 
			 wrong username or password');
			 window.location='login.php';</script>";
		 }
	 }
?>
<html>
    <body>
	    <div align="center" style="margin-top:18%">
		  <fieldset style="width:100px" align="left">
		    <legend>Log In Page</legend>
			
			<form method="post" action="login.php">
			   <table align = "center">
			      <tr><td>Username: </td><td><input type="text" name="username" required></td></tr>
				  <tr><td>Password: </td><td><input type="password" name="password" required></td></tr>
				  <tr><td colspan="2" align="right"><input type="submit"></td></tr>
			   </table>
			</form>
		  </fieldset>
		</div>
    </body>
</html>