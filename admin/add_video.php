<?php 
include('config.php');

include('header.php');
$msg="";

if (isset($_GET['did'])) {
    $did = $_GET['did'];
   
      
    $sql = 'DELETE From video WHERE id="' . $did . '"'; 
    $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        $msg='3';
      
    }

}


if (isset($_POST['submit'])) {


    $name = $_POST['ename'];
    $vlink = $_POST['vlink'];
    $datetime = date_create()->format('Y-m-d H:i:s');

    

    $sql = "INSERT INTO `video`(`name`, `video`, `status`, `date`) 
                         VALUES ('$name','$vlink','A','$datetime')";
    if (mysqli_query($conn, $sql)) {
        $msg='1';
      
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
                        <li class="breadcrumb-item active" aria-current="page">Add Video</li>
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
                            <h5 class="mb-0 text-info">Add Video</h5>
                        </div>
                        <hr>
                         <form name="form1" action="add_video.php" class="row g-3" method="POST" enctype="multipart/form-data">
                            <div class="col-md-6">
                                <label for="inputLastName2" class="form-label">Name</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
                                    <input type="text" class="form-control border-start-0" id="ename" name="ename" placeholder=" Title" required />
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputEmailAddress" class="form-label">Image</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bx-detail'></i></span>
                                <input type="text" class="form-control border-start-0" id="vlink" name="vlink" placeholder=" Add Link" required />
                                </div>
                            </div>
                            <div class="col-12">
                                <button name="submit" type="submit" id="" class="btn btn-info px-5">Add Video</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="row">
            <h6 class="mb-0 text-uppercase">All Video</h6>
            <hr />
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4">
            <?php  $query = "SELECT * FROM video";
            $result = $conn->query($query);
            $i = '1'; while ($firm = mysqli_fetch_array($result)) {  ?>
                <div class="col">
                    <div class="card border-success border-bottom border-3 border-0">
                      <iframe width="375" height="345" src="https://www.youtube.com/embed/<?php echo $firm['video']; ?>"></iframe>
                        
                        <div class="card-body">
                            <h5 class="card-title text-success"><?php echo $i ; echo $firm['name']; ?></h5>
                            <hr>
                            <div class="d-flex align-items-center gap-2">
                                <a href="add_video.php?did=<?php echo $firm['id']; ?>" class="btn btn-danger"><i class="lni lni-trash"></i></a>
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
        var ff1="Video Added Successful";
        msgBox_green(ff1);
       // error_staff(ff1);
       } else if (msgid=='2'){
        var ff1="Please try After Some Time";
        msgBox_yellow(ff1);
       }else if (msgid=='3'){
        var ff1="Video Deleted Successful";
        msgBox_green(ff1);
        window.location.href='add_video.php';
       }
    });  
 </script>

