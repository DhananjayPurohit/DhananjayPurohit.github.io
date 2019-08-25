<?php
include 'connect.php';
if ($_POST['uploadSyl'])
{
$target_dir = "uploads/PDF/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$ID = $_POST['uploadSyl'];


// Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//     if($check !== false) {
       
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
    echo $target_file;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 10000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($FileType != "pdf" ) {
    echo "Sorry, only PDF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
       
        $DocLoc=$_FILES["fileToUpload"]["name"];
        
        $sql= "SELECT ID, SubjSem, DocLoc FROM Syllabus WHERE ID = '$ID'";
        $query= $conn->query($sql);
        $row = $query->fetch_assoc();
        
        if ($row['DocLoc'])
        {
            unlink($row['DocLoc']);
        }
        $sql = "UPDATE Syllabus SET DocLoc = '$DocLoc' WHERE ID = '$ID'";

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
}
?>