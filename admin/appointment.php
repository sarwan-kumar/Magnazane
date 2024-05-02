<?php
 include('master.php');
 
 include "config.php";
 if(isset($_POST['submit'])){

   $epname=$_POST['epname'];
   $name=$_POST['sdate'];
   $email=$_POST['edate'];
   $date = date_create()->format('d-m-Y');  

   $sql = "INSERT INTO `einix_project`(`project`, `s_date`, `e_date`, `status`, `date`) 
    VALUES ('$epname','$date','$edate','A','$date')"; 

     if (mysqli_query($conn, $sql)) {
      ?>
      <script> success_staff(); </script> 
      <?php
     } 
     else { echo json_encode(array("statusCode"=>223));}
   
   mysqli_close($conn);
   }

   
 if (isset($_GET['id'])) {

	$status = $_GET['status'];
    $did = $_GET['id'];
  $appid=$did;
    if($status=='D'){
		$sql = "UPDATE appoinment SET status='D' WHERE id='$did'"; 
		$conn->query($sql);
		if ($conn->query($sql) === TRUE) {
			$msg='3';
		  echo  ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='appointment.php';</SCRIPT>");
		}else{
			$msg='5'; 
		}
	}else if($status=='A'){
		$sql = "UPDATE appoinment SET status='A' WHERE id='$did'"; 
    $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
           $sql2 = "SELECT * FROM appoinment WHERE id='$did'";  
                $result2 = $conn->query($sql2);
                $firmsst2 = mysqli_fetch_array($result2);
                 $pphone=$firmsst2['phone'];
                 $pname=$firmsst2['name'];
			    $pdate=$firmsst2['p_date'];
			    $datet = new DateTime($pdate);
                $ap_date = $datet->format('d-m-Y');
			     $ptime = $datet->format('H:i');
			       $msg="Thank You Dear $pname Your Appointment is booked on $ap_date at $ptime. Thank you. Team New Life Rehabilitation";
     
			    // $msg= "Thank You Dear $pname We Received your request for Book an Appointment on $ap_date at $ptime. Thank you. Team New Life Rehabilitation";
			    $api_key = '562F5F19331AE8';
                $contacts =$pphone;
                $from = 'NEWREH';
                $sms_text = urlencode($msg);
               
              $api_url = "http://sms.erbansal.com/app/smsapi/index.php?key=".$api_key."&campaign=0&routeid=13&type=text&contacts=".$contacts."&senderid=".$from."&msg=".$sms_text."&template_id=1207165952619833985";
              //print_r($api_url); die;
             $response = file_get_contents($api_url);
       //  AppointmentBook5($appid);
        $msg='3';
      echo  ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='appointment.php';</SCRIPT>");
    }else{
        $msg='5'; 
    }
	}else if($status=='C'){

		$sql = "UPDATE appoinment SET status='C' WHERE id='$did'"; 
    $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        $msg='3';
      echo  ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='appointment.php';</SCRIPT>");
    }else{
        $msg='5'; 
    }
	}
    
 }
 include('header.php'); 
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
                                <p class="mb-0 text-secondary">Total Appointment</p>
                                <h4 class="my-1 text-info">
                                <?php      $query = "SELECT COUNT(*) AS nt from appoinment WHERE status !='F' ORDER BY id DESC "; 
												$result = mysqli_query($conn, $query);
												$firms = mysqli_fetch_array($result);
												if($firms['nt']=="")
												{ echo "0";}else{ echo $firms['nt'];} ?>
                                </h4>
                                <!-- <p class="mb-0 font-13">+2.5% from last week</p> -->
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class='bx bxs-group'></i>
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
                                <p class="mb-0 text-secondary">Total Pending Appointment</p>
                                <h4 class="my-1 text-danger">
                                <?php      $query = "SELECT COUNT(*) AS nt from appoinment WHERE status='D'"; 
												$result = mysqli_query($conn, $query);
												$firms = mysqli_fetch_array($result);
												if($firms['nt']=="")
												{ echo "0";}else{ echo $firms['nt'];} ?>
                                </h4>
                                <!-- <p class="mb-0 font-13">+5.4% from last week</p> -->
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class='bx bxs-group'></i>
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
                                <p class="mb-0 text-secondary">Total Confirm Appointment</p>
                                <h4 class="my-1 text-success">
                                <?php      $query = "SELECT COUNT(*) AS nt from appoinment WHERE status='A'"; 
												$result = mysqli_query($conn, $query);
												$firms = mysqli_fetch_array($result);
												if($firms['nt']=="")
												{ echo "0";}else{ echo $firms['nt'];} ?>
                                </h4>
                                <!-- <p class="mb-0 font-13">-4.5% from last week</p> -->
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class='bx bxs-group'></i>
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
                                <p class="mb-0 text-secondary">Cancelled Appointment</p>
                                <h4 class="my-1 text-warning">
                                <?php      $query = "SELECT COUNT(*) AS nt from appoinment WHERE status='C'"; 
												$result = mysqli_query($conn, $query);
												$firms = mysqli_fetch_array($result);
												if($firms['nt']=="")
												{ echo "0";}else{ echo $firms['nt'];} ?>
                                </h4>
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

        <!-- <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary rounded">
                            <div class="container-fluid"> <a class="navbar-brand" href="#">Navbar</a>
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
                                       
                                        <button class="btn btn-light radius-30 px-4" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class='bx bx-calendar-event'></i> Add Project</button>
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div> -->
        <!--end row-->
           <!-- Nav Tab Rk -->
          <div class="row">
            <div class="card">
                <div class="card-body">
                <ul class="nav nav-pills mb-3" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-bs-toggle="pill" href="#primary-pills-home" role="tab" aria-selected="true" >
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class='bx bx-credit-card-alt font-18 me-1'></i>
                                    </div>
                                    <div class="tab-title"> Pending Appointment</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="pill" href="#primary-pills-profile" role="tab" aria-selected="false" >
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class='bx bx-check-double font-18 me-1'></i>
                                    </div>
                                    <div class="tab-title">Completed Appointment</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="pill" href="#primary-pills-contact" role="tab" aria-selected="false" >
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class='bx bx-x-circle font-18 me-1'></i>
                                    </div>
                                    <div class="tab-title">Cancelled Appointment</div>
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
                        <h6 class="mb-0">Pending Appointment</h6>
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Appointment Date/Time</th>
                                 <th>Appointment For</th>
                                <th>Status</th>
                                <th>Date</th>
                                 <th>Any Report</th>
                                <th>Remark</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php  $query = "SELECT * FROM appoinment WHERE status='D' ORDER BY p_date DESC"; 
                                 $result = $conn->query($query);
                                 $i = '1'; while ($firm = mysqli_fetch_array($result)) { 
									
									  $ap_date=$firm['p_date'];
									  $datet = new DateTime($ap_date);
                                      $ap_date = $datet->format('d-m-Y');
									  $ptime = $datet->format('H:i');
									 $checkk=$firm['admin'];
									$status=$firm['status'];
									$date=$firm['date'];
										$doc1=$firm['doc'];
								$ext = pathinfo($doc1, PATHINFO_EXTENSION);
									$datetime = new DateTime($date);
                                    $adate = $datetime->format('d-m-Y');
									$tdate = date_create()->format('d-m-Y'); 
									
									?>
                              <tr>
                                <td><?php echo $i; ?></td>
							 
                                <td> 
								<?php if($status=='D'){ ?> 
									<a class="btn btn-success" href="appointment.php?id=<?php echo $firm['id']; ?>&status=A" target="_self">Approve</a>
									<?php }else if($status=='A'){?> 
										<a class="btn btn-warning" href="appointment.php?id=<?php echo $firm['id']; ?>&status=D" target="_self">Deactivate</a>
										<?php } else if($status=='C'){ ?>
										 <a class="btn btn-info" href="reschedule.php?id=<?php echo $firm['id']; ?>" target="_self">Re-Schedule</a>
											<!--<a class="btn btn-warning" href="home.php?id=<?php echo $firm['id']; ?>&status=D" target="_self">Deactivate</a>-->
											<?php } ?>
											<?php if($status!='C'){ ?> 
                                              <a class="btn btn-danger" href="appointment.php?id=<?php echo $firm['id']; ?>&status=C" target="_self">Cancel</a> 
											  <a class="btn btn-info" href="reschedule.php?id=<?php echo $firm['id']; ?>" target="_self">Re-Schedule</a>
											  <?php } ?>
								
                            </td>
                                <td><?php echo $firm['name']; ?></td>
                                <td><?php echo $firm['email']; ?></td>
                                <td><?php echo $ap_date; echo "Time"; echo $ptime; ?></td>
                                <td> <?php echo $firm['AppointmentType']; ?></td>
                                <td>
								    <?php if($status=='D'){ ?>
									<span class="badge bg-gradient-blooker text-white shadow-sm w-100">Pendding</span>
									<?php }else if($status=='A'){ ?>
									<span class="badge bg-gradient-quepal text-white shadow-sm w-100">Completed</span>
									<?php }else if($status=='C'){ ?>
								    <span class="badge bg-gradient-bloody text-white shadow-sm w-100">Cancelled</span><?php } ?>
							</td>
                           <!-- <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100">Paid</span></td> -->
                          
                                <td> <?php echo $firm['date']; ?></td>
                                   <td> 
                                   <?php if($ext==""){ }else{ ?>
									<a href="<?php if($checkk =='1'){  echo $firm['doc']; }else{ ?>../<?php echo $firm['doc']; } ?>" class="btn btn-primary" target="_blank" >View Report</a>

								 <?php } ?>
                                 </td>
                                  <td> <?php echo $firm['remark']; ?></td>
                               
                            </tr><?php $i++; } ?>
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
                        <h6 class="mb-0">Confirm Appointment</h6>
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Appointment Date/Time</th>
                                 <th>Appointment For</th>
                                <th>Status</th>
                                <th>Date</th>
                                   <th>Any Report</th>
                                <th>Remark</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php  $query = "SELECT * FROM appoinment WHERE status ='A' ORDER BY p_date DESC";
                                 $result = $conn->query($query);
                                 $i = '1'; while ($firm = mysqli_fetch_array($result)) { 
									
									  $ap_date=$firm['p_date'];
									  $datet = new DateTime($ap_date);
                                      $ap_date = $datet->format('d-m-Y');
									  $ptime = $datet->format('H:i');
									 $checkk=$firm['admin'];
									$status=$firm['status'];
									$date=$firm['date'];
										$doc1=$firm['doc'];
										$ext = pathinfo($doc1, PATHINFO_EXTENSION);
									$datetime = new DateTime($date);
                                    $adate = $datetime->format('d-m-Y');
									$tdate = date_create()->format('d-m-Y'); 	?>
                              <tr>
                                <td><?php echo $i; ?></td>
							 
                                <td> 
								<?php if($status=='D'){ ?> 
									<a class="btn btn-success" href="appointment.php?id=<?php echo $firm['id']; ?>&status=A" target="_self">Approve</a>
									<?php }else if($status=='A'){?> 
										<a class="btn btn-warning" href="appointment.php?id=<?php echo $firm['id']; ?>&status=D" target="_self">Deactivate</a>
										<?php } else if($status=='C'){ ?>
										 <a class="btn btn-info" href="reschedule.php?id=<?php echo $firm['id']; ?>" target="_self">Re-Schedule</a>
											<!--<a class="btn btn-warning" href="home.php?id=<?php echo $firm['id']; ?>&status=D" target="_self">Deactivate</a>-->
											<?php } ?>
											<?php if($status!='C'){ ?> 
                                              <a class="btn btn-danger" href="appointment.php?id=<?php echo $firm['id']; ?>&status=C" target="_self">Cancel</a> 
											  <a class="btn btn-info" href="reschedule.php?id=<?php echo $firm['id']; ?>" target="_self">Re-Schedule</a>
											  <?php } ?>
								
                            </td>
                                <td><?php echo $firm['name']; ?></td>
                                <td><?php echo $firm['email']; ?></td>
                                <td><?php echo $ap_date; echo "Time"; echo $ptime; ?></td>
                                <td> <?php echo $firm['AppointmentType']; ?></td>
                                <td>
								    <?php if($status=='D'){ ?>
									<span class="badge bg-gradient-blooker text-white shadow-sm w-100">Pendding</span>
									<?php }else if($status=='A'){ ?>
									<span class="badge bg-gradient-quepal text-white shadow-sm w-100">Completed</span>
									<?php }else if($status=='C'){ ?>
								    <span class="badge bg-gradient-bloody text-white shadow-sm w-100">Cancelled</span><?php } ?>
							</td>
                           <!-- <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100">Paid</span></td> -->
                          
                                <td> <?php echo $firm['date']; ?></td>
                                  <td> 
                                  <?php if($ext==""){ }else{ ?>
									<a href="<?php if($checkk =='1'){  echo $firm['doc']; }else{ ?>../<?php echo $firm['doc']; } ?>" class="btn btn-primary" target="_blank" >View Report</a>

								 <?php } ?>
                                 </td>
                                  <td> <?php echo $firm['remark']; ?></td>
                               
                            </tr><?php $i++; }  ?>
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
                        <h6 class="mb-0">Cancelled Appointment</h6>
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Appointment Date/Time</th>
                                 <th>Appointment For</th>
                                <th>Status</th>
                                <th>Date</th>
                                   <th>Any Report</th>
                                <th>Remark</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php  $query = "SELECT * FROM appoinment WHERE status ='C' ORDER BY p_date DESC";
                                 $result = $conn->query($query);
                                 $i = '1'; while ($firm = mysqli_fetch_array($result)) { 
									
									  $ap_date=$firm['p_date'];
									  $datet = new DateTime($ap_date);
                                      $ap_date = $datet->format('d-m-Y');
									  $ptime = $datet->format('H:i');
									 $checkk=$firm['admin'];
									$status=$firm['status'];
									$date=$firm['date'];
										$doc1=$firm['doc'];
										$ext = pathinfo($doc1, PATHINFO_EXTENSION);
									$datetime = new DateTime($date);
                                    $adate = $datetime->format('d-m-Y');
									$tdate = date_create()->format('d-m-Y'); 	?>
                              <tr>
                                <td><?php echo $i; ?></td>
							 
                                <td> 
								<?php if($status=='D'){ ?> 
									<a class="btn btn-success" href="appointment.php?id=<?php echo $firm['id']; ?>&status=A" target="_self">Approve</a>
									<?php }else if($status=='A'){?> 
										<a class="btn btn-warning" href="appointment.php?id=<?php echo $firm['id']; ?>&status=D" target="_self">Deactivate</a>
										<?php } else if($status=='C'){ ?>
										 <a class="btn btn-info" href="reschedule.php?id=<?php echo $firm['id']; ?>" target="_self">Re-Schedule</a>
											<!--<a class="btn btn-warning" href="home.php?id=<?php echo $firm['id']; ?>&status=D" target="_self">Deactivate</a>-->
											<?php } ?>
											<?php if($status!='C'){ ?> 
                                              <a class="btn btn-danger" href="appointment.php?id=<?php echo $firm['id']; ?>&status=C" target="_self">Cancel</a> 
											  <a class="btn btn-info" href="reschedule.php?id=<?php echo $firm['id']; ?>" target="_self">Re-Schedule</a>
											  <?php } ?>
								
                            </td>
                                <td><?php echo $firm['name']; ?></td>
                                <td><?php echo $firm['email']; ?></td>
                                <td><?php echo $ap_date; echo "Time"; echo $ptime; ?></td>
                                <td> <?php echo $firm['AppointmentType']; ?></td>
                                <td>
								    <?php if($status=='D'){ ?>
									<span class="badge bg-gradient-blooker text-white shadow-sm w-100">Pendding</span>
									<?php }else if($status=='A'){ ?>
									<span class="badge bg-gradient-quepal text-white shadow-sm w-100">Completed</span>
									<?php }else if($status=='C'){ ?>
								    <span class="badge bg-gradient-bloody text-white shadow-sm w-100">Cancelled</span><?php } ?>
							</td>
                           <!-- <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100">Paid</span></td> -->
                          
                                <td> <?php echo $firm['date']; ?></td>
                                <td> 
                                   <?php if($ext==""){ }else{ ?>
										<!-- Button trigger modal -->
										  <a href="<?php if($checkk =='1'){  echo $firm['doc']; }else{ ?>../<?php echo $firm['doc']; } ?>" class="btn btn-primary" target="_blank" >View Report</a>

										<!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $firm['id']; ?>">View Report</button>-->
										<!-- Modal -->
										<!--<div class="modal fade" id="exampleModal<?php echo $firm['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
										<!--	<div class="modal-dialog">-->
										<!--		<div class="modal-content">-->
										<!--			<div class="modal-header">-->
										<!--				<h5 class="modal-title" id="exampleModalLabel">Any Attchment</h5>-->
										<!--				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
										<!--			</div>-->
										<!--			<div class="modal-body">-->
										<!--			  <a href="<?php if($checkk =='1'){  echo $firm['doc']; }else{ ?>../<?php echo $firm['doc']; } ?>" >View Report</a>-->

										<!--			</div>-->
										<!--			<div class="modal-footer">-->
										<!--				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
														<!--<button type="button" class="btn btn-primary">Save changes</button>-->
										<!--			</div>-->
										<!--		</div>-->
										<!--	</div>-->
										<!--</div>-->
								 <?php } ?>
                                 </td>
                                  <td> <?php echo $firm['remark']; ?></td>
                               
                            </tr><?php $i++; } ?>
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
                                    <input type="text" class="form-control border-start-0" value="test" id="edepart" placeholder="Project" />
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
                                <button name="submit" type="button" id="prbtn" class="btn btn-info px-5">Add Project</button>
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