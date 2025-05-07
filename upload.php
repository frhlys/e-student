<?php
    $target_file = basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $directory = "upload/" . $_POST['stu_id'] . "." . $imageFileType;
    $uploadOk = 1;
   
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg") {
        echo "Sorry, only JPG files are allowed.";
        $uploadOk = 0;
    }
   
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $directory)) {
            echo "<script>alert('Your file has successfully been uploaded.'); window.location='info.php';</script>";
        } else {
            echo "<script>alert('Sorry, there was an error uploading your file.'); window.location='info.php';</script>";
        }
    }
?>