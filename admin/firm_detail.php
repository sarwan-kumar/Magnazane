 <?php
    include('config.php');


    $msg = "";

    if (isset($_GET['did'])) {
        $did = $_GET['did'];

        $queryst = "SELECT * from firm_detail where id='$did'";
        $resultst = mysqli_query($conn, $queryst);
        $firmsst = mysqli_fetch_array($resultst);
        //get image path
        $imageUrl = 'gallery_img/' . $firmsst['flogo'];
        //echo $imageUrl; die;
        //if(file_exists($imageUrl)){unlink($imageUrl);}
        $msg = '3';


        $sql = "UPDATE firm_detail SET flogo='' WHERE id='$did'";
        $conn->query($sql);
        if ($conn->query($sql) === TRUE) {
            $msg = '3';
            // echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='add_gallery.php';</SCRIPT>");
        }
    }



    if (isset($_POST['submit'])) {


        $fname = $_POST['fname'];
        $fphone = $_POST['fphone'];
        $femail = $_POST['femail'];
        $faddress = $_POST['faddress'];
        $about = $_POST['about'];
        $privacy = $_POST['privacy'];
        $terms = $_POST['fterms'];
        $facebook = $_POST['facebook'];
        $instagram = $_POST['instagram'];
        $youtube = $_POST['youtube'];

        $datetime = date_create()->format('Y-m-d H:i:s');
        $img2 = $_POST['img2'];
        if ($img2 == '0') {
            $pic = $_POST['img1'];
        } else {
            $imgFile = $_FILES['flogo']['name'];
            $tmp_dir = $_FILES['flogo']['tmp_name'];
            $imgSize = $_FILES['flogo']['size'];


            if (empty($imgFile)) {
                $pic = "No Image";
            } else {
                $upload_dir = 'logo/'; // upload directory

                $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension

                // valid image extensions
                $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
                $image_id = "logo";
                
                // rename uploading image
                $pic = "logo-" . $image_id . "." . $imgExt;

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
        }

        $sql = "UPDATE firm_detail SET fname=?, flogo=?, fphone=?, femail=?, facebook=?, instagram=?, youtube=?, faddress=?, about=?, terms=?, privacy=?, date=? WHERE id=1";

        // Prepare the statement
        $stmt = mysqli_prepare($conn, $sql);

        // Bind parameters
        mysqli_stmt_bind_param($stmt, "ssssssssssss", $fname, $pic, $fphone, $femail, $facebook, $instagram, $youtube, $faddress, $about, $terms, $privacy, $datetime);

     
        

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            $msg = '1';
            echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='firm_detail.php'; </SCRIPT>");
        } else {
            $msg = '2';
        }
    }
    include('header.php');

    $query = "SELECT * FROM firm_detail WHERE id='1'";
    $result = mysqli_query($conn, $query);
    $firm = mysqli_fetch_array($result);

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
                 <div class="card border-top border-0 border-4 border-primary">
                     <div class="card-body p-5">
                         <div class="card-title d-flex align-items-center">
                             <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                             </div>
                             <h5 class="mb-0 text-primary">Firm Detail</h5>
                         </div>
                         <hr>
                         <form name="form1" action="firm_detail.php" class="row g-3" method="POST" enctype="multipart/form-data">
                             <div class="col-md-6">
                                 <label for="inputFirstName" class="form-label">Firm Name</label>
                                 <input type="text" name="fname" value="<?php echo $firm['fname']; ?>" class="form-control" id="inputFirstName">
                             </div>
                             <div class="col-md-6">
                                 <label for="inputLastName" class="form-label">Firm Phone</label>
                                 <input type="number" name="fphone" value="<?php echo $firm['fphone']; ?>" class="form-control" id="inputLastName">
                             </div>
                             <div class="col-md-6">
                                 <label for="inputEmail" class="form-label">Firm Email</label>
                                 <input type="email" name="femail" value="<?php echo $firm['femail']; ?>" class="form-control" id="inputEmail">
                             </div>
                             <div class="col-md-6">
                                 <label for="inputCity" class="form-label">Firm logo</label>
                                 <?php if ($firm['flogo'] != "") { ?>
                                     <img src="logo/<?php echo $firm['flogo']; ?>" width="100px" />
                                     <a href="firm_detail.php?did=<?php echo  $firm['id']; ?>" class="btn btn-danger"><i class="lni lni-trash"></i></a>
                                     <input type="hidden" name="img1" class="form-control" value="<?php echo $firm['flogo']; ?>" />
                                     <input type="hidden" name="img2" class="form-control" value="0" />
                                 <?php } else { ?>
                                     <input type="file" name="flogo" value="<?php echo $firm['flogo']; ?>" class="form-control" id="inputCity">
                                     <input type="hidden" name="img2" class="form-control" value="1" />
                                 <?php } ?>
                             </div>
                             <div class="col-md-6">
                                 <label for="inputFirstName" class="form-label">Facebook Link</label>
                                 <input type="text" name="facebook" value="<?php echo $firm['facebook']; ?>" class="form-control" id="inputFirstName">
                             </div>
                             <div class="col-md-6">
                                 <label for="inputFirstName" class="form-label">Instagram Link</label>
                                 <input type="text" name="instagram" value="<?php echo $firm['instagram']; ?>" class="form-control" id="inputFirstName">
                             </div>

                             <div class="col-md-6">
                                 <label for="inputFirstName" class="form-label">YouTube Link</label>
                                 <input type="text" name="youtube" value="<?php echo $firm['youtube']; ?>" class="form-control" id="inputFirstName">
                             </div>
                             <div class="col-12">
                                 <label for="inputAddress" class="form-label">Firm Address</label>
                                 <textarea class="form-control" name="faddress" id="inputAddress" placeholder="Address..." rows="3"><?php echo $firm['faddress']; ?></textarea>
                             </div>


                             <div class="col-12">
                                 <label for="inputAddress2" class="form-label">About Firm</label>
                                 <textarea class="form-control" id="mytextarea" name="about" placeholder="About ..." rows="3"><?php echo $firm['about']; ?>
                                
                                </textarea>
                             </div>
                             <div class="col-12" style="display:none;">
                                 <label for="inputAddress2" class="form-label">Terms & Condition</label>
                                 <textarea class="form-control" id="terms" name="fterms" placeholder="Terms ..." rows="3"><?php echo $firm['terms']; ?></textarea>
                             </div>
                             <div class="col-12" style="display:none;">
                                 <label for="inputAddress2" class="form-label">Privacy Policy</label>
                                 <textarea class="form-control" id="privacy" name="privacy" placeholder="Privacy ..." rows="3"><?php echo $firm['privacy']; ?></textarea>
                             </div>

                             <div class="col-12">
                                 <button type="submit" name="submit" class="btn btn-primary px-5">Update Detail</button>
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

 <script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js' referrerpolicy="origin">
 </script>
 <script>
   tinymce.init({
  selector: '#mytextarea',
  height: 500,
  plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste imagetools"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
  imagetools_cors_hosts: ['www.tinymce.com', 'codepen.io'],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tiny.cloud/css/codepen.min.css'
  ]
});
 </script>
 <!--notification js -->
 <script src="assets/plugins/notifications/js/lobibox.min.js"></script>
 <script src="assets/plugins/notifications/js/notifications.min.js"></script>
 <script src="assets/plugins/notifications/js/notification-custom-script.js"></script>
 <script>
     $(document).ready(function() {
         var msgid = '<?php echo $msg; ?>';
         if (msgid == '1') {
             var ff1 = "Firm Detail Update Successful";
             msgBox_green(ff1);
             // error_staff(ff1);
         } else if (msgid == '2') {
             var ff1 = "Please try After Some Time";
             msgBox_yellow(ff1);
         } else if (msgid == '3') {
             var ff1 = "Logo  Deleted Successful";
             msgBox_yellow(ff1);
             window.location.href = 'firm_detail.php';
         }
     });
 </script>