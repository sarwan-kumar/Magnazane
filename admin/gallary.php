 <?php include('headre.php'); ?>
 @extends('admin.master')
@section('content')
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Gallary</li>
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
						<h6 class="mb-0 text-uppercase">Gallary Images </h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-info">
							<div class="card-body p-5">
								<div class="card-title d-flex align-items-center">
									<div><i class="bx bxs-image me-1 font-22 text-info"></i>
									</div>
									<h5 class="mb-0 text-info">Upload Image In Gallery</h5>
								</div>
								<hr>
								<form role="form" method="POST" action="{{ route('admin.gallery.upload') }}" enctype="multipart/form-data" class="row g-3">
									
									<div class="col-12">
										<label for="inputPhoneNo" class="form-label">Choose Image</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-image' ></i></span>
											<input type="file" class="form-control border-start-0 @error('Image') is-invalid @enderror" name="Image" value="{{ old('Image') }}" id="inputPhoneNo" required />
										</div>
										 @error('Image')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
									</div>
									
									<div class="col-12">
										<button type="submit" class="btn btn-info px-5">Upload Image</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">Gallery Images</h6>
				<hr/>
				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4">
					  @foreach($gallery as $u)
					<div class="col">
						<div class="card border-success border-bottom border-3 border-0">
							<img src="{{ asset('Gallery/'.$u->image) }}" class="card-img-top" alt="Gallary">
							<div class="card-body">
								
									<a href="{{ route('admin.gallery.delete',['id'=>Crypt::encrypt($u->id)]) }}" class="btn btn-danger"><i class='bx bx-microphone' ></i>Delete</a>
							</div>
						</div>
					</div>
					  @endforeach
				</div>
				<!--end row-->

				
				
				
				
			</div>
		</div>
		<!--end page wrapper -->
		@endsection