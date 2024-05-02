<?php


// $hostname = 'localhost';
// $username = 'pankaj';
// $password = 'Eq6L?%kZFK4h';
// $database = 'pankaj';   


$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'pankaj';


// Create connection
$conn = mysqli_connect($hostname , $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
}
?>