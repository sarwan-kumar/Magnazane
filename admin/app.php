<?php if (isset($_GET['active'])) {
    $did = $_GET['active'];
   
    $sql = "UPDATE appoinment SET status='A' WHERE id='$did'"; 
    $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        $msg='3';
      echo  ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='appoinment.php';</SCRIPT>");
    }else{
        $msg='5'; 
    }
}
if (isset($_GET['deactive'])) {
$did = $_GET['deactive'];
   
$sql = "UPDATE appoinment SET status='D' WHERE id='$did'"; 
$conn->query($sql);
if ($conn->query($sql) === TRUE) {
   // $msg='3';
    echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='appoinment.php';</SCRIPT>");
}else{
    $msg='5'; 
}
}
if (isset($_GET['cancel'])) {
    $did = $_GET['cancel'];
       
    $sql = "UPDATE appoinment SET status='C' WHERE id='$did'"; 
    $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
       // $msg='3';
        echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='appoinment.php';</SCRIPT>");
    }else{
        $msg='5'; 
    }
    }
?>