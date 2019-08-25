<?php
include 'connect.php';

$target_dir = "uploads/ALImg/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "webp") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
        $Name=$_POST['Name'];
        $Des=$_POST['Designation'];
        $ImgLoc=$_FILES["fileToUpload"]["name"];
        
        $sql= "SELECT MAX(ID)+1 AS NID FROM Alumni";
        $query= $conn->query($sql);
        $row = $query->fetch_assoc();
        $maxID= $row['NID'];
        $sql = "INSERT INTO Alumni (ID, Name, Designation, ImgLoc, PlaceOrder)
        VALUES ( $maxID , '$Name' , '$Des' , '$ImgLoc' , $maxID )";

        if ($conn->query($sql) === TRUE) {
        header('Location: adminpage.php#alumni');
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        unlink($target_file);
        }
        } else {
        echo "Sorry, there was an error uploading your file.";
        }
        $conn->close();
}
?>