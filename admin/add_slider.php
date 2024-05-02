<?php 
include('config.php');

include('header.php');
$msg="";

if (isset($_GET['did'])) {
    $did = $_GET['did'];

    $queryst = "SELECT * from slider where id='$did'"; 
    $resultst = mysqli_query($conn, $queryst);
    $firmsst = mysqli_fetch_array($resultst);
     //get image path
    $imageUrl = 'slider_img/'.$firmsst['img'];
   //echo $imageUrl; die;
    if(file_exists($imageUrl)){
        $msg='3';
      //delete the image
        unlink($imageUrl); 
   echo $sql = 'DELETE From slider WHERE id="' . $did . '"'; 
    $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        $msg='3';
       // echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='add_slider.php';</SCRIPT>");
    }
}
}



if (isset($_POST['submit'])) {


    $name = $_POST['ename'];
    $datetime = date_create()->format('Y-m-d H:i:s');

    $imgFile = $_FILES['simg']['name'];
    $tmp_dir = $_FILES['simg']['tmp_name'];
    $imgSize = $_FILES['simg']['size'];


    if (empty($imgFile)) {
        $pic = "No Image";
    } else {
        $upload_dir = 'slider_img/'; // upload directory

        $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension

        // valid image extensions
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
        $image_id = rand(19999999999, 99999999999);
        // rename uploading image
        $pic = "slider-" . $image_id . "." . $imgExt;

        // allow valid image file formats
        if (in_array($imgExt, $valid_extensions)) {
            // Check file size '3MB'
            if ($imgSize < 3000000) {
                move_uploaded_file($tmp_dir, $upload_dir . $pic);
            } else {
              
                $errMSG = "Sorry, your file is too large.";
                echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='add_slider.php'; </SCRIPT>");
            }
        } else {
           
            $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='add_slider.php'; </SCRIPT>");
        }
    }


    $sql = "INSERT INTO `slider`(`name`, `img`, `status`, `date`) 
                         VALUES ('$name','$pic','A','$datetime')";
    if (mysqli_query($conn, $sql)) {
        $msg='1';
       // echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='add_slider.php'; </SCRIPT>");
    } else {
        $msg='2';
       
    }
}


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
                        <li class="breadcrumb-item active" aria-current="page">Add Slider</li>
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
                            <h5 class="mb-0 text-info">Add Slider Image</h5>
                        </div>
                        <hr>
                        <form name="form1" action="add_slider.php" class="row g-3" method="POST" enctype="multipart/form-data">

                            <div class="col-md-6">
                                <label for="inputLastName2" class="form-label">Name</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
                                    <input type="text" class="form-control border-start-0" id="ename" name="ename" placeholder=" Name" required />
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputEmailAddress" class="form-label">Image</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bx-detail'></i></span>
                                    <input type="file" class="form-control border-start-0" id="slider-img" id="simg" name="simg" required />
                                </div>
                            </div>
                            <div class="col-12">
                                <button name="submit" type="submit" id="" class="btn btn-info px-5">Add slider</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="row">
            <h6 class="mb-0 text-uppercase">All Slider images</h6>
            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sr. No</th>
                                    <th>Action</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $query = "SELECT * FROM slider ";
                                $result = $conn->query($query);
                                $i = '1';
                                while ($firm = mysqli_fetch_array($result)) {  ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td> <a class="btn btn-danger" href="add_slider.php?did=<?php echo $firm['id']; ?>" target="_self">Delete</a> </td>
                                        <td><?php echo $firm['name']; ?></td>
                                        <td><img src="slider_img/<?php echo $firm['img']; ?>" style="witdh:200px;height:200px;"> </td>

                                    </tr>
                                <?php $i++;
                                } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sr. No</th>
                                    <th>Action</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                </tr>
                            </tfoot>
                        </table>
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
        var ff1="Slider Image Added Successful";
        msgBox_green(ff1);
       // error_staff(ff1);
       } else if (msgid=='2'){
        var ff1="Please try After Some Time";
        msgBox_yellow(ff1);
       }else if (msgid=='3'){
        var ff1="Slider Image Deleted Successful";
        msgBox_yellow(ff1);
        window.location.href='add_slider.php';
       }
    });  
 </script>

