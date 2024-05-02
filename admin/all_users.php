<?php include('header.php'); 
 include "config.php";
 
 if (isset($_GET['id'])) {
    $did = $_GET['id'];
   
    $sql = "UPDATE users SET status='D' WHERE id='$did'"; 
    $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        $msg='3';
    }else{
        $msg='5'; 
    }
}

if (isset($_GET['did'])) {
    $did = $_GET['did'];
   
    $sql = 'DELETE From users WHERE id="' . $did . '"'; 
    $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        $msg='1';
      
    }else{
        $msg='5';
    }

}


?>
<!--end header -->
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
           <h2 style="text-align: center;">All Users</h2>
        </div>
        <!--end row-->
        <div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
                                        <th>#</th>
										<th>Action</th>
										<th>Name</th>
										<th>Email</th>
										<th>Password</th>
                                        <th>Phone</th>
										<th>Address</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
                                <?php  $query = "SELECT * FROM users ";
                                 $result = $conn->query($query);
                                 $i = '1'; while ($firm = mysqli_fetch_array($result)) { ?>
									<tr>
										<td><?php echo $i; ?></td>
										<td>  <a href="users.php?did=<?php echo $firm['id']; ?>" class="btn btn-danger"><i class="lni lni-trash"></i></a>
                                              <a href="users.php?id=<?php echo $firm['id']; ?>" class="btn btn-warning">Deactivate</a>
                                        </td>
										<td><?php echo $firm['name']; ?></td>
										<td><?php echo $firm['email']; ?></td>
										<td><?php echo $firm['pwd']; ?></td>
										<td><?php echo $firm['phone']; ?></td>
                                        <td><?php echo $firm['address']; ?></td>
                                        <td><?php if($firm['status']=="D"){echo "Deactivated";}else if($firm['status']=="A"){ echo "Actiated";} ?></td>
									</tr>
									<?php $i++; } ?>
								</tbody>
								<tfoot>
									<tr>
                                         <th>#</th>
										<th>Action</th>
										<th>Name</th>
										<th>Email</th>
										<th>Password</th>
                                        <th>Phone</th>
										<th>Address</th>
										<th>Status</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
         
    </div>
</div>
<!--end page wrapper -->
<?php include('footer.php') ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!--notification js -->
<script src="assets/plugins/notifications/js/lobibox.min.js"></script>
	<script src="assets/plugins/notifications/js/notifications.min.js"></script>
	<script src="assets/plugins/notifications/js/notification-custom-script.js"></script>
 <script>
    $(document).ready(function() {
       var msgid='<?php echo $msg; ?>';
       if (msgid=='1'){
        var ff1="User Deleted Successful";
        msgBox_green(ff1);
        window.location.href='users.php';
       // error_staff(ff1);
       } else if (msgid=='5'){
        var ff1="Please try After Some Time";
        msgBox_yellow(ff1);
       }else if (msgid=='3'){
        var ff1="User Deactivated";
        msgBox_yellow(ff1);
        window.location.href='users.php';
       }
    });  
 </script>
<!--notification js -->
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>

	