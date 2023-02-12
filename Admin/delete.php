<?php
include ("../database\db.php");

	
		$delete_id=$_GET['id'];
		$delete="DELETE FROM add_police_officer WHERE ID='$delete_id'";
		$run=mysqli_query($con,$delete);

		if ($run) {
			echo "<script>alert('suc')</script>";
			header('location:dashboard.php');
		}else{
			echo "<script>alert('Not')</script>";
		}

?>