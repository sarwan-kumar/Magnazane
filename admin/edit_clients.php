<?php 
include('config.php');

include('header.php');
$msg="";

if (isset($_GET['did'])) {
    $did = $_GET['did'];
   
    $queryst = "SELECT * from add_client where id='$did'"; 
    $resultst = mysqli_query($conn, $queryst);
    $firmsst = mysqli_fetch_array($resultst);
     //get image path
    $imageUrl = 'gallery_img/'.$firmsst['img'];
   //echo $imageUrl; die;
    if(file_exists($imageUrl)){
        $msg='3';
      //delete the image
        unlink($imageUrl); 
    $sql = 'DELETE From add_client WHERE id="' . $did . '"'; 
    $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        $msg='3';
       // echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='add_gallery.php';</SCRIPT>");
    }
}
}



if (isset($_POST['submit'])) {

    $sqs = $_POST['sqs'];
    $uid= $_POST['uid'];
    $name = $_POST['ename'];
    $datetime = date_create()->format('Y-m-d H:i:s');
    
    
    $sql = 'UPDATE add_client SET sqs="'.$sqs.'" WHERE id="'.$uid.'"';
	//print($sql);
	if (mysqli_query($conn, $sql)) {
	     echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='add_clients.php'; </SCRIPT>");
    } else {
         echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='add_clients.php'; </SCRIPT>");
        
       
    }
}
    $edit_id = $_GET['id'];
 
    $query_service = mysqli_query($conn,"SELECT * from add_client where id='$edit_id'"); 
    $firm_service = mysqli_fetch_array($query_service);
 $uname_id = rand(19999999999, 99999999999);
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
                        <li class="breadcrumb-item active" aria-current="page">Edit Sequence</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                
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
                            <h5 class="mb-0 text-info">Edit Clients Sequence</h5>
                        </div>
                        <hr>
                        <form name="form1" action="edit_clients.php" class="row g-3" method="POST" enctype="multipart/form-data">
                           <input type="hidden" name="uid" value="<?php echo $firm_service['id']; ?>">
                            <div class="col-md-6">
                                 <img src="gallery_img/<?php echo $firm_service['img']; ?>" class="card-img-top" alt="<?php echo $firm_service['name']; ?>" style="height: 300px;">
                            </div>
                               <div class="col-md-6">
                                <label for="inputLastName2" class="form-label">Sequence</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
                                    <input type="number" class="form-control border-start-0" id="sqs" name="sqs" value="<?php echo $firm_service['sqs']; ?>" placeholder="Sequence" required />
                                </div>
                            </div>
                           
                            <div class="col-12">
                                <button name="submit" type="submit" id="" class="btn btn-info px-5">Edit Client</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   
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
        var ff1="Client Image Added Successful";
        msgBox_green(ff1);
       // error_staff(ff1);
       } else if (msgid=='2'){
        var ff1="Please try After Some Time";
        msgBox_yellow(ff1);
       }else if (msgid=='3'){
        var ff1="Client Image Deleted Successful";
        msgBox_yellow(ff1);
        window.location.href='add_clients.php';
       }
    });  
 </script>

