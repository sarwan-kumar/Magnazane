     @extends('admin.master')
     @section('content')   		
		<?php include('headre.php'); ?>
           <div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Tables</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Data Table</li>
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
								<div class="dropdown-divider"></div><a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				
				<h6 class="mb-0 text-uppercase">Company Business Detail for date</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
								  <tr>
									<th>Sr no.</th>
									<th>User Id </th>
									<th>User Name</th>
									<th>SponsarId</th>
									<th>Mobile</th>
									<th>Package R55</th>
								  </tr>
								</thead>
								 <tbody>
                                            @php
                                                $i=0;
                                            @endphp
                                            @foreach ($record as $item)
                                            <tr role="row" class="odd">
                                             <td>{{++$i}}</td>
                                            <td>{{$item->ownid}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->sponsarid}}</td>
                                            <td>{{$item->mobile}}</td>
                                            <td>{{$item->entryamount}}</td>
                                            @endforeach
                                            </tr>
                                        </tbody>
								<tfoot>
									<tr>
									<th>Sr no.</th>
									<th>User Id </th>
									<th>User Name</th>
									<th>SponsarId</th>
									<th>Mobile</th>
									<th>Package R55</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection
		 <?php include('footer.php'); ?>