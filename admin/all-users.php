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
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				
				<h6 class="mb-0 text-uppercase">Company Business Detail</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
									<th>#</th>
									<th>Sr no.</th>
									<th>Name</th>
									<th>Level Achieved</th>
									 <th>CurrentPlan</th>
									<th>Password</th>
									<th>Mobile</th>
									<th>Ownid</th>
									<th>Address</th>
									<th>SponsarId</th>
									<th>ParentId</th>
									<th>Pan Number</th>
									<th>Account Number</th>
									<th>Bank</th>
									<th>IFSC</th>
									<th>Branch</th>
									<th>Joining Date</th>
									<th>Activation Date</th>
									</tr>
								</thead>
								 <tbody>
                                            @php
                                                $i=0;
                                            @endphp
                                            @foreach ($users as $item)
                                            <tr role="row" class="odd">

                                            <td>
                                                @if ($item->status==1)
                                                    <a href="{{ route('admin.user.status', ['id'=>Crypt::encrypt($item->id)]) }}" style="color:white" class="btn btn-danger">Disable User</a>
                                                @else
                                                <a  href="{{ route('admin.user.status', ['id'=>Crypt::encrypt($item->id)]) }}" style="color:white" class="btn btn-success">Enable User</a>
                                                @endif
                                                <a href="{{ route('admin.user.profile', ['id'=>Crypt::encrypt($item->id)]) }}" style="color:white" class="btn btn-warning "><i class="fa fa-pencil-square-o"></i>Edit Profile</a>
                                                <a href="{{ route('admin.user.leveldetails', ['id'=>Crypt::encrypt($item->id)]) }}" style="color:white" class="btn btn-info "><i class="fa fa-line-chart"></i>Level Details</a>
                                                @if($item->isactive==0)
                                                <a href="javascript:void(0)" onclick="confirmAction('{{ route('admin.profile.activate',[Crypt::encrypt($item->id),'1000'])}}','Are you sure to activate the user with amount of ₹ 1000')" style="color:white" class="btn btn-success">Activate User 1000</a>
                                                <a href="javascript:void(0)" onclick="confirmAction('{{ route('admin.profile.activate',[Crypt::encrypt($item->id),'400'])}}','Are you sure to activate the user with amount of ₹ 400')" style="color:white" class="btn btn-success">Activate User 400</a>
                                                @else
                                                <!--<a href="javascript:void(0)" onclick="confirmAction('{{ route('admin.repurchase.apply',[$item->id])}}','Are you sure to apply the repurchase for the selected user ?')" style="color:white" class="btn btn-warning">Apply Repurchase</a>-->
                                                @endif
                                            </td>
                                            <td>{{++$i}}</td>
                                            <td><a target="_blank" href="{{route("admin.user.login",[$item->ownid,Crypt::decrypt($item->passwordcrypt)])}}" >{{$item->name}}</a></td>
                                            <td>{{$item->currentlevel}}</td>
                                              <td>@if($item->isactive==1) {{ userHelper::getPlanDetails($item->currentplan)->name}} @endif </td>
                                            <td>{{Crypt::decrypt($item->passwordcrypt)}}</td>
                                            <td>{{$item->mobile}}</td>
                                            <td>{{$item->ownid}}</td>
                                            <td>{{$item->address}}</td>
                                            <td>{{$item->sponsarid}}</td>
                                            <td>{{$item->parentid}}</td>
                                            <td>{{$item->pannumber}}</td>
                                            <td>{{$item->accountnumber}}</td>
                                            <td>{{$item->bank}}</td>
                                            <td>{{$item->ifsc}}</td>
                                            <td>{{$item->branch}}</td>
                                          
                                            <td>{{\Carbon\Carbon::parse($item->created_at)->format('d/m/Y')}}</td>
                                            <td>{{\Carbon\Carbon::parse($item->activeon)->format('d/m/Y')}}</td>
                                            @endforeach
                                            </tr>
                                        </tbody>
								       <tfoot>
									<tr>
									<th>#</th>
									<th>Sr no.</th>
									<th>Name</th>
									<th>Level Achieved</th>
									 <th>CurrentPlan</th>
									<th>Password</th>
									<th>Mobile</th>
									<th>Ownid</th>
									<th>Address</th>
									<th>SponsarId</th>
									<th>ParentId</th>
									<th>Pan Number</th>
									<th>Account Number</th>
									<th>Bank</th>
									<th>IFSC</th>
									<th>Branch</th>
									<th>Joining Date</th>
									<th>Activation Date</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
    function confirmAction($url,$msg)
    {
        if(confirm($msg))
        {
            document.location.href=$url;
        }
    }
</script>
		@endsection
		 <?php include('footer.php'); ?>