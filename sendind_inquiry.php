<?php

include("admin/config.php");

  if(isset($_POST['submit']))
  {
    //Escape All SQL Strings
    $name = $_POST['txtname'];
    $sid = $_POST['serviceid'];
	$email =$_POST['txtemail'];  
	$subject = $_POST['txtsubject'];
	$phone = $_POST['txtphone'];
	$address = $_POST['txtaddress'];
	$comment = $_POST['txtmessage'];
	$remark = $_POST['txtremark'];
//	$date = date_create()->format('Y-m-d H:is');
		
	
        $sql = "INSERT INTO `query`(`service`, `name`, `phone`, `email`,`subject`, `msg`,`remark`,`address`)
		                      VALUES ('$sid','$name','$phone','$email','$subject','$comment','$remark','$address')";  
			if ($conn->query($sql) === TRUE){
			      echo "<script>alert('Your inquiry Successful sent')</script>";
			      echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='index.php';</SCRIPT>");
                   
			}else{
			     echo "<script>alert('Server Error! Please try after some time')</script>";
				 echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='index.php';</SCRIPT>");
                  
				$msg="0";
			}
	
	    
	}

?>