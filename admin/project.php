<?php 
  include('header.php'); 
 include "config.php";
 if(isset($_POST['submit'])){

   $epname=$_POST['edepart'];
   $name=$_POST['sdate'];
   $edate=$_POST['edate'];
   $date = date_create()->format('d-m-Y');  

   $sql = "INSERT INTO `einix_project`(`project`, `s_date`, `e_date`, `status`, `date`) 
    VALUES ('$epname','$date','$edate','A','$date')"; 

     if (mysqli_query($conn, $sql)) {
      //  echo "successful done"; die;
        echo "<script>
       
         new_note(); </script>"; 
       
     } 
     else { echo json_encode(array("statusCode"=>223));}
   
   mysqli_close($conn);
   }
  
 ?>
<!--end header -->
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
            <div class="col">
                <div class="card radius-10 border-start border-0 border-3 border-info">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Project</p>
                                <h4 class="my-1 text-info"><?php $query = "SELECT COUNT(*) AS ct from einix_project"; 
                                    $result = mysqli_query($conn, $query);
                                    $firms = mysqli_fetch_array($result);
                                    if($firms['ct']=="")
                                    {  echo "0"; }
                                    else { echo $firms['ct']; }  ?></h4>
                                <!-- <p class="mb-0 font-13">+2.5% from last week</p> -->
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class='bx bxs-cart'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 border-start border-0 border-3 border-danger">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Completed Project</p>
                                <h4 class="my-1 text-danger"><?php
                                                
                                                $query = "SELECT COUNT(*) AS ct from einix_project WHERE status='S'"; 
                                                $result = mysqli_query($conn, $query);
                                                $firms = mysqli_fetch_array($result);
                                                if($firms['ct']=="")
                                                {
                                                  echo "0";
                                                }
                                                else
                                                {
                                                  echo $firms['ct'];
                                                }
                                          
                                          ?></h4>
                                <!-- <p class="mb-0 font-13">+5.4% from last week</p> -->
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class='bx bxs-wallet'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 border-start border-0 border-3 border-success">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Active Project</p>
                                <h4 class="my-1 text-success">
                                    <?php
                                        $query = "SELECT COUNT(*) AS ct from einix_project WHERE status='A'"; 
                                        $result = mysqli_query($conn, $query);
                                        $firms = mysqli_fetch_array($result);
                                        if($firms['ct']=="")
                                        {  echo "0"; } else  { echo $firms['ct'];  }  ?></h4>
                                <!-- <p class="mb-0 font-13">-4.5% from last week</p> -->
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class='bx bxs-bar-chart-alt-2'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 border-start border-0 border-3 border-warning">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Customers</p>
                                <h4 class="my-1 text-warning">8.4K</h4>
                                <!-- <p class="mb-0 font-13">+8.4% from last week</p> -->
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class='bx bxs-group'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary rounded">
                            <div class="container-fluid"> <a class="navbar-brand" href="#">Admin</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent5" aria-controls="navbarSupportedContent5" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent5">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item"> <a class="nav-link active" aria-current="page" href="#"><i class='bx bx-home-alt me-1'></i>Home</a>
                                        </li>
                                        <li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-user me-1'></i>About</a>
                                        </li>
                                        <li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-category-alt me-1'></i>Features</a>
                                        </li>
                                        <li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-microphone me-1'></i>Contact</a>
                                        </li>
                                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropdown
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Another action</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Something else here</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                  
                                    <form class="d-flex">
                                        <!-- <button class="btn btn-dark me-3 radius-30 px-4" type="submit">
                                            <i class='bx bx-lock'></i> Login</button> -->
                                        <button class="btn btn-light radius-30 px-4" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class='bx bx-calendar-event'></i> Add Project</button>
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
           <!-- Nav Tab Rk -->
          <div class="row">
            <div class="card">
                <div class="card-body">
                <ul class="nav nav-pills mb-3" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-bs-toggle="pill" href="#primary-pills-home" role="tab" aria-selected="true" >
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class='bx bx-home font-18 me-1'></i>
                                    </div>
                                    <div class="tab-title"> New Project</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="pill" href="#primary-pills-profile" role="tab" aria-selected="false" >
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class='bx bx-user-pin font-18 me-1'></i>
                                    </div>
                                    <div class="tab-title">Pending Project</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="pill" href="#primary-pills-contact" role="tab" aria-selected="false" >
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class='bx bx-microphone font-18 me-1'></i>
                                    </div>
                                    <div class="tab-title">Completed</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
        <!-- Nav Tab End  -->

        <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="primary-pills-home" role="tabpanel">
        <div class="card radius-10"  >
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <h6 class="mb-0">New Projects</h6>
                    </div>
                    <div class="dropdown ms-auto">
                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Sr. No</th>
                                <th>Action</th>
                                <th>Project Name</th>
                                <th>Starting Date</th>
                                <th>End Date</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Progress</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             $query = "SELECT * from einix_project ";
                             $resultrec = $conn->query($query);
                            $i='1'; while($firm = $resultrec->fetch_assoc()) { 
                               $status= $firm['status'];  ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><a href="project_detail.php" class="btn btn-info" >View Detail</a></td>
                                <td><?php echo $firm['project']; ?></td>
                                <td><?php echo $firm['s_date']; ?></td>
                                
                                <td><?php echo $firm['e_date']; ?></td>
                                <td>
                                  <?php if($status=="A"){ ?>
                                <span class="badge bg-gradient-quepal text-white shadow-sm w-100">Paid</span>
                                <?php }else if($status=="D") { ?>
                                <span class="badge bg-gradient-bloody text-white shadow-sm w-100">Failed</span>
                                    <?php } else if($status=="S"){?>
                                        <span class="badge bg-gradient-blooker text-white shadow-sm w-100">Pending</span>
                                        <?php } ?>
                                </td>
                                <td><?php echo $firm['date']; ?></td>
                                <td>
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar bg-gradient-quepal" role="progressbar" style="width: 100%"></div>
                                    </div>
                                </td>
                            </tr> <?php $i++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
        <div class="tab-pane fade" id="primary-pills-profile" role="tabpanel">
        <div class="card radius-10"  >
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <h6 class="mb-0">Pending Project</h6>
                    </div>
                    <div class="dropdown ms-auto">
                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Sr. No</th>
                                <th>Action</th>
                                <th>Starting Date</th>
                                <th>End Date</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Progress</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             $query = "SELECT * from einix_project WHERE status='A' ";
                             $resultrec = $conn->query($query);
                            $i='1'; while($firm = $resultrec->fetch_assoc()) { 
                               $status= $firm['status'];  ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><a href="project.php?if=<?php echo $firm['project']; ?>" class="btn btn-info" >View Detail</a></td>
                                <td><?php echo $firm['project']; ?></td>
                                <td><?php echo $firm['s_date']; ?></td>
                                <td><?php echo $firm['e_date']; ?></td>
                                <td>
                                  <?php if($status=="A"){ ?>
                                    <span class="badge bg-gradient-quepal text-white shadow-sm w-100">Paid</span>
                                <?php }else if($status=="D") { ?>
                                    <span class="badge bg-gradient-bloody text-white shadow-sm w-100">Failed</span>
                                <?php } else if($status=="S"){?>
                                    <span class="badge bg-gradient-blooker text-white shadow-sm w-100">Pending</span> 
                                <?php } ?>
                                </td>
                                <td><?php echo $firm['date']; ?></td>
                                <td>
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar bg-gradient-quepal" role="progressbar" style="width: 100%"></div>
                                    </div>
                                </td>
                            </tr> <?php $i++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
        <div class="tab-pane fade" id="primary-pills-contact" role="tabpanel">
        <div class="card radius-10"  >
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <h6 class="mb-0">Completed Project</h6>
                    </div>
                    <div class="dropdown ms-auto">
                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Sr. No</th>
                                <th>Action</th>
                                <th>Project Name</th>
                                <th>Starting Date</th>
                                <th>End Date</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Progress</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             $query = "SELECT * from einix_project WHERE status='S' ";
                             $resultrec = $conn->query($query);
                            $i='1'; while($firm = $resultrec->fetch_assoc()) { 
                               $status= $firm['status'];  ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><a href="project.php?if=<?php echo $firm['project']; ?>" class="btn btn-info" >View Detail</a></td>
                                <td><?php echo $firm['project']; ?></td>
                                <td><?php echo $firm['s_date']; ?></td>
                                
                                <td><?php echo $firm['e_date']; ?></td>
                                <td>
                                  <?php if($status=="A"){ ?>
                                <span class="badge bg-gradient-quepal text-white shadow-sm w-100">Paid</span>
                                <?php }else if($status=="D") { ?>
                                <span class="badge bg-gradient-bloody text-white shadow-sm w-100">Failed</span>
                                    <?php } else if($status=="S"){?>
                                        <span class="badge bg-gradient-blooker text-white shadow-sm w-100">Pending</span>
                                        <?php } ?>
                                </td>
                                <td><?php echo $firm['date']; ?></td>
                                <td>
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar bg-gradient-quepal" role="progressbar" style="width: 100%"></div>
                                    </div>
                                </td>
                            </tr> <?php $i++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
     </div>
      
           <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Creat Project</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form id="project_form" name="form1" class="row g-3" method="POST">
                            <div class="col-12">
                                <label for="inputLastName1" class="form-label">Project Name</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bx-package'></i></span>
                                    <input type="text" class="form-control border-start-0" value="test" name="edepart" id="edepart" placeholder="Project" />
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="inputLastName2" class="form-label">Start Date</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bx-calendar-star'></i></span>
                                    <input type="date" class="form-control border-start-0" value="test" id="sdate" name="sdate" placeholder=" Name" />
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="inputPhoneNo" class="form-label">End Date</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bx-calendar-exclamation'></i></span>
                                    <input type="date" value="12324" class="form-control border-start-0" id="ephone" name="edate" placeholder="End Date" />
                                </div>
                            </div>
                            <div class="col-12">
                                <button name="submit" type="submit" id="prbtn" class="btn btn-info px-5">Add Project</button>
                            </div>
                        </form> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
         </div>
         
    </div>
</div>
<!--end page wrapper -->
<?php include('footer.php') ?>
<!--notification js -->
<script src="assets/plugins/notifications/js/lobibox.min.js"></script>
<script src="assets/plugins/notifications/js/notifications.min.js"></script>
<script src="assets/plugins/notifications/js/notification-custom-script.js"></script>