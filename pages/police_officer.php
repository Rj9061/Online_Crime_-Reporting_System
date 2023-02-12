<?php
include ("../database\db.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Police Officer</title>
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
	<div class="back3 pb-5" style="background-image: url(Photos/background/classyfabric2.png);">
		<div class='container-fluid content row justify-content-around'>
		<?php
						$select="select * from add_police_officer";
						$run=mysqli_query($con,$select);
						while ($row=mysqli_fetch_array($run)) {
							$name=$row['Name'];
							$image=$row['Photo'];
							$designation=$row['Designation'];
       					 	$phone_number=$row['Phone_Number'];
        					$email=$row['Email_Address'];
        					$city=$row['City'];

					echo "
		
			<div class='row police_officer col-lg-5 pt-2 pb-2 mt-5'>
				<div class='photo col-lg-4'>
					<img src='Photos\police_officer/$image'>
				</div>
				<div class='police_officer_details col-lg-7 row ms-auto pt-3'>
					<div class='col-lg-6'>	
						<h5>Name:</h5><P>$name</P>
						<h5>Designation:</h5><P>$designation</P>
						<h5>City/District:</h5><P>$city</P>
					</div>
					<div class='col-lg-6'>
						<h5>Mobile Number:</h5><p>$phone_number</p>
						<h5>Email:</h5><p>$email</p>
					</div>
				</div>
			</div>
		
		"; }
		?>
		</div>
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

</html>