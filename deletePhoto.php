<?php
include 'connect.php';
if(isset($_POST['submitDI'])){
if(!empty($_POST['check_list'])) {

foreach($_POST['check_list'] as $selected) {
$sql = "DELETE FROM PhotoGallery WHERE ID='$selected'";
$retval = mysqli_query( $conn , $sql );
            
            if(! $retval ) {
               die('Could not delete data: ' . mysqli_error($conn));
            }
}
}
}
$conn->close();
header('location: adminpage.php');
?>