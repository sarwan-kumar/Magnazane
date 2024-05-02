<?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include "config.php";
    session_start();

    if($_POST['type']=="lg"){
		$email=$_POST['email'];
		$password=$_POST['password'];

		$check=mysqli_query($conn,"select * from admin where user_ID='$email' and pwd='$password'");
		if (mysqli_num_rows($check)>0)
		{
			$_SESSION['EINIX_ADMIN']=$email;
			echo json_encode(array("statusCode"=>200));
		}
		else{
			echo json_encode(array("statusCode"=>201));
		}
		mysqli_close($conn);
	}
    
    
    ?>