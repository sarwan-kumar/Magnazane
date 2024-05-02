<?php 
include('config.php');

include('header.php');
$msg="";

if (isset($_GET['did'])) {
    $did = $_GET['did'];
   
    $queryst = "SELECT * from add_service_img where id='$did'"; 
    $resultst = mysqli_query($conn, $queryst);
    $firmsst = mysqli_fetch_array($resultst);
     //get image path
    $imageUrl = 'service_img/'.$firmsst['img'];
   //echo $imageUrl; die;
    if(file_exists($imageUrl)){
        $msg='3';
      //delete the image
        unlink($imageUrl); 
    $sql = 'DELETE From add_service_img WHERE id="' . $did . '"'; 
    $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        $msg='3';
        echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='add_service_image.php?sid';</SCRIPT>");
    }
}
}



if (isset($_POST['submit'])) {


    $name = $_POST['ename'];
    $uid = $_POST['sidd'];
    $datetime = date_create()->format('Y-m-d H:i:s');

    $imgFile = $_FILES['simg']['name'];
    $tmp_dir = $_FILES['simg']['tmp_name'];
    $imgSize = $_FILES['simg']['size'];


    if (empty($imgFile)) {
        $pic = "No Image";
    } else {
        $upload_dir = 'service_img/'; // upload directory

        $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension

        // valid image extensions
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
        $image_id = rand(19999999999, 99999999999);
        // rename uploading image
        $pic = "service1-" . $image_id . "." . $imgExt;

        // allow valid image file formats
        if (in_array($imgExt, $valid_extensions)) {
            // Check file size '3MB'
            if ($imgSize < 3000000) {
                move_uploaded_file($tmp_dir, $upload_dir . $pic);
            } else {
              
                $errMSG = "Sorry, your file is too large.";
                
            }
        } else {
           
            $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
           
        }
    }


    $sql = "INSERT INTO `add_service_img`(`sid`,`name`, `img`, `status`, `date`) 
                         VALUES ('$uid','$sid','$pic','A','$datetime')";
    if (mysqli_query($conn, $sql)) {
        $msg='1';
        echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='add_service_image.php?sid=$uid'; </SCRIPT>");
    } else {
        $msg='2';
       
    }
}

    $uname_id = rand(19999999999, 99999999999);
    $uidd=$_GET['sid'];
    $query_service = mysqli_query($conn,"SELECT * from tbl_services where id='$uidd'"); 
    $firm_service = mysqli_fetch_array($query_service);
?>
<!--plugins-->
<link rel="stylesheet" href="assets/plugins/notifications/css/lobibox.min.css" />
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Service Images</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $firm_service['services_name']; ?></li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    
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
                            <h5 class="mb-0 text-info">Add Service Image</h5>
                        </div>
                        <hr>
                        <form name="form1" action="add_service_image.php" class="row g-3" method="POST" enctype="multipart/form-data">
                              <input type="hidden" name="sidd" value="<?php echo $uidd; ?>">
                            <div class="col-md-6">
                                <label for="inputLastName2" class="form-label">Name</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
                                    <input type="text" class="form-control border-start-0" id="ename" name="ename" value="<?php echo $uname_id; ?>" placeholder=" Name" required />
                                </div>
                            </div>
                             
                            <div class="col-12">
                                <label for="inputEmailAddress" class="form-label">Image</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bx-detail'></i></span>
                                    <input type="file" class="form-control border-start-0" id="slider-img" id="simg" name="simg" required />
                                </div>
                            </div>
                            <div class="col-12">
                                <button name="submit" type="submit" id="" class="btn btn-info px-5">Add Gallery</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="row">
            <h6 class="mb-0 text-uppercase">All Service images</h6>
            <hr />
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4">
            <?php  $query = "SELECT * FROM add_service_img where sid='$uidd'";
            $result = $conn->query($query);
            $i = '1'; while ($firm = mysqli_fetch_array($result)) {  ?>
                <div class="col">
                    <div class="card border-success border-bottom border-3 border-0">
                        <img src="service_img/<?php echo $firm['img']; ?>" class="card-img-top" alt="<?php echo $firm['name']; ?>">
                        <div class="card-body">
                            <h5 class="card-title text-success"><?php echo $i ; echo $firm['name']; ?></h5>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                            <hr>
                            <div class="d-flex align-items-center gap-2">
                                <!-- <a href="javascript:;" class="btn btn-inverse-success"><i class="bx bx-star"></i>Button</a> -->
                                <a href="add_service_image.php?did=<?php echo $firm['id']; ?>" class="btn btn-danger"><i class="lni lni-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </div>  <?php $i++;  } ?>
					
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
        var ff1="Service Image Added Successful";
        msgBox_green(ff1);
       // error_staff(ff1);
       } else if (msgid=='2'){
        var ff1="Please try After Some Time";
        msgBox_yellow(ff1);
       }else if (msgid=='3'){
        var ff1="Service Image Deleted Successful";
        msgBox_yellow(ff1);
        window.location.href='add_service_image.php?sid'+;
       }
    });  
 </script>

