<?php include('header.php');

 include "config.php";

if(isset($_POST['submit'])){
    //Escape All SQL Strings
	
	$dname =$_POST['dname'];
	$date = date_create()->format('d-m-Y');  
      
	  				  
		$sql="INSERT INTO `einix_department`(`dname`, `date`) 
		         VALUES ('$dname','$date')"; 

		if ($conn->query($sql) === TRUE) 
		{
			$msg="1";
			$msgtxt="Trainer Added Successfully";
			echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='add_department.php'; </SCRIPT>");
		} 
		else 
		{
		   
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
                        <li class="breadcrumb-item active" aria-current="page">Add Department</li>
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
					<div class="col-xl-7 mx-auto">
						<hr/>
						<div class="card border-top border-0 border-4 border-primary">
							<div class="card-body p-5">
								<div class="card-title d-flex align-items-center">
									<div><i class="bx bxs-user me-1 font-22 text-primary"></i>
									</div>
									<h5 class="mb-0 text-primary">Add Department</h5>
								</div>
								<hr>
								<form method="POST" class="row g-3">
									<div class="col-md-6">
										<label for="inputFirstName" class="form-label">Department Name</label>
										<input type="text" name="dname" class="form-control" placeholder="Enter Department Name" id="inputFirstName">
									</div>
									<div class="col-12">
										<button name="submit" class="btn btn-primary px-5">Add Department</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
        <!--end row-->
        <div class="row">
          <h6 class="mb-0 text-uppercase">All Employees</h6><hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
							 <thead>
								<tr>
									<th>Sr. No</th>
									<th>Action</th>
									<th>Department Name</th>
								</tr>
							 </thead>
							 <tbody>
								<?php $query_d = "SELECT * from einix_department";
								$i='1'; $firms_d = $conn->query($query_d);
								while($firm_d = $firms_d->fetch_assoc()) { ?> 
									<tr>
										<td><?php echo $i; ?></td>
										<td><a href="add_department.php?did=<?php echo $firm_d['id']; ?>" class="btn btn-danger" >Delete</a></td>
										<td><?php echo $firm_d['dname']; ?></td>
									</tr> <?php $i++; } ?>
								</tbody>
								<tfoot>
                                      <tr>
									    <th>Sr. No</th>
                                        <th>Action</th>
                                        <th>Department Name</th>
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
<!--notification js -->
<script src="assets/plugins/notifications/js/lobibox.min.js"></script>
<script src="assets/plugins/notifications/js/notifications.min.js"></script>
<script src="assets/plugins/notifications/js/notification-custom-script.js"></script>