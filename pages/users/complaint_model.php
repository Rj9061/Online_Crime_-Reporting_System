<?php
include ("../../database\db.php");
session_start();
?>
<div class="col-lg-6 col-md-6 content">
			<?php
				$complaint_id=$_POST['complaint_id'];

				$select="select * from complaints where complaint_id='$complaint_id'";
				$run=mysqli_query($con,$select);
				while($row=mysqli_fetch_array($run)){
					$comp_id=$row['complaint_id'];
					$police_station=$row['Police_Station_Name'];
					$crime_date=$row['crime_date'];
					$subject=$row['subject'];
					$details=$row['details'];
					$citizen_name=$row['citizen_name'];
					$citizen_address=$row['citizen_address'];
					$citizen_phone=$row['citizen_phone_no'];
					$citizen_email=$row['citizen_email'];
					$suspect=$row['suspect'];
					$reg_date=$row['regisration_date'];
				
			?>	
					<div>
						<span>Complaint ID : </span> <span><?php echo $comp_id; ?></span>
					</div>
					<div>
						<span>Police Station :</span> <span><?php echo $police_station; ?></span>
					</div>
					<div>
						<span>Subject :</span> <span><?php echo $subject; ?></span> 
					</div>
					<div>
						<span>Details :</span> <span><?php echo $details; ?></span>
					</div>
					<div>
						<span>Evidence :</span> <span><?php echo "XXXXXXX"; ?></span>
					</div>
					<div>
						<span>Citizen Contact No :</span> <span><?php echo $citizen_phone; ?></span>
					</div>
					<div>
						<span>Complaint Status :</span> <span><?php echo "pending"; ?></span>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 content">
					<div>
						<span>Citizen Name :</span> <span><?php echo $citizen_name; ?></span>
					</div>
					<div>
						<span>Complaint Date :</span> <span><?php echo $reg_date; ?></span>
					</div>
					<div>
						<span>Citizen Address :</span>  <span><?php echo $citizen_address; ?></span>
					</div>
					<div>
						<span>Citizen Email-ID :</span> <span><?php echo $citizen_email; ?></span>
					</div>
					<div>
						<span>Crime Date :</span>  <span><?php echo $crime_date; ?></span>
					</div>
				</div>
				<?php
				}
				?>