<html>
	<body align="center">
		
		<img scr="upload/<?php echo $_GET['id']; ?>.jpg">
		
		<form action="upload.php" method="post" enctype="multipart/form-data">
			Select image to upload:
			<input type="file" name="fileToUpload" id="fileToUpload">
			<input type="hidden" name="stu_id" value="<php echo $_GET['id']; ?>">
			<input type="submit" value="Upload Image" name="submit">
		</form>
		
	</body>
</html>