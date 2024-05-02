<?php 

include "admin/config.php";

        function AppointmentBook($aname,$phone,$ap_date){  
            
            $datet = new DateTime($ap_date);
          $ap_date = $datet->format('d-m-Y');
		  $ptime = $datet->format('H:i');
       $msg="Thank You Dear $aname Your Appointment is booked on $ap_date at $ptime. Thank you. Team New Life Rehabilitation";
       // $msg="YOUR OTP FOR Appointment Book is $uid. Thank you. Team New Life Rehabilitation";
        
		
		$to = $email;
	    $subject = 'Forgot Password ';
	    $from = 'info@grapxcode.com';
	    $headers  = 'MIME-Version: 1.0' . "\r\n";

		$headers .='Content-type: text/html; charset=utf-8' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: '.$from."\r\n".
			'Reply-To: '.$from."\r\n" .
			'X-Mailer: PHP/' . phpversion();
			 $message=$msg;
		
		
		//$api_key = '562F5F19331AE8';
        //$contacts =$phone;
        //$from = 'NEWREH';
        //$sms_text = urlencode($msg);

        //$api_url = "http://sms.erbansal.com/app/smsapi/index.php?key=".$api_key."&campaign=0&routeid=13&type=text&contacts=".$contacts."&senderid=".$from."&msg=".$sms_text."&template_id=1207165952619833985";
         $response = file_get_contents( $api_url);
            //Submit to server
       
        }  



//<===========================Add Start==============================================>
    function AppointmentBook5($appid){  
            
                 $sql2 = "SELECT * FROM appoinment WHERE id='$appid'"; 
                 $result2 = $conn->query($sql2);
                 $firmsst2 = mysqli_fetch_array($result2);
                 $pphone=$firmsst2['phone'];
                 $pname=$firmsst2['name'];
			     $pdate=$firmsst2['p_date'];
			     $datet = new DateTime($pdate);
                 $ap_date = $datet->format('d-m-Y');
			     $ptime = $datet->format('H:i');
			     $msg="Thank You Dear $pname Your Appointment is booked on $ap_date at $ptime. Thank you. Team New Life Rehabilitation";
     
			    // $msg= "Thank You Dear $pname We Received your request for Book an Appointment on $ap_date at $ptime. Thank you. Team New Life Rehabilitation";
			    $api_key = '562F5F19331AE8';
                $contacts =$pphone;
                $from = 'NEWREH';
                $sms_text = urlencode($msg);
               
              $api_url = "http://sms.erbansal.com/app/smsapi/index.php?key=".$api_key."&campaign=0&routeid=13&type=text&contacts=".$contacts."&senderid=".$from."&msg=".$sms_text."&template_id=1207165952666241594";
              $response = file_get_contents($api_url);
             
            //Submit to server
       
        }  


?>