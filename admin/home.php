<?php include('header.php');
 include('config.php');


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
									<p class="mb-0 text-secondary">Total Query</p>
									<h4 class="my-1 text-info">
									<?php      $query = "SELECT COUNT(*) AS nt from query"; 
												$result = mysqli_query($conn, $query);
												$firms = mysqli_fetch_array($result);
												if($firms['nt']=="")
												{ echo "0";}else{ echo $firms['nt'];} ?>
									</h4>
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
								   <p class="mb-0 text-secondary">Total Gallery Images</p>
								   <h4 class="my-1 text-danger">
								   <?php      $query = "SELECT COUNT(*) AS nt from add_gallery"; 
												$result = mysqli_query($conn, $query);
												$firms = mysqli_fetch_array($result);
												if($firms['nt']=="")
												{ echo "0";}else{ echo $firms['nt'];} ?>
								   </h4>
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
								   <p class="mb-0 text-secondary">Total Activity Images </p>
								   <h4 class="my-1 text-success">
								   <?php      $query = "SELECT COUNT(*) AS nt from add_activity "; 
												$result = mysqli_query($conn, $query);
												$firms = mysqli_fetch_array($result);
												if($firms['nt']=="")
												{ echo "0";}else{ echo $firms['nt'];} ?>
								   </h4>
								   <!-- <p class="mb-0 font-13">-4.5% from last week</p> -->
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class='bx bxs-bar-chart-alt-2' ></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div>
				 <!-- <div class="col">-->
					<!--<div class="card radius-10 border-start border-0 border-3 border-warning">-->
					<!--   <div class="card-body">-->
					<!--	   <div class="d-flex align-items-center">-->
					<!--		   <div>-->
					<!--			   <p class="mb-0 text-secondary">Completed</p>-->
					<!--			   <h4 class="my-1 text-warning"> -->
					<!--				55</h4>-->
								   <!-- <p class="mb-0 font-13">+8.4% from last week</p> -->
					<!--		   </div>-->
					<!--		   <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class='bx bxs-group'></i>-->
					<!--		   </div>-->
					<!--	   </div>-->
					<!--   </div>-->
					<!--</div>-->
				 <!-- </div> -->
				</div><!--end row-->
               

			</div>
		</div>
		<!--end page wrapper -->
	<?php include('footer.php') ?>