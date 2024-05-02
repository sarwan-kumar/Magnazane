 <?php include('header.php'); ?>
  
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Project Detail</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Orders</li>
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
				<div class="card">
					<div class="card-body">
						<div class="d-lg-flex align-items-center mb-4 gap-3">
							<div class="position-relative">
								<input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
							</div>
						  <div class="ms-auto">
                            <button class="btn btn-primary radius-30 mt-2 mt-lg-0" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bx bxs-plus-square"></i>Assign Work</button></div>
						</div>
						<div class="table-responsive">
							<table class="table mb-0">
								<thead class="table-light">
									<tr>
										<th>#</th>
										<th>Title</th>
										<th>Status</th>
										<th>Description</th>
										<th>Date</th>
										<th>View Details</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000354</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class='bx bxs-circle me-1'></i>FulFilled</div></td>
										<td>$485.20</td>
										<td>June 10, 2020</td>
										<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
												<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000986</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-info bg-light-info p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>Confirmed</div></td>
										<td>$650.30</td>
										<td>June 12, 2020</td>
										<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
												<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000536</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-warning bg-light-warning p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>Partially shipped</div></td>
										<td>$159.45</td>
										<td>June 14, 2020</td>
										<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
												<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000678</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>FulFilled</div></td>
										<td>$968.40</td>
										<td>June 16, 2020</td>
										<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
												<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000457</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-info bg-light-info p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>Confirmed</div></td>
										<td>$689.50</td>
										<td>June 18, 2020</td>
										<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
												<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000685</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-info bg-light-info p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>Confirmed</div></td>
										<td>$478.60</td>
										<td>June 20, 2020</td>
										<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
												<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000356</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-warning bg-light-warning p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>Partially shipped</div></td>
										<td>$523.30</td>
										<td>June 21, 2020</td>
										<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
												<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000875</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>FulFilled</div></td>
										<td>$960.20</td>
										<td>June 24, 2020</td>
										<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
												<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000658</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>FulFilled</div></td>
										<td>$428.10</td>
										<td>June 25, 2020</td>
										<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
												<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000689</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-warning bg-light-warning p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>Partially shipped</div></td>
										<td>$876.60</td>
										<td>June 26, 2020</td>
										<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
												<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
                 <!-- Modal Area -->
		      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add/Assign Work</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form id="project_form" name="form1" class="row g-3" method="POST">
						<input type="hidden" name="pid" value="<?php ?>">
						<div class="col-12">
                                <label for="inputLastName2" class="form-label">To Employee</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bx-calendar-star'></i></span>
								 <select class="single-select" name="empid">
								  <option value="Luxembourg">Luxembourg</option>
								  <option value="Luxembourg">Luxembourg</option>
										</select>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="inputLastName1" class="form-label">Title</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bx-package'></i></span>
                                    <input type="text" class="form-control border-start-0" value="test" name="edepart" id="edepart" placeholder="Title" />
                                </div>
                            </div>
							
                            <div class="col-12">
                                <label for="inputLastName2" class="form-label">Description</label>
                                <div class="input-group">
								<textarea name="descp" id="des" class="form-control border-start-0" cols="30" rows="10"></textarea>
								</div>
                            </div>
                            <div class="col-12">
                                <label for="inputPhoneNo" class="form-label">End Date</label>
                                <div class="input-group"> 
									<span class="input-group-text bg-transparent"><i class='bx bx-calendar-exclamation'></i></span>
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
				 <!-- Modal Area End -->

			</div>
		</div>
		<!--end page wrapper -->
		
	<?php include('footer.php'); ?>
	