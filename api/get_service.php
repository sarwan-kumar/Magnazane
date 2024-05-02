<?php 
include '../admin/config.php';

//get records from booking and return json

$query = "SELECT * FROM booking";
$result = mysqli_query($conn, $query);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}

echo json_encode($rows);



?>