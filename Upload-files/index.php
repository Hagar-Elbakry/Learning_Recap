<?php
$dir = "Uploads/";
$fileName = $dir . basename($_FILES["FileToUpload"]["name"]);
$fileType = strtolower(pathinfo($fileName,PATHINFO_EXTENSION));
$uploadOK = 1;

// Check if file is image or not
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["FileToUpload"]["tmp_name"]);
    if($check==false) {
        echo "File is not an image.<br>";
        $uploadOK = 0;
    } else {
        echo "File is an image - " . $check["mime"] . ".<br>";

        // Check if file already exists
        if(file_exists($fileName)) {
            echo "Sorry, file already exists.<br>";
            $uploadOK = 0;
        }
        
        // Check file size
        if($_FILES["FileToUpload"]["size"]>500000) {
            echo "Sorry, your file is too large.<br>";
            $uploadOK = 0;
        }

        // Check file format
        if($fileType!="jpg" && $fileType!="png" && $fileType!="jpeg" && $fileType!="gif") {
            echo "Sorry, only JPG, PNG, JPEG, GIF files are allowed.<br>";
            $uploadOK = 0;
        }
    }

    if($uploadOK) {

        // If everthing ok, try to upload file
        if(move_uploaded_file($_FILES["FileToUpload"]["tmp_name"],$fileName)) {
            echo "The file " . htmlspecialchars(basename($_FILES["FileToUpload"]["name"])) . " has been uploaded.<br>";
        } else {
            echo "There was an error uploading your file.<br>";
        }
    } else {
        echo "Sorry, your file was not uploaded.<br>";
    }

}