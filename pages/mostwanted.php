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
	<div class="back3 pb-5" style="background-image: url(Photos/background/classyfabric2.png);">
		<div class="content">
			<section class="pt-5 container">
				<div class='row justify-content-center'>
					<div class="mostwanted" data-aos="fade-right"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
						<h3 >Most Wanted Criminal</h3>
					</div>
					<?php
						$select="select * from add_mostwanted_criminal";
						$run=mysqli_query($con,$select);
						while ($row=mysqli_fetch_array($run)) {
							$name=$row['Name'];
							$image=$row['image'];
					echo "
					<div class='card criminal col-md-2 col-lg-2' data-aos='zoom-in' data-aos-duration='1300'>
						<div class='card-header'>
			 				<img src='Photos/mostwanted/$image'>
			 			</div>

						<div class='text text-center card-title title'>
							<h3>
								$name
							</h3>
						</div>
					</div>
					";
						}
					
					?>
				</div>
				<div>
			</section>
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