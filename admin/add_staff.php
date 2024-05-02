<?php include('header.php');

 include "config.php";
 if(isset($_POST['submit'])){

    $depart=$_POST['edepart1'];
   $name=$_POST['ename1'];
   $email=$_POST['eemail1'];
   $phone=$_POST['ephone1'];
   $eaddress=$_POST['eaddress1'];
   $pwd=$_POST['epass1'];
   $upid=$_POST['eupid'];
    
    $sql = 'UPDATE einix_staff SET department="'.$depart.'", name="'.$name.'" , phone="'.$phone.'" , email="'.$email.'", address="'.$eaddress.'",pwd="'.$pwd.'" WHERE id="'.$upid.'"';
              
     if (mysqli_query($conn, $sql)) {
        echo json_encode(array("statusCode"=>222));
        //die;
     } 
     else {
         echo json_encode(array("statusCode"=>223));
     }
   
   mysqli_close($conn);
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
                        <li class="breadcrumb-item active" aria-current="page">Add Staff</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Settings</button>
                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <!--end row-->
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase"></h6>
                <hr/>
                <div class="card border-top border-0 border-4 border-info">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                            </div>
                            <h5 class="mb-0 text-info">Add Staff</h5>
                        </div>
                        <hr>
                        <form id="register_form" name="form1" class="row g-3" method="POST">
                            <div class="col-md-6">
                                <label for="inputLastName1" class="form-label">Department</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bx-package'></i></span>
                                    <input type="text" class="form-control border-start-0" value="test" id="edepart" placeholder="First Name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputLastName2" class="form-label">Name</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
                                    <input type="text" class="form-control border-start-0" value="test" id="ename" name="ename" placeholder=" Name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPhoneNo" class="form-label">Mobile Number</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bx-phone' ></i></span>
                                    <input type="text" value="12324" class="form-control border-start-0" id="ephone" name="ephone" placeholder="Phone No" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmailAddress" class="form-label">Email Address</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bx-at' ></i></span>
                                    <input type="text" value="test@gmail.com" class="form-control border-start-0" id="eemail" name="eemail" placeholder="Email Address" />
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="inputEmailAddress" class="form-label">Address</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bx-detail' ></i></span>
                                    <input type="text" value="Address" class="form-control border-start-0" id="eaddress" name="eaddress" placeholder="Enter Address" />
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <label for="inputChoosePassword" class="form-label">Choose Password</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-lock-open' ></i></span>
                                    <input type="password" value="1111" class="form-control border-start-0" name="epass" id="epass" placeholder="Choose Password" />
                                </div>
                            </div>
                            <div class="col-12">
                                <button name="submit" type="button" id="butsave" class="btn btn-info px-5">Add Staff</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="row">
        <h6 class="mb-0 text-uppercase">All Employees</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
                                        <th>Sr. No</th>
                                        <th>Action</th>
                                        <th>UserID</th>
                                        <th>Password</th>
										<th>Name</th>
										<th>Department</th>
										<th>Mobile Number</th>
										<th>Email</th>
										<th>Address</th>
									</tr>
								</thead>
								<tbody id="view_staff">
									
								</tbody>
								<tfoot>
                                      <tr>
                                        <th>Sr. No</th>
                                        <th>Action</th>
                                        <th>UserID</th>
                                        <th>Password</th>
										<th>Name</th>
										<th>Department</th>
										<th>Mobile Number</th>
										<th>Email</th>
										<th>Address</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
        </div>
    </div>
</div>
  
       <div class="modal fade" id="stafmodal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Employee Detail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="update_staff">
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
   

<!--end page wrapper -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 
<?php 
include('staffscript.php');
include('footer.php'); ?>
<!--notification js -->
<script src="assets/plugins/notifications/js/lobibox.min.js"></script>
<script src="assets/plugins/notifications/js/notifications.min.js"></script>
<script src="assets/plugins/notifications/js/notification-custom-script.js"></script>