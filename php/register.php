<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $db = 'VRCTC';
    
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $usermail=mysqli_real_escape_string($conn,$_POST['usermail']);
    $userpass=mysqli_real_escape_string($conn,$_POST['userpass']);
    //$userpass=md5($_POST['userpass']);

    if(!$_POST['userData']){
        echo "All Fields are Required";
    }else{
        $sql = "INSERT into users(username, usermail, userpass) VALUES('$username','$usermail','$userpass')";
	if(mysqli_query($conn,$sql)){
		echo "All Data Stored to DataBase";
        header("location: ../index.html");
	}else{
		echo "Failed to Store";
	}
}
?>