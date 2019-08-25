<?php

         if(isset($_POST['deleteN'])) {
            include 'connect.php';
        
            $id = $_POST['deleteN'];
            
            $sql = "DELETE FROM Updates WHERE ID = $id" ;
            
            
            $retval = mysqli_query( $conn , $sql );
            
            if(! $retval ) {
               die('Could not delete data: ' . mysql_error());
            }
            
            
            
            $conn->close();
            header('location: adminpage.php');
         }
        
 ?>