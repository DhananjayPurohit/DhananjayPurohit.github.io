<?php
include 'connect.php';

if(isset($_POST['saveN']))
{
    $Notifi =  $_POST['Notifications'];


$sql = "INSERT INTO Updates (Notifications,Events)
VALUES ( '$Notifi' , NULL )";

mysqli_query($conn,$sql);
$conn->close();
header('location: adminpage.php');
}

if(isset($_POST['saveE']))
{
    
$Events =  $_POST['Events'];

$sql = "INSERT INTO Updates (Events, Notifications )
VALUES ( '$Events', NULL )";

mysqli_query($conn,$sql);
$conn->close();
header('location: adminpage.php');
}


?>






