<?php
include ("../database\db.php");
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register Complaints</title>
		<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php
		include ("../links/alllinks.php");
		include ("../functions.php");

	?><link rel="stylesheet" type="text/css" href="..\links\des.css">
	<style>
		body { padding-top: 80px; }
	</style>
</head>
<body>
	<!-- Navbar Start -->
	
	<?php
		navbar();
	?>

	<!-- Navbar End-->
	<!-- New Navbar -->
	<div class="newnavbar">
		<nav class="navbar navbar-expand-lg navbar-light">
		 	<div class="container">
		 		 <button class="navbar-toggler bg-white ms-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
				  <div class="collapse navbar-collapse" id="navbarNav">
				    <ul class="navbar-nav navitems">
				      <li class="nav-item active">
				        <a href="maps.php"><li>Maps</li></a>
				      <li class="nav-item">
				       <a href="police_station.php"><li>Police Station</li></a>
				      </li>
				      <li class="nav-item">
				       <a href="mostwanted.php"><li>Most Wanted</li></a>
				      </li>
				      <li class="nav-item">
				       <a href="police_officer.php"><li>Police Officer</li></a>
				      </li>
				      <li class="nav-item">
				       <a href="missingperson.php"><li>Missing Persons</li></a>
				      </li>
				      <li class="nav-item">
				       <a href="complaints.php"><li>Complaints</li></a>
				      </li>
				    </ul>
				  </div>
		 	</div>
		</nav>
	</div>
<div class="back4 pt-5 "  id="nav" style="background-image: url(Photos/background/classyfabric2.png); overflow: hidden;">
	<div class="row container-fluid">
		<div class="col-lg-3 col-md-3 col-sm-3 sidelinks">
				<div class="card innercard" data-aos="fade-left"  data-aos-duration="1000">
					<div class="card-header innercardheader text-center">
						<h3 class="d-inline ml-5">News</h3>
						<h3 class="d-inline "> Update</h3>
					</div>
					<div class="card-body">
						<ul id="news">
							<?php
								$get="select * from newsticker";
								$run=mysqli_query($con,$get);
								while ($row=mysqli_fetch_array($run)) {
									$news=$row['news'];

									echo "<li><a href=''>$news </a></li>";
								}
							?>
						</ul>
					</div>
				</div>
		</div>
		<div class=" col-lg-9 col-md-9 col-sm-9">
			<div class="card complaints">
				<div class="card-header text-center">
					<span>Register Your </span> <span>  Complaints</span>
				</div>
				<div class="card-body p-5">
					<div>
						<form method="POST" enctype="multipart/form-data">
							<div class="row mb-5">
								<div class="col-lg-2 col-md-2 mt-1">
									<label class="form-label">Select Police Station</label>
								</div>
								<div class="col-lg-10 col-md-10">
									<select class="form-select form-selectl-lg" required name="police_station" aria-label="Default select example">
									<!-- Get Police Stations -->
									<?php
										$fetch="select * from add_polce_station";
										$run=mysqli_query($con,$fetch);
										while ($row=mysqli_fetch_array($run)) {
											$police_station=$row['Police_Station_Name'];
											echo "
												 <option selected>$police_station</option>
											";
										}
									?>
									</select>
								</div>
							</div>
							<hr>
							<div class="mt-4 justify-content-between">
								<div>
									<i>Details Of Complaints</i>
								</div>
								<div class="row mt-3">
									<div class="col-lg-1 col-md-1">
										<label>Suspect Name</label>
									</div>
									<div class="col-lg-11 col-md-11">
										<input type="text" class="form-control" name="suspect">
									</div>
								</div>
								<div class="row justify-content-between">
									<div class="col-lg-6 col-md-6 row mt-4">
										<div class="col-lg-2 col-md-2 mt-1">
											<label>Date</label>
										</div>
										<div class="col-lg-10 col-md-10">
											<input type="date" class="form-control" name="date" required>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 mt-4	 row">
										<div class="col-lg-2 col-md-2 mt-1">
											<label>Evidence</label>
										</div>
										<div class="col-lg-10 col-md-10">
											<input type="file" name="evidence" class="form-control" required>
										</div>
									</div>
								</div>
							</div>
							<div class="mb-4">
								<div class="row mt-3">
									<div class="col-lg-1 col-md-1">
										<label>Subject</label>
									</div>
									<div class="col-lg-11 col-md-11">
										<input type="text" class="form-control" name="subject" required>
									</div>
								</div>
								<div class="row mt-3">
									<div class="col-lg-1 col-md-1">
										<label>Details</label>
									</div>
									<div class="col-lg-11 col-md-11">
										<textarea name="details" class="form-control" required></textarea>
									</div>
								</div>
							</div>
							<hr>
							<div class="mt-4">
							<?php
								$session_email=$_SESSION['customer_email'];

								$fetch="select * from users where user_email='$session_email'";
								$run=mysqli_query($con,$fetch);
								while ($row=mysqli_fetch_array($run)) {

							?>		
								<i>Citizen Details</i>
								<div class="row mt-4 justify-content-between">
								
									<div class="col-lg-6 col-md-6 row mt-2">
										<div class="col-lg-3 mt-1">
											<label>Name</label>
										</div>
										<div class="col-lg-9 col-md-9">
											<input type="text" value="<?php echo $row['user_name']; ?>" class="form-control" name="name" required>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 mt-2 row">
										<div class="col-lg-3 mt-1">
											<label>Address</label>
										</div>
										<div class="col-lg-9 col-md-9">
											<textarea name="address" class="form-control" required><?php echo $row['address']; ?></textarea>
										</div>
									</div>
								</div>
								<div class="row mt-4 justify-content-between">
								
									<div class="col-lg-6 col-md-6 row mt-2">
										<div class="col-lg-3 col-md-3 mt-1">
											<label>Phone No</label>
										</div>
										<div class="col-lg-9 col-md-9">
											<input type="text" class="form-control" value="<?php echo $row['user_phone_number']; ?>" name="phone" required>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 mt-2 row">
										<div class="col-lg-3 col-md-3 mt-1">
											<label>Email-Id</label>
										</div>
										<div class="col-lg-9 col-md-9">
											<input type="text" value="<?php echo $row['user_email']; ?>" class="form-control" name="email" required>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 mt-5 row">
										<div class="col-lg-3 col-md-3 mt-1">
											<label>Gender</label>
										</div>
										<div class="col-lg-9 col-md-9">
											<input type="text" value="<?php echo $row['gender']; ?>" class="form-control" name="gender" required>
										</div>
									</div>
								</div>
							</div>
							<?php
								}
							?>
							<div class="mt-5 text-center">
								<input type="submit" name="submit" class="btn btn-success" value="Submit"></input>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="reset" class="btn btn-warning" value="Reset"></input>
							</div>
						</form>
					</div>					
				</div>
			</div>	
		</div>
	</div>
</div>
<?php
if (isset($_POST['submit'])) {
	$police_station=$_POST['police_station'];
	$suspect=$_POST['suspect'];
	$date=$_POST['date'];
	$evidence=$_FILES['evidence']['name'];
	$temp_name=$_FILES['evidence']['tmp_name'];
	move_uploaded_file($temp_name, "photos/evidence/$evidence");
	$subject=$_POST['subject'];
	$details=$_POST['details'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$complaint_id=rand();
	$gender=$_POST['gender'];

	/*FETCH USER DETAILS*/
	$session_email=$_SESSION['customer_email'];

	$fetch="select * from users where user_email='$session_email'";
	$run=mysqli_query($con,$fetch);
	while ($row=mysqli_fetch_array($run)) {
	$check_address=$row['address'];
	$checkid=$row['aadhar'];

	if (!empty($check_address) AND !empty($checkid) AND !empty($row['photo'])) {
		$insert="INSERT INTO complaints(Police_Station_Name, crime_date, evidence, subject, details, citizen_name, citizen_address, citizen_phone_no, citizen_email,suspect,complaint_id,session_mail,regisration_date,gender) VALUES ('$police_station','$date','$evidence','$subject','$details','$name','$address','$phone','$email','$suspect','$complaint_id','$session_email',now(),'$gender')";
		$query=mysqli_query($con,$insert);
		echo '<script>swal("Great!", "You have Successfully Register Your Complaints!", "success").then(function() {
                              window.location = "users/complaints.php";
                          });
              </script>';
	}else{
		echo '
		<script>
			swal({
			    title: "First, Complete your full Profile",
			    button: "Click to Fill Profile.",
			}).then(function() {
			    window.location = "users/profile.php";
			});
		</script>
		';
	}
}
}
?>
<!-- Footer Start -->
	<?php
		footer();
	?>
<!-- Footer End -->
</body>
<script>
	  AOS.init();
</script>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
<script type="text/javascript">



	function startTicker()
	{
		$("#news li:first").slideDown(function(){
			
			$(this).appendTo($("#news")).slideDown();
			});
		
	}
	setInterval(startTicker, 2500);	
 
	
</script>
</html>