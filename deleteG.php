<?php

         if(isset($_POST['deleteG'])) {
            include 'connect.php';
        
            $id = $_POST['deleteG'];
            
            $sql = "SELECT ImgLoc FROM GuestsOfHonour WHERE ID = $id";
        
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            
            
            $sql = "DELETE FROM GuestsOfHonour WHERE ID = $id" ;
            
            $retval = mysqli_query( $conn , $sql );
            
            $file_name=$row['ImgLoc'];
            $folder="uploads/GOHImg/";
            
            $file_name=$folder."".$file_name;
            unlink($file_name);
            
            if(! $retval ) {
               die('Could not delete data: ' . mysql_error());
            }
            
            
            
            $conn->close();
            header('location: adminpage.php');
         }
        
 ?>