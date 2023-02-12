
<!-- Connect Database -->
<?php
	include ("../database\db.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>


	<style>
	.table-bordered{
		border: 1px solid #e9ecef;
	}
	.table.dataTable.no-footer{
		border: 1px solid #e9ecef;
	}
	.table.dataTable{
		border-collapse: collapse;
	}
	.table thead{
		border-width: unset;
	}
	.station_table{
		display: none;
		position: absolute;
		z-index: 99999;
		top: 10%;
		box-shadow: 0 0.46875rem 2.1875rem rgb(31 10 6 / 3%), 0 0.9375rem 1.40625rem rgb(31 10 6 / 3%), 0 0.25rem 0.53125rem rgb(31 10 6 / 5%), 0 0.125rem 0.1875rem rgb(31 10 6 / 3%);
		margin-right: 30px;
		background: #fff;
	}
	</style>
</head>
<body>
	<div class="p-4 station_table mt-4" id="station_table">
		<div class="back_option mb-3">
			<button class="btn btn-secondary"><a href="dashboard.php" class="text-white">Back</a></button>
		</div>
		<div class="table-responsive">
			<h5 class="mb-3 text-muted">Police Stations</h5>
			<table id="station_data" class="table table-bordered table-striped table-hover table-responsive">
				<thead class="table_header">
					<tr>
						<th class="text-nowrap">Name</th>
						<th class="text-nowrap">Address</th>
						<th class="text-nowrap">Phone Number</th>
						<th class="text-nowrap">Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php

					$fetch="select * from add_polce_station";
					$run=mysqli_query($con,$fetch);
					while($row=mysqli_fetch_array($run))
					{
					$name=$row['Police_Station_Name'];
					$address=$row['Address'];
					$phone=$row['Phone'];
					$ID=$row['ID'];
					echo "
					<tr>
						<td class='text-nowrap'>$name</td>
						<td class='text-nowrap'>$address</td>
						<td class='text-nowrap'>$phone</td>
						<td class='text-nowrap'><form method='GET'><button class='btn btn-danger'><a href='police_station_popup.php?station_id=$ID' class='text-white' >Delete</a></button></form></td>
					</tr>
					";
					}
					?>
				</tbody>
			</table>
		</div>
		<div class="text-center text-danger ">Double Click to Delete</div>
	</div>
	
	<?php
	if (isset($_GET['station_id'])) {
	
		$delete_id=$_GET['station_id'];
		$delete="DELETE FROM add_polce_station WHERE ID='$delete_id'";
		$run=mysqli_query($con,$delete);

		if ($run) {
			echo '<script>alert("deleted Success");</script>';
			echo '<script>window.location = "dashboard.php";</script>';
			
		}else{
			echo "<script>alert('Not')</script>";
		}
	}
	?>
</body>
<!-- table plugin for search and sorting -->
<script>  
$(document).ready(function(){  
     $('#station_data').DataTable({
     } ); 
});   
</script> 

</html>
