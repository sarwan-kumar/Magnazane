<?php

include('config.php'); 

if(isset($_POST["staff"]))  
 {
	
	                              

        $output="";
		$output.='<tr>
        <td>'.$i.'</td>
        <td>
        <button type="button" class="btn btn-primary"  onclick="mdl(this.value)" value="'.$firm['id'].'" data-bs-toggle="modal" data-bs-target="#stafmodal">Edit</button>
        <button class="btn btn-danger"  onclick="dlt(this.value)" value="'.$firm['id'].'" target="_self">Delete</button>
        </td>
        <td>'.$firm['sid'].'</td>
        <td>'.$firm['pwd'].'</td>
        <td>'.$firm['name'].'</td>
        <td>'.$firm['department'].'</td>
        <td>'.$firm['phone'].'</td>
        <td>'.$firm['email'].'</td>
        <td>'.$firm['address'].'</td>
    </tr>';
     echo $output;
     $i++; } 					

 }




//update mdoal view =============>

if(isset($_POST["mld"]))  
 {
	$vid=$_POST["val1"];
    $sqlc2="SELECT * FROM einix_staff WHERE id='$vid' ";
    $resultc2 = mysqli_query($conn, $sqlc2);
    $firm2 = mysqli_fetch_array($resultc2);

        $output="";
		$output.=' <form id="update_form" action="add_staff.php" name="form1" class="row g-3" method="POST">
        <div class="col-md-6">
            <label for="inputLastName1" class="form-label">Department</label>
            <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bx bx-package"></i></span>
                <input type="text" class="form-control border-start-0" value="'.$firm2['department'].'" name="edepart1" id="edepart1" placeholder="First Name" >
            </div>
        </div>
        <input type="hidden" name="eupid" value="'.$firm2['id'].'" id="upid">
        <div class="col-md-6">
            <label for="inputLastName2" class="form-label">Name</label>
            <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bx bxs-user"></i></span>
                <input type="text" class="form-control border-start-0" value="'.$firm2['name'].'" id="ename1" name="ename1" placeholder=" Name" />
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputPhoneNo" class="form-label">Mobile Number</label>
            <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bx bx-phone" ></i></span>
                <input type="text" value="'.$firm2['phone'].'" class="form-control border-start-0" id="ephone1" name="ephone1" placeholder="Phone No" />
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputEmailAddress" class="form-label">Email Address</label>
            <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bx bx-at" ></i></span>
                <input type="text" value="'.$firm2['email'].'" class="form-control border-start-0" id="eemail1" name="eemail1" placeholder="Email Address" />
            </div>
        </div>
        <div class="col-12">
            <label for="inputEmailAddress" class="form-label">Address</label>
            <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bx bx-detail" ></i></span>
                <input type="text" value="'.$firm2['address'].'" class="form-control border-start-0" id="eaddress1" name="eaddress1" placeholder="Enter Address" />
            </div>
        </div>
        
        <div class="col-12">
            <label for="inputChoosePassword" class="form-label">Choose Password</label>
            <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bx bxs-lock-open" ></i></span>
                <input type="text" value="'.$firm2['pwd'].'" class="form-control border-start-0" name="epass1" id="epass1" placeholder="Choose Password" />
            </div>
        </div>
        <!-- <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck2">
                <label class="form-check-label" for="gridCheck2">Check me out</label>
            </div>
        </div> -->
        <div class="col-12">
            <button name="submit" type="submit" id="butupdate" class="btn btn-info px-5">Register</button>
        </div>
    </form> ';
     echo $output;
    					

 }
//delete employee========> 
if(isset($_POST["sdlt"]))  
{
    $did=$_POST["bb1"];
    $sql = 'DELETE From einix_staff WHERE id="'.$did.'"'; 
    $conn->query($sql);   
   if ($conn->query($sql) === TRUE) 
    {
      echo json_encode(array("statusCode"=>213));
      
    }else {
        echo json_encode(array("statusCode"=>214));
    }	  


}
 

  ?>