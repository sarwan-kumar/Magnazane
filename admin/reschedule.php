<?php 
include('config.php');

include('header.php');
include('master.php');
$msg="";


if (isset($_POST['submit'])) {


    $ap_date = $_POST['ap_date'];
    $aname = $_POST['name'];
     $phone = $_POST['phone'];

    // $datet = new DateTime($ap_date);
    // $start = $datet->format('d-m-Y');
    $uid = $_POST['uid'];
    $datetime = date_create()->format('Y-m-d H:i:s');

    $sql = "UPDATE `appoinment` SET p_date='$ap_date',status='A' WHERE id='$uid'";
           
           
                       
    if (mysqli_query($conn, $sql)) {
         AppointmentBook($aname,$phone,$ap_date);  
        $msg='1';
      // echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='add_gallery.php'; </SCRIPT>");
    } else {
        $msg='2';
       
    }
}
    $id = $_GET['id'];
    $queryst = "SELECT * from appoinment where id='$id'"; 
    $resultst = mysqli_query($conn, $queryst);
    $firmsst = mysqli_fetch_array($resultst);

   $pp= $firmsst['p_date'];

   $datetime = new DateTime($pp);
   $start_date1 = $datetime->format('Y-m-d');
?>
<!--plugins-->
<link rel="stylesheet" href="assets/plugins/notifications/css/lobibox.min.css" />
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Forms</div>
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
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Settings</button>
                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item" href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
                    </div>
                </div>
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
                            <h5 class="mb-0 text-info">Re-Schedule</h5>
                        </div>
                        <hr>
                        <form name="form1" class="row g-3" method="POST" enctype="multipart/form-data">
                         <input type="hidden" name="uid" value="<?php echo $firmsst['id']; ?>">
                          <input type="hidden" name="phone" value="<?php echo $firmsst['phone']; ?>">
                           <input type="hidden" name="name" value="<?php echo $firmsst['name']; ?>">
                            <div class="col-md-6">
                                <label for="inputLastName2" class="form-label">Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control"  value="<?php echo $firmsst['name']; ?>" placeholder="Name"  readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputLastName2" class="form-label">DOB Date</label>
                                <div class="input-group"> 
                                    <input type="date" class="form-control" id="ename" value="<?php echo $firmsst['dob']; ?>" placeholder="Enter Date"  readonly/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputLastName2" class="form-label">Phone</label>
                                <div class="input-group">
                                    <input type="text" class="form-control "  value="<?php echo $firmsst['phone']; ?>" placeholder="Name" readonly />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputLastName2" class="form-label">Email</label>
                                <div class="input-group">
                                    <input type="text" class="form-control"  value="<?php echo $firmsst['email']; ?>" placeholder="Enter Email" readonly />
                                </div>
                            </div>
                             <div class="col-md-6">
                                <label for="inputLastName2" class="form-label">Remark</label>
                                <div class="input-group">
                                    <input type="text" class="form-control"  value="<?php echo $firmsst['remark']; ?>" placeholder="Enter Email" readonly />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputLastName2" class="form-label">Appointment Date Time</label>
                                <div class="input-group"> 
                                    <input type="datetime-local" class="form-control" id="ename" name="ap_date" value="<?php echo $firmsst['p_date']; ?>" placeholder="Enter Date" required />
                                </div>
                            </div>
                            <!--<div class="col-md-6">-->
                            <!--    <label for="inputLastName2" class="form-label">Time</label>-->
                            <!--    <div class="input-group"> -->
                            <!--        <input type="time" class="form-control" id="ename" name="ap_time" value="<?php echo $firmsst['p_time']; ?>" placeholder="Enter Date" required />-->
                            <!--    </div>-->
                            <!--</div>-->
                            
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
        var ff1="Schedule Update Successful";
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

