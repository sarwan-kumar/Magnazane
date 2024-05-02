<?php

include("admin/config.php");

  if(isset($_POST['submit']))
  {
    //Escape All SQL Strings
    $name = $_POST['txtname'];
	$email =$_POST['txtemail'];  
	$subject = $_POST['txtsubject'];
	$phone = $_POST['txtphone'];
	$comment = $_POST['txtmessage'];
	$date = date_create()->format('d-m-Y');
		
	
        $sql = "INSERT INTO `query`(`name`, `phone`, `email`,`subject`, `msg`, `date`)
		                	VALUES ('$name','$phone','$email','$subject','$comment','$date')";  
			if ($conn->query($sql) === TRUE) 
			{
			    echo "<script>alert('Your inquiry Successful sent')</script>";
			      echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='index.php';</SCRIPT>");
                   
			} 
			else 
			{
				$msg="0";
			}
	
	    
	}

?>