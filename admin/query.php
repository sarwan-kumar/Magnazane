<?php include('header.php'); 
 include "config.php";
 
 
if (isset($_GET['did'])) {
    $did = $_GET['did'];
   
    $sql = 'DELETE From query WHERE id="' . $did . '"'; 
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
           <h2 style="text-align: center;">All Query</h2>
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
										<th>Phone</th>
										<th>Email</th>
										<th>Address</th>
										<th>Subject</th>
										<th>Query</th>
										<th>Date</th>
									</tr>
								</thead>
								<tbody>
                                 <?php  $query = "SELECT query.*, tbl_services.services_name FROM query LEFT JOIN tbl_services ON query.service = tbl_services.id;";
                                 $result = $conn->query($query);
                                 $i = '1'; while ($firm = mysqli_fetch_array($result)) { 
                                    
                                    $sid =   $firm['service'];
                                    if($sid==0){
                                       $query_service = mysqli_query($conn,"SELECT * from tbl_services where id='$sid'"); 
                                       $firm_service = mysqli_fetch_array($query_service);
                                       $sname= $firm_service['services_name'];

                                       
                                    }else{
                                       $sname="-";  
                                     }
                                 ?>
									<tr>
										<td><?php echo $i; ?></td>
										<td>  <a href="query.php?did=<?php echo $firm['id']; ?>" class="btn btn-danger"><i class="lni lni-trash"></i></a>
                                           
                                        </td>
										
										<td><?php echo $firm['name']; ?></td>
										<td><?php echo $firm['phone']; ?></td>
										<td><?php echo $firm['email']; ?></td>
										<td><?php echo $firm['address'] ; ?></td>
										<td><?php echo $firm['services_name']; ?></td>
                                        <td><?php echo $firm['remark']; ?></td>
                                        <td><?php echo $firm['date']; ?></td>
									</tr><?php $i++; } ?>
								</tbody>
								<tfoot>
									<tr>
                                        <th>#</th>
										<th>Action</th>
										<th>Name</th>
										<th>Phone</th>
										<th>Address</th>
										<th>Subject</th>
										<th>Query</th>
										<th>Date</th>
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
        var ff1="Query Deleted Successful";
        msgBox_green(ff1);
        window.location.href='query.php';
       // error_staff(ff1);
       } else if (msgid=='5'){
        var ff1="Please try After Some Time";
        msgBox_yellow(ff1);
       }else if (msgid=='3'){
        var ff1="User Deactivated";
        msgBox_yellow(ff1);
        window.location.href='query.php';
       }
    });  
 </script>
<!--notification js -->
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>

	