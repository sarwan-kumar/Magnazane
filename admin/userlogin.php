<!doctype html>
<html lang="en">

<head>
	<style>
	    @media only screen and (max-width: 992px){
	.dv1 {
               margin-top: 0px!important;
       }
   
   
}
	.dv1 {
               margin-top: 136px!important;
       }
	   
	   .modal {
  visibility: hidden;
  opacity: 0;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(77, 77, 77, .7);
  transition: all .4s;
}

.modal:target {
  visibility: visible;
  opacity: 1;
}

.modal__content {
  border-radius: 4px;
  position: relative;
  width: 500px;
  max-width: 90%;
  
  background: #02515e;
  /*padding: 1em 2em;*/
}

.modal__footer {
  text-align: right;
  a {
    color: #585858;
  }
  i {
    color: #d02d2c;
  }
}
.modal__close {
  position: absolute;
  top: 10px;
  right: 10px;
  color: #585858;
  text-decoration: none;
}
.mbtn{
        color: red!important;
    background: white!important;
}
	</style>
	<title> Vision Market </title>
	@include('adminheader')
</head>

<body class="bg-login">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto dv1">
						<div class="mb-4 text-center">
							<img src="{{ asset('website') }}/img/logo.png" width="180" alt="" />
						</div>
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="">User Panel Login</h3>
										<p>Already have an account? <a href="{{ route('register') }}">Sign in here</a>
										</p>
										
									</div>
									<div class="d-grid">
									 
									</div>
									<div class="login-separater text-center mb-4"> <span>SIGN IN WITH EMAIL</span>
										<hr/>
									</div>
									<div class="form-body">
									  @include('admin.message')
										<form action="{{ route('login') }}" autocomplete="off" class="row g-3">
										   @csrf
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email Address</label>
												<input type="email" class="form-control" id="inputEmailAddress" name="ownid" placeholder="Enter your email" minlength="8" maxlength="8" >
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Enter Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0 " id="inputChoosePassword" name="password" id="password" placeholder="Enter Password" required> 
													<a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
													  @error('password')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" name="remember" id="remember" value="" {{ old('remember') ? 'checked' : '' }}>
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>
											<div class="col-md-6 text-end">	
											<a href="#demo-modal" data-toggle="modal" data-target="#form" class="text-right f-w-600 fll"> Forgot Password?</a>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Sign in</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	   @include('adminfooter')
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	
	<div id="demo-modal" class="modal">
    <div class="modal__content">
       
          <form method="post" action="{{route('user.password.forgot')}}" >
            @csrf
            <div class="modal-content" style="background:#025562;">
              <div class="modal-header">
                <h5 class="modal-title ww" id="exampleModalLabel">Forgot Password ?</h5>
               
              </div>
              <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="ww">Enter your user id</label>
                            <input type="text" name="userid" id="userid" style="text-transform:uppercase" minlength="8" maxlength="8" class="form-control" placeholder="User Id" >
                        </div>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                  <a href="#" class="modal__close btn btn-danger mbtn">&times;</a>
               <center>
                <button type="submit" class="btn btn-primary">Submit</button>
                </center>
              </div>
            </div>
     </form>
         
        <!--<a href="#" class="modal__close">&times;</a>-->
    </div>
</div>

</body>

</html>