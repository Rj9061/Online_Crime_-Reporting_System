<?php
include ("../database\db.php");
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Police Station</title>
		<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php
		include ("../links/alllinks.php");
		include ("../functions.php");

	?><link rel="stylesheet" type="text/css" href="..\links\des.css">
	<style>
		body { padding-top: 80px; }
		.bod{
	background: red;
}

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
						
						$select="select * from add_polce_station";
						$run=mysqli_query($con,$select);
						while ($row=mysqli_fetch_array($run)) {
							$name=$row['Police_Station_Name'];
							$address=$row['Address'];
							$Phone=$row['Phone'];
       					 	$Map=$row['Map'];
       					 	$photo=$row['map_photo'];
       					 	$ID=$row['ID'];

       		echo "
			<div class='row police_station col-lg-5 pt-4 pb-2 mt-5' data-aos='fade-left' data-aos-offset='300' data-aos-easing='ease-in-sine'>
				<div class='photo col-lg-4'>
					<form method='GET'>
					<a href='police_station.php?id=$ID' name='show'><i class='fas fa-arrows-alt' ></i></a>
					<a href='police_station.php?id=$ID'><img src='Photos/police_station/$photo'></a>
					<h4>Click to Show Map<h4>
					</form>
				</div>
				<div class='police_station_details col-lg-7 row ms-auto pt-3'>
					<div class='col-lg-6'>	
						<h5>Name:</h5><P>$name</P>
						<h5>Address:</h5><P>$address</P>
						<h5>Phone:</h5><P>$Phone</P>
					</div>
				</div>
			</div>
		
		"; 
       		
					
			}


		?>

		</div>
		<div class="map">
			<div class="content">
				
				<?php
			if (isset($_GET['id'])) {
					if ($_GET['id']) {
						$ID=$_GET['id'];
						
									$select="select * from add_polce_station where ID='$ID'";
									$run=mysqli_query($con,$select);
									while ($row=mysqli_fetch_array($run)) {
										$name=$row['Police_Station_Name'];
										$address=$row['Address'];
										$Phone=$row['Phone'];
			       					 	$Map=$row['Map'];
			       					 	$photo=$row['map_photo'];
			       					 	$ID=$row['ID'];

								echo "
									<i class='fas fa-times'></i>
									$Map
					"; }

					}
				}else{
					
				}	
			
			?>
			</div> 
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
	$(document).ready(function(){
	  $(".fas").click(function(){
	    $(".map .content").css("display", "none");
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
</html>