<?php 
include('config.php');


$msg="";




if(isset($_GET['img1']))
{
        $updateid=$_GET['did'];
        $sql = 'UPDATE tbl_services SET services_image="" WHERE id="'.$updateid.'" '; 
         //echo $sql; die;
		$conn->query($sql);   
	    if ($conn->query($sql) === TRUE) 
			{
			    echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='edit_service.php?id=$updateid'; </SCRIPT>");	
			}else 
			{
			   echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='edit_service.php?id=$updateid'; </SCRIPT>");
			}


}


include('header.php');

if (isset($_POST['submit'])) {


    $name = $_POST['ename'];
    $about = $_POST['about'];
    $upid = $_POST['uid'];
    $datetime = date_create()->format('Y-m-d H:i:s');
    $sqs = $_POST['sqs'];
    $pic=$_POST['img2'];
	if($pic=="0"){
   
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
        $pic = "service-" . $image_id . "." . $imgExt;

        // allow valid image file formats
        if (in_array($imgExt, $valid_extensions)) {
            // Check file size '3MB'
            if ($imgSize < 3000000) {
                move_uploaded_file($tmp_dir, $upload_dir . $pic);
            } else {
              
                $errMSG = "Sorry, your file is too large.";
                echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='edit_service.php?id='; </SCRIPT>");
            }
        } else {
           
            $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='edit_service.php?id='; </SCRIPT>");
        }
    }
	}

    // Prepare the SQL statement with placeholders
$sql = 'UPDATE tbl_services SET services_name=?, services_image=?, description=?, sqs=? WHERE id=?';

// Prepare the statement
$stmt = mysqli_prepare($conn, $sql);

// Bind parameters
mysqli_stmt_bind_param($stmt, "ssssi", $name, $pic, $about, $sqs, $upid);

// Execute the statement
if (mysqli_stmt_execute($stmt)) {
    $msg = '1';
    echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='add_service.php'; </SCRIPT>");
} else {
    $msg = '2';
}


}


    $edit_id = $_GET['id'];
 
    $query_service = mysqli_query($conn,"SELECT * from tbl_services where id='$edit_id'"); 
    $firm_service = mysqli_fetch_array($query_service);

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
                        <li class="breadcrumb-item active" aria-current="page">Edit Service</li>
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
                            <h5 class="mb-0 text-info">Edit Service</h5>
                        </div>
                        <hr>
                        <form name="form1" action="edit_service.php" class="row g-3" method="POST" enctype="multipart/form-data">
                           <input type="hidden" name="uid" value="<?php echo $firm_service['id']; ?>">
                            <div class="col-md-6">
                                <label for="inputLastName2" class="form-label">Name</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
                                    <input type="text" class="form-control border-start-0" id="ename" value="<?php echo $firm_service['services_name']; ?>" name="ename" placeholder=" Name" required />
                                </div>
                            </div>
                           <div class="col-md-6">
                                <label for="inputLastName2" class="form-label">Sequence</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
                                    <input type="number" class="form-control border-start-0" id="sqs" name="sqs" value="<?php echo $firm_service['sqs']; ?>" placeholder=" Sequence" required />
                                </div>
                            </div>
                            <div class="col-12">
                                <?php if($firm_service['services_image']!=""){ ?>             
		                         <img src="service_img/<?php echo $firm_service['services_image']; ?>"  width="100px"/>
            					 <a href="edit_service.php?did=<?php echo $firm_service['id'];?>&img1=1" class="btn btn-danger">
            					 <i class="bx bx-trash"></i></a>
            		              <input  type="hidden" name="img2" class="form-control" value="<?php echo $firm_service['services_image']; ?>"  required/>
            		              <?php }else {?>
                                <label for="inputEmailAddress" class="form-label">Image</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bx-detail'></i></span>
                                    <input type="file" class="form-control border-start-0" id="slider-img" id="simg" name="simg" required />
                                </div>
                                <input  type="hidden" name="img2" class="form-control" value="0"/>
					             <?php } ?>
                                
                            </div>
                            <div class="col-12">
										<label for="inputAddress2" class="form-label">Service Detail</label>
										<textarea class="form-control" id="mytextarea" name="about" placeholder="Detail ..." rows="3"><?php echo $firm_service['description']; ?></textarea>
									</div>
                            <div class="col-12">
                                <button name="submit" type="submit" id="" class="btn btn-info px-5">Update Service</button>
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
		  selector: '#mytextarea'
		});
        tinymce.init({
		  selector: '#mytextarea2'
		});
        tinymce.init({
		  selector: '#mytextarea3'
		});
	</script>

<!--notification js -->
<script src="assets/plugins/notifications/js/lobibox.min.js"></script>
	<script src="assets/plugins/notifications/js/notifications.min.js"></script>
	<script src="assets/plugins/notifications/js/notification-custom-script.js"></script>
 <script>
    $(document).ready(function() {
       var msgid='<?php echo $msg; ?>';
       if (msgid=='1'){
        var ff1="Service Added Successful";
        msgBox_green(ff1);
       // error_staff(ff1);
       } else if (msgid=='2'){
        var ff1="Please try After Some Time";
        msgBox_yellow(ff1);
       }else if (msgid=='3'){
        var ff1="Service Deleted Successful";
        msgBox_yellow(ff1);
        window.location.href='add_service.php';
       }
    });  
 </script>

