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
								<li class="breadcrumb-item active" aria-current="page">User Password Change</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<!----------<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>-------->
					</div>
				</div>
				<!--end breadcrumb-->
				
				<!--end row-->
				<div class="row">
					<div class="col-xl-9 mx-auto">
						
						<hr/>
						<div class="card border-top border-0 border-4 border-info">
							<div class="card-body p-5">
								<div class="card-title d-flex align-items-center">
									<div><i class="bx bxs-image me-1 font-22 text-info"></i>
									</div>
									<h5 class="mb-0 text-info">Upload Achiever</h5>
								</div>
								<hr>
								<form role="form"  method="POST" action="{{ route('admin.user.password') }}" class="row g-3">
								 @csrf
									<div class="col-12">
										<label class="form-label">Select User</label>
										<select class="single-select  @error('user') is-invalid @enderror" name="user" required autocomplete="current-password">
											<option value="">Select user</option>
                                            @foreach(userHelper::getAllUser() as $item)
                                           <option value="{{$item->id}}">{{ $item->ownid."(".$item->name.")"  }}</option>
                                          @endforeach
                                    </select>
									</div>
									<div class="col-12">
										<label for="inputChoosePassword" class="form-label">Password</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-lock-open' ></i></span>
											<input type="text" class="form-control border-start-0 @error('NewPassword') is-invalid @enderror" name="NewPassword" minlength="6" autocomplete="current-password" placeholder="NewPassword" required />
										</div>
									</div>
									<div class="col-12">
										<label for="inputPhoneNo" class="form-label">Confirm Password</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-image' ></i></span>
											<input type="text" class="form-control border-start-0  @error('ConfirmPassword') is-invalid @enderror" name="ConfirmPassword" minlength="6" autocomplete="current-password" placeholder="Confirm Password" required />
										</div>
										 @error('Image')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
									</div>
									
									<div class="col-12">
										<button type="submit" class="btn btn-info px-5">Change Password</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				<!--end breadcrumb-->
				
				<!--end row-->

				
				
				
				
			</div>
		</div>
		<!--end page wrapper -->
		@endsection