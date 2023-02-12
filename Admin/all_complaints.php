
<head>
	<meta charset="utf-8">
	<title>All Cases</title>
	<?php
		include ("../links/alllinks.php");
	?>
	<style>
	body{
		background: #e8e8e8;
	}
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
	.dataTables_length{
		margin-bottom: 20px;
	}
	.cases_table{
		padding: 20px;
		background: #fff;
		background-clip: border-box;
	    border: 1px solid #dee2e6;
	    border-radius: .25rem;
	}
	#complaint_data_wrapper{
		margin: 0;
		font-family: "Roboto",sans-serif;
		font-size: .9rem;
		font-weight: 400;
		opacity: .8;
	}
	
	.dataTables_wrapper .dataTables_filter input{
		padding: 3px;
		border: 1px solid #e9ecef;
	}
	.dataTables_wrapper .dataTables_length select{
		padding: 3px;
		border: 1px solid #e9ecef;
	}
	.dataTables_wrapper .dataTables_info , .dataTables_wrapper .dataTables_paginate{
		margin-top: 15px;
	}
	.dataTables_wrapper .dataTables_paginate{
		padding: 0;
		border: 1px solid #e9ecef;
		border-radius: 5px;
	}
	.dataTables_wrapper .dataTables_paginate .paginate_button{
		padding: .3rem .8rem;
		border-radius: 0;
		color: #da624a ! important;
	}
	.dataTables_wrapper .dataTables_paginate .paginate_button.current{
		background: #da624a ! important;
		border: none ! important;
    	border-color: #da624a;
		color: #fff ! important;
	}
	.dataTables_wrapper.no-footer .dataTables_scrollBody{
		border-bottom: unset;
	}
	.dataTables_wrapper.no-footer div.dataTables_scrollHead table.dataTable,.dataTables_wrapper.no-footer div.dataTables_scrollBody>table{
		border: 1px solid #e9ecef;
	}
	thead{
		background: #e0e0e0;;
	}
	.dataTables_scrollBody::-webkit-scrollbar {
        width: 3px;
        height: 8px;
    }

	/* Track */
	::-webkit-scrollbar-track {
	  background: #f1f1f1; 
	}
	 
	/* Handle */
	::-webkit-scrollbar-thumb {
	  background: #888; 
	}

	/* Handle on hover */
	::-webkit-scrollbar-thumb:hover {
	  background: #555; 
	}
	.emergency_table{
		padding: 20px;
		background: #fff;
		background-clip: border-box;
	    border: 1px solid #dee2e6;
	    border-radius: .25rem;
	}
	.emergency_table h5{
		opacity: .8;
	}
	</style>

	<div class="p-4 cases_table mt-4" id="complaints_table">
		<div class="table-responsive">
			<h5 class="mb-3 text-muted">Complaints</h5>
			<table id="complaint_data" class="table table-bordered table-striped table-hover table-responsive">
				<thead class="table_header">
					<tr>
						<th class="text-nowrap">Complaint_id</th>
						<th class="text-nowrap">Citizen Name</th>
						<th class="text-nowrap">Citizen Address</th>
						<th class="text-nowrap">Citizen Phone No</th>
						<th class="text-nowrap">Citizen Email</th>
						<th class="text-nowrap">Gender</th>
						<th class="text-nowrap">Crime Subject</th>
						<th class="text-nowrap">Crime Details</th>
						<th class="text-nowrap">Crime Date</th>
						<th class="text-nowrap">Suspect</th>
						<th class="text-nowrap">Fir Registration Date</th>
						<th class="text-nowrap">Police Station</th>
					</tr>
				</thead>
				<tbody>
					<?php

					$fetch="select * from complaints";
					$run=mysqli_query($con,$fetch);
					while($row=mysqli_fetch_array($run))
					{
					$complaint_id=$row['complaint_id'];
					$citizen_name=$row['citizen_name'];
					$citizen_address=$row['citizen_address'];
					$citizen_phone_no=$row['citizen_phone_no'];
					$citizen_email=$row['citizen_email'];
					$gender=$row['gender'];
					$subject=$row['subject'];
					$details=$row['details'];
					$crime_date=$row['crime_date'];
					$suspect=$row['suspect'];
					$registration_date=$row['regisration_date'];
					$Police_Station_Name=$row['Police_Station_Name'];
					echo "
					<tr>
						<td class='text-nowrap'>$complaint_id</td>
						<td class='text-nowrap'>$citizen_name</td>
						<td class='text-nowrap'>$citizen_address</td>
						<td class='text-nowrap'>$citizen_phone_no</td>
						<td class='text-nowrap'>$citizen_email</td>
						<td class='text-nowrap'>$gender</td>
						<td class='text-nowrap'>$subject</td>
						<td class='text-nowrap'>$details</td>
						<td class='text-nowrap'>$crime_date</td>
						<td class='text-nowrap'>$suspect</td>
						<td class='text-nowrap'>$registration_date</td>
						<td class='text-nowrap'>$Police_Station_Name</td>
					</tr>
					";
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
		<!-- Emergency Table -->
		<div class="emergency_table table-responsive mt-4">
			<h5 class="mb-3">Emergency Cases</h5>
			<table id="emergency_complaint_data" class="table table-bordered table-striped table-hover table-responsive mt-3">
				<thead class="table_header">
					<tr>
						<th class="text-nowrap">Complaint_id</th>
						<th class="text-nowrap">Citizen Name</th>
						<th class="text-nowrap">Gender</th>
						<th class="text-nowrap">Citizen Phone No</th>					
						<th class="text-nowrap">Crime Date</th>
						<th class="text-nowrap">Crime Details</th>
					</tr>
				</thead>
				<tbody>
					<?php

					$fetch="select * from emergency_complaints";
					$run=mysqli_query($con,$fetch);
					while($row=mysqli_fetch_array($run))
					{
					$complaint_id=$row['complaint_id'];
					$First_name=$row['First_name'];
					$Last_name=$row['Last_name'];
					$citizen_phone_no=$row['Mobile_no'];
					$gender=$row['Gender'];
					$details=$row['Description'];
					$crime_date=$row['DOO'];
					echo "
					<tr>
						<td class='text-nowrap'>$complaint_id</td>
						<td class='text-nowrap'>$First_name $Last_name</td>
						<td class='text-nowrap'>$citizen_phone_no</td>
						<td class='text-nowrap'>$gender</td>
						<td class='text-nowrap'>$details</td>
						<td class='text-nowrap'>$crime_date</td>
					</tr>
					";
					}
					?>
				</tbody>
			</table>
		</div>
	
</body>

<!-- table plugin for search and sorting -->
<script>  
$(document).ready(function(){  
     $('#complaint_data').DataTable({
     	 scrollX: 10
     } ); 

});  
$(document).ready(function(){  
     $('#emergency_complaint_data').DataTable();

});  
</script> 

