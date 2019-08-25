<?php


if(isset($_POST['submitImage']))
{
    
    include 'connect.php';
    $Event=$_POST['Event'];
    $Date=$_POST['Date'];
    
	for($i=0;$i<count($_FILES["uploadFile"]["name"]);$i++)
	{
		$uploadfile=$_FILES["uploadFile"]["tmp_name"][$i];
		$folder="uploads/PhotoGallery/";

		move_uploaded_file($_FILES["uploadFile"]["tmp_name"][$i], "$folder".$_FILES["uploadFile"]["name"][$i]);
		
		$ImgLoc= $_FILES["uploadFile"]["name"][$i];
        $sql = "INSERT INTO PhotoGallery ( Event, DateOfEvent, ImgLoc)
        VALUES ( '$Event' , '$Date' , '$ImgLoc' )";
        mysqli_query($conn, $sql);
        echo mysqli_error($conn); 
        

	}
        
        
        $conn->close();
        header('Location: adminpage.php');
	
	exit();
}


?>