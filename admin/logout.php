 <?php
session_start();
session_unset();
session_destroy();
header("location:index.php");
 echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='index.php';</SCRIPT>");
?>