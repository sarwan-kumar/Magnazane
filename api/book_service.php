<?php 
include '../admin/config.php';
if(isset($_POST['name']) && isset($_POST['number']) && isset($_POST['address']) && isset($_POST['remark']) && isset($_POST['service']))
{
    $name=$_POST['name'];
    $number=$_POST['number'];
    $address=$_POST['address'];
    $remark=$_POST['remark'];
    $service=$_POST['service'];
    $date = date_create()->format('Y-m-d H:i:s');
    $sql = "INSERT INTO `booking`(`name`, `number`, `address`, `remark`, `service`, `date`) VALUES ('$name','$number','$address','$remark','$service','$date')";
    if ($conn->query($sql) === TRUE){
        $obj["status"]="success";
        $obj["message"]="Service booked successfully";
    }
    else
    {
        $obj["status"]="error";
        $obj["message"]="Server Error! Please try after some time";
    }
    
}
else
{
    $obj["status"]="error";
    $obj["message"]="All fields are required";
}

echo json_encode($obj);

?>