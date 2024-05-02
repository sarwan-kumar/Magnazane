<?php 
include('config.php');

include('header.php');
include('master.php');
$msg="";


if (isset($_POST['submit'])) {

    $aname = $_POST['aname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $ap_date = $_POST['ap_date'];
    $remark = $_POST['remark'];
     $AppointmentType = $_POST['ap_type'];
    	$img_check=$_POST['ap_doc'];
    
    $datetime = date_create()->format('Y-m-d H:i:s');
    $uid = rand(199999, 999999);
    
   
          $file_name1 = "image-".$phone."-".$datetime."-".$_FILES['ap_doc']['name'];
          $file_tmp =$_FILES['ap_doc']['tmp_name'];
	      $path1="../doc/".$file_name1;
           move_uploaded_file($file_tmp,$path1);
        
   

    $duplicate=mysqli_query($conn,"select * from users WHERE phone='$phone'");
	if (mysqli_num_rows($duplicate)>0)
	  {
	      
        $sql = "INSERT INTO `appoinment`(`name`, `phone`, `email`, `dob`, `p_date`, `remark`,`doc`,`AppointmentType`,`status`, `date`, `admin`) 
                           VALUES ('$aname','$phone','$email','$dob','$ap_date','$remark','$path1','$AppointmentType','A','$datetime','1')"; 
        
        
        if (mysqli_query($conn, $sql)) {
            AppointmentBook($aname,$phone,$ap_date);  
        $msg='1';
        // echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='add_gallery.php'; </SCRIPT>");
        } else {
        $msg='2';

        }
                

        }else{

            $query = "INSERT INTO `users`(`uid`,`name`, `phone`, `email`,`dob`, `pwd`, `address`, `status`, `date`)
                 VALUES ('$uid','$aname','$phone','$email','$dob','$phone','','A','$datetime')";
                    if (mysqli_query($conn, $query)) {

                        $query = "INSERT INTO `appoinment`(`name`, `phone`, `email`, `dob`, `p_date`, `remark`,`doc`,`AppointmentType`,`status`, `date`, `admin`) 
                        VALUES ('$aname','$phone','$email','$dob','$ap_date','$remark','$path1','$AppointmentType','A','$datetime','1')";
                        if (mysqli_query($conn, $query)) {
                           
                           AppointmentBook($aname,$phone,$ap_date);  
                            $msg='1';
                        
            
                        } 

                    } 

        }

   
}
   
//     $queryst = "SELECT * from appoinment where id='$id'"; 
//     $resultst = mysqli_query($conn, $queryst);
//     $firmsst = mysqli_fetch_array($resultst);

//    $pp= $firmsst['p_date'];

//    $datetime = new DateTime($pp);
//    $start_date1 = $datetime->format('Y-m-d');
?>
<!--plugins-->
<link rel="stylesheet" href="assets/plugins/notifications/css/lobibox.min.css" />
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Add Appointment</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <!-- <li class="breadcrumb-item active" aria-current="page">Add News</li> -->
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <!--<div class="btn-group">-->
                <!--    <button type="button" class="btn btn-primary">Settings</button>-->
                <!--    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>-->
                <!--    </button>-->
                <!--    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item" href="javascript:;">Action</a>-->
                <!--        <a class="dropdown-item" href="javascript:;">Another action</a>-->
                <!--        <a class="dropdown-item" href="javascript:;">Something else here</a>-->
                <!--        <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
        <!--end breadcrumb-->
        <!--end row-->
        <div class="row">
            <div class="col-xl-9 mx-auto">

                <h6 class="mb-0 text-uppercase"></h6>
                <hr />
                <div class="card border-top border-0 border-4 border-info">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                            </div>
                            <h5 class="mb-0 text-info">Add Appointment</h5>
                        </div>
                        <hr>
                        <form name="form1" class="row g-3" method="POST" enctype="multipart/form-data">
                        <div class="col-md-6">
                                <label for="inputLastName2" class="form-label">Appointment For</label>
                                <div class="input-group">
                                    <select name="ap_type" class="form-control" id="type" class="fselect">
                                  <option value="">Appointment For</option>
                              <option value="Speech Therapy For Child">Speech Therapy For Child</option>
                              <option value="Speech Therapy For Adults">Speech Therapy For Adults </option>
                              <option value="Hearing Testing">Hearing Testing</option>
                              <option value="Hearing Aids">Hearing Aids</option>
                              <option value="Yoga Classes">Yoga Classes</option>
                             
                            </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputLastName2" class="form-label">Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="aname" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputLastName2" class="form-label">DOB Date</label>
                                <div class="input-group"> 
                                    <input type="date" class="form-control" id="ename" name="dob" placeholder="Enter DOB" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputLastName2" class="form-label">Phone</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputLastName2" class="form-label">Email</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="email" placeholder="Enter Email" required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputLastName2" class="form-label">Appointment Date & Time</label>
                                <div class="input-group"> 
                                    <input type="datetime-local" class="form-control" id="ename" name="ap_date" placeholder="Enter Date" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputLastName2" class="form-label">Image OR PDF</label>
                                <div class="input-group"> 
                                    <input type="file" class="form-control" id="ename" name="ap_doc" placeholder="Enter Date"  />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="inputLastName2" class="form-label">Remark</label>
                                <div class="input-group"> 
                                <textarea class="form-control" id="remark" name="remark" placeholder="...remark"></textarea>
                                   
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <button name="submit" type="submit" id="" class="btn btn-info px-5">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
       
    </div>
</div>



<?php

include('footer.php'); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!--notification js -->
    <script src="assets/plugins/notifications/js/lobibox.min.js"></script>
	<script src="assets/plugins/notifications/js/notifications.min.js"></script>
	<script src="assets/plugins/notifications/js/notification-custom-script.js"></script>
 <script>
    $(document).ready(function() {
       var msgid='<?php echo $msg; ?>';
       if (msgid=='1'){
        var ff1="Appointment Added Successful";
        msgBox_green(ff1);
        window.location.href='home.php';
       // error_staff(ff1);
       } else if (msgid=='2'){
        var ff1="Please try After Some Time";
        msgBox_yellow(ff1);
        window.location.href='home.php';
       }else if (msgid=='3'){
        var ff1="News Image Deleted Successful";
        msgBox_yellow(ff1);
       
       }
    });  
 </script>

