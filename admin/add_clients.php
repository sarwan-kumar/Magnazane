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
    $name = $_POST['ename'];
    $datetime = date_create()->format('Y-m-d H:i:s');

    $imgFile = $_FILES['simg']['name'];
    $tmp_dir = $_FILES['simg']['tmp_name'];
    $imgSize = $_FILES['simg']['size'];


    if (empty($imgFile)) {
        $pic = "No Image";
    } else {
        $upload_dir = 'gallery_img/'; // upload directory

        $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension

        // valid image extensions
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
        $image_id = rand(19999999999, 99999999999);
        // rename uploading image
        $pic = "gallery-" . $image_id . "." . $imgExt;

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


    $sql = "INSERT INTO `add_client`(`name`, `img`, `status`,`sqs`, `date`) 
                         VALUES ('$name','$pic','A','$sqs','$datetime')";
    if (mysqli_query($conn, $sql)) {
        $msg='1';
       // echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='add_gallery.php'; </SCRIPT>");
    } else {
        $msg='2';
       
    }
}

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
                        <li class="breadcrumb-item active" aria-current="page">Add Images</li>
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
                            <h5 class="mb-0 text-info">Add Clients Image</h5>
                        </div>
                        <hr>
                        <form name="form1" action="add_clients.php" class="row g-3" method="POST" enctype="multipart/form-data">

                            <div class="col-md-6 d-none">
                                <label for="inputLastName2" class="form-label">Name</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
                                    <input type="text" class="form-control border-start-0" id="ename" name="ename" value="<?php echo $uname_id; ?>" placeholder=" Name" required />
                                </div>
                            </div>
                               <div class="col-md-6">
                                <label for="inputLastName2" class="form-label">Sequence</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
                                    <input type="number" class="form-control border-start-0" id="sqs" name="sqs"  placeholder="Sequence" required />
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
            <h6 class="mb-0 text-uppercase">All Clients images</h6>
            <hr />
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4">
            <?php  $query = "SELECT * FROM add_client ";
            $result = $conn->query($query);
            $i = '1'; while ($firm = mysqli_fetch_array($result)) {  ?>
                <div class="col">
                    <div class="card border-success border-bottom border-3 border-0">
                        <img src="gallery_img/<?php echo $firm['img']; ?>" class="card-img-top" alt="<?php echo $firm['name']; ?>" style="height: 300px;">
                        <div class="card-body">
                            <h5 class="card-title text-success"><?php echo $i ; echo $firm['name']; ?></h5>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                            <hr>
                            <div class="d-flex align-items-center gap-2">
                               <a href="javascript:;" class="btn btn-inverse-success">Sequence  <?php echo $firm['sqs']; ?></a>
                                <a href="add_clients.php?did=<?php echo $firm['id']; ?>" class="btn btn-danger"><i class="lni lni-trash"></i></a>
                               <a href="edit_clients.php?id=<?php echo $firm['id']; ?>" class="btn btn-primary">Edit</a>
                            
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

