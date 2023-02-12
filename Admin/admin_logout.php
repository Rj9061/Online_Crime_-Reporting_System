<?php
include ("../database\db.php");
session_start();

$admin_email=$_SESSION['admin_email'];
$update_activity="UPDATE admin SET login_activity=now() WHERE admin_email='$admin_email'";
mysqli_query($con,$update_activity);
session_destroy();



echo "<script> window.open('admin_login.php','_self')</script>";
?>