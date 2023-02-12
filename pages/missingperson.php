<?php
include ("../database\db.php");
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Safety tips</title>
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
	<!-- New Navbar End -->

	<!-- Content -->	
	<div class="back3 pb-5 missing_person" style="background-image: url(Photos/background/classyfabric2.png);">
		<center>
			<h5 class="pt-5 missing_head">Missing Persons..</h5>
			<div class="col-md-6 pt-4 container missing">
				<div class="complaint_data_wrapper bg-white p-3">
				   <div class="table-responsive">
					<table id="complaint_data" class="table table-striped table-bordered table-hover bg-light">
					  <thead>
					    <tr>
					      <th>#</th>
					      <th>Person ID</th>
					      <th>First Name</th>
					      <th>Last Name</th>
					      <th>Get Details</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php
					  		$n=0;
					  		$select="select * from missing_person";
							$run=mysqli_query($con,$select);
							while ($row=mysqli_fetch_array($run)) {
								$n++;
								$per_id=$row['person_id'];
								$f_name=$row['first_name'];
								$l_name=$row['last_name'];
								echo "
						
					    <tr>
					      <td>$n</td>
					      <td>$per_id</td>
					      <td>$f_name</td>
					      <td>$l_name</td>
					      <td><a href='missingperson.php?id=$per_id'><i class='fas fa-angle-right text-info'></i><i class='fas fa-angle-right text-warning'></i></a></td>
					    </tr>
					    ";
					    	}
					  	?>
					  </tbody>
					</table>
				   </div>
				</div>
			</div>
		</center>
		<!-- missing person Details -->
		<div class='col-lg-8 missing_person_details col-md-3 col-sm-8 container'>
			<div class='row'>		
			<?php
			  if (isset($_GET['id'])) {
				if ($_GET['id']) {
					$per_id=$_GET['id'];
											
						$select="select * from missing_person where person_id='$per_id'";
						$run=mysqli_query($con,$select);
						while ($row=mysqli_fetch_array($run)) {
							$per_id=$row['person_id'];
							$f_name=$row['first_name'];
							$l_name=$row['last_name'];
							$fat_name=$row['father_name'];
							$rel_name=$row['relative_name'];
							$DOB=$row['Age'];
							$photo=$row['photo'];
							$address=$row['address'];
							$mis_date=$row['missing_date'];
							$phone=$row['phone'];
							$fat_phone=$row['father_phone_number'];

							echo "
						       
								        <div class='left-side col-lg-4 ju'>
								             <div class='photo col-lg-12'>
								                <img src='../pages/Photos/missing_person/$photo' class='img-fluid bg-white img-thumbnail'>
								            </div>
								            <div class='col-lg-12 text-center mt-4'>
								                <h1>$f_name $l_name</h1>
								            </div>
								        </div>
								        <div class='right-side bg-white col-lg-8'>
								        	<a href='missingperson.php'><div class='closelogo'><img src='../pages/Photos/logo/close.png'></div></a>
								            <div class='head'>
								                <h3>About</h3>
								            </div>
								            <div class='info row'>
								                <div class='col-one col-lg-6 mt-3'> 
								                    <li><strong>First Name:</strong> $f_name<br></li>
								                    <li><strong>Father Name:</strong> $fat_name<br></li>
								                    <li><strong>Birthday:</strong> $DOB<br></li>
								                    <li><strong>Address</strong> $address <br></li>
								                    <li><strong>Father Phone Number:</strong> $phone</li>   
								                </div>
								                <div class='col-two col-lg-6 mt-3'>
								                    <li><strong>Last Name:</strong> $l_name<br> </li>
								                    <li><strong>Relative Name:</strong> $rel_name<br></li>
								                    <li><strong>Missing Date:</strong> $mis_date<br></li>
								                    <li> <strong>Person Phone Number:</strong> $fat_phone</li>
								                </div>
								            </div>
								        </div>
								   
						        	"; }

										}
									}else{					
									}				
								?>
						    </div>
						</div>
						
					<!-- End -->
				</div>
				<!-- Content End -->
				<!-- login -->
				<?php
					include ("login_for_pages.php");
				?>
				<!-- End Login -->
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
    $(document).ready(function(){
      $('.closelogo').click(function(){
        $('.missing_person_details').addClass('closeMissing');
      });
    });
</script>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
 </script>
 <script>
      const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const contain = document.querySelector(".contain");

sign_up_btn.addEventListener("click", () => {
  contain.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  contain.classList.remove("sign-up-mode");
});

 </script>

 <script>
 function showPopUp(){
  var popup_box = document.getElementById('loginbox');
  popup_box.style.display="block";
}


function ClosePopUp(){
  var popup_box = document.getElementById('loginbox');
  popup_box.style.display="none";
}
</script>
 <script>  
$(document).ready(function(){  
     $('#complaint_data').DataTable();  
});  
</script> 
</html>