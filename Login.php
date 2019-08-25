<?php
session_start();
$username = $_POST['username']; //Set UserName
$password = $_POST['password']; //Set Password
$msg="";

if(isset($username, $password)) {
    
    include('connect.php'); //Initiate the MySQL connection
    // To protect MySQL injection (more detail about MySQL injection)
    $myusername = stripslashes($username);
    $mypassword = stripslashes($password);
    $myusername = mysqli_real_escape_string($conn, $myusername);
    $mypassword = mysqli_real_escape_string($conn, $mypassword);
    $mypassword = sha1($mypassword);
    $sql="SELECT * FROM Login WHERE username='$myusername' and password='$mypassword'";
    $result=mysqli_query($conn, $sql);
    // Mysql_num_row is counting table row
    $count=mysqli_num_rows($result);
    
    
    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count==1){
        $_SESSION['user']= 'userfriendly';
      header("location:adminpage.php");
    }
    else {
        $msg = "Wrong Username or Password. Please retry again";
        header("location:index.php?msg=$msg");
    }
    
}
else {
    header("location:index.php?msg=Please enter some username and password");
}
mysqli_close($conn); // Closing Connection
?>

    
    