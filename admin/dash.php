 @extends('user.master')
@section('content')
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
			 <h2 class="mb-0 text-uppercase border-0 bg-success text-center" style="height: 40px;color: white;"> Personal Details</h2>
				<hr/>
				  @include('user.message')
				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
					<div class="col">
						<div class="card radius-10 bg-primary bg-gradient">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Login Id</p>
										<h4 class="my-1 text-white">{{ Auth::user()->ownid }}</h4>
									</div>
									<div class="text-white ms-auto font-35"><i class='bx bx-cart-alt'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 bg-danger bg-gradient">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Sponsor Id</p>
										<h4 class="my-1 text-white">{{ Auth::user()->sponsarid }}</h4>
									</div>
									<div class="text-white ms-auto font-35"><i class='bx bx-dollar'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 bg-warning bg-gradient">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-dark">Level Achieved </p>
										<h4 class="text-dark my-1">{{Auth::user()->currentlevel}}</h4>
									</div>
									<div class="text-dark ms-auto font-35"><i class='bx bx-user-pin'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 bg-success bg-gradient">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">My Team Business</p>
										<h4 class="my-1 text-white">{{ $mybusiness}}</h4>
									</div>
									<div class="text-white ms-auto font-35"><i class='bx bx-comment-detail'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 bg-primary bg-gradient">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Joining Date</p>
										<h4 class="my-1 text-white">{{ \Carbon\Carbon::parse(Auth::user()->created_at)->format("d/m/Y") }}</h4>
									</div>
									<div class="text-white ms-auto font-35"><i class='bx bx-cart-alt'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 bg-warning bg-gradient">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-dark">Activation Date</p>
										<h4 class="text-dark my-1">{{ Auth::user()->isactive==1?\Carbon\Carbon::parse(Auth::user()->activeon)->format("d/m/Y"):"ID Inactive" }}</h4>
									</div>
									<div class="text-dark ms-auto font-35"><i class='bx bx-user-pin'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 bg-danger bg-gradient">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Status</p>
										<h4 class="my-1 text-white">{{ Auth::user()->isactive==1?"Active":"Inactive" }}</h4>
									</div>
									<div class="text-white ms-auto font-35"><i class='bx bx-dollar'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				 
				 <h2 class="mb-0 text-uppercase border-0 bg-success text-center" style="height: 40px;color: white;"> Income Details</h2>
				<hr/>
                 <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
					
					<div class="col">
						<div class="card radius-10 bg-success">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">My Package</p>
										<h4 class="my-1 text-white">{{ Auth::user()->isactive==1?$package->entryamount:"ID inactive" }}</h4>
										<p class="mb-0 font-13 text-white"><i class="bx bxs-up-arrow align-middle"></i>$34 from last week</p>
									</div>
									<div class="widgets-icons bg-white text-success ms-auto"><i class="bx bxs-wallet"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 bg-info">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-dark">Total Team</p>
										<h4 class="my-1 text-dark">{{ $totalTeam}}</h4>
										<p class="mb-0 font-13 text-dark"><i class="bx bxs-up-arrow align-middle"></i>$24 from last week</p>
									</div>
									<div class="widgets-icons bg-white text-dark ms-auto"><i class="bx bxs-group"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 bg-danger">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Total Active Team</p>
										<h4 class="my-1 text-white">{{ $totalActiveTeam}}</h4>
										<p class="mb-0 font-13 text-white"><i class="bx bxs-down-arrow align-middle"></i>$34 from last week</p>
									</div>
									<div class="widgets-icons bg-white text-danger ms-auto"><i class="bx bxs-binoculars"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 bg-info">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-dark">Total Direct</p>
										<h4 class="my-1 text-dark">{{ $direct}}</h4>
										<p class="mb-0 font-13 text-dark"><i class="bx bxs-up-arrow align-middle"></i>$24 from last week</p>
									</div>
									<div class="widgets-icons bg-white text-dark ms-auto"><i class="bx bxs-group"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 bg-danger">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Total Direct Active </p>
										<h4 class="my-1 text-white">{{ $directactive}}</h4>
										<p class="mb-0 font-13 text-white"><i class="bx bxs-down-arrow align-middle"></i>$34 from last week</p>
									</div>
									<div class="widgets-icons bg-white text-danger ms-auto"><i class="bx bxs-binoculars"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				  
					<div class="col">
						<div class="card radius-10 bg-warning">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-dark">Direct Income </p>
										<h4 class="my-1 text-dark">3{{ round($directincome) }}</h4>
										<p class="mb-0 font-13 text-dark"><i class="bx bxs-down-arrow align-middle"></i>12.2% from last week</p>
									</div>
									<div class="widgets-icons bg-white text-dark ms-auto"><i class='bx bx-line-chart-down'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				  <div class="col">
						<div class="card radius-10 bg-success">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Level Income</p>
										<h4 class="my-1 text-white">{{ round($levelincome) }}</h4>
										<p class="mb-0 font-13 text-white"><i class="bx bxs-up-arrow align-middle"></i>$34 from last week</p>
									</div>
									<div class="widgets-icons bg-white text-success ms-auto"><i class="bx bxs-wallet"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col">
						<div class="card radius-10 bg-warning">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-dark">ROI Income </p>
										<h4 class="my-1 text-dark">{{ round($roiincome) }}</h4>
										<p class="mb-0 font-13 text-dark"><i class="bx bxs-down-arrow align-middle"></i>12.2% from last week</p>
									</div>
									<div class="widgets-icons bg-white text-dark ms-auto"><i class='bx bx-line-chart-down'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 bg-warning">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-dark">Reward Income</p>
										<h4 class="my-1 text-dark">{{ round($rewardincome) }}</h4>
										<p class="mb-0 font-13 text-dark"><i class="bx bxs-down-arrow align-middle"></i>12.2% from last week</p>
									</div>
									<div class="widgets-icons bg-white text-dark ms-auto"><i class='bx bx-line-chart-down'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				   
					<div class="col">
						<div class="card radius-10 bg-info">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-dark">Total Income</p>
										<h4 class="my-1 text-dark">{{ round($roiincome)+round($levelincome)+round($directincome) +round($rewardincome) }}</h4>
										<p class="mb-0 font-13 text-dark"><i class="bx bxs-up-arrow align-middle"></i>$24 from last week</p>
									</div>
									<div class="widgets-icons bg-white text-dark ms-auto"><i class="bx bxs-group"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 bg-danger">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Income Posted</p>
										<h4 class="my-1 text-white">{{ round($withdraw)*-1 }}</h4>
										<p class="mb-0 font-13 text-white"><i class="bx bxs-down-arrow align-middle"></i>$34 from last week</p>
									</div>
									<div class="widgets-icons bg-white text-danger ms-auto"><i class="bx bxs-binoculars"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					 <div class="col">
						<div class="card radius-10 bg-success">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Net Income</p>
										<h4 class="my-1 text-white">{{ round($roiincome)+round($levelincome)+round($directincome) +round($rewardincome) +round($withdraw) }}</h4>
										<p class="mb-0 font-13 text-white"><i class="bx bxs-up-arrow align-middle"></i>$34 from last week</p>
									</div>
									<div class="widgets-icons bg-white text-success ms-auto"><i class="bx bxs-wallet"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				
				</div>
				 
			</div>
		</div>
		<!--end page wrapper -->
		@endsection