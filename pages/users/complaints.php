<?php
include ("../../database\db.php");
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
		<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php
		include ("../../links/alllinks.php");
		include ("../../functions.php");

	?><link rel="stylesheet" type="text/css" href="..\..\links\des.css">
	<style>
		body { padding-top: 80px; }
	</style>
</head>
<body  id="opa">
	<!-- Navbar Start -->
	
	<nav class="navbar navbar-expand-lg navbar-light  fixed-top header">
				  <div class="container-fluid">
				    <a href="" class="index">
						<img src="Photos\logo\logo.png" alt="shop-logo" class="logo"  filter-color="blue" >
					</a>
				    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
				    <div class="collapse navbar-collapse" id="navbarSupportedContent">
				      <ul class="navbar-nav ms-auto text-center">
				 <li class="nav-item ">
				   <a class="" aria-current="page" href="../../index.php" style="color: #009bd9; ">Home</a>
				 </li>

				 <?php
				 if (isset($_SESSION['customer_email'])) {
						echo '
						<li class="nav-item admin">
							<div class="dropdown ">
								 <button class="dropdown-toggle" type="" id="dropdownMenuButton1" data-toggle="dropdown">
								   Add Complaints
								 </button>
								 <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
								   <li><a class="dropdown-item" href="../register_complaints.php">Register Your Complaint</a></li>
								   <li><a class="dropdown-item" href="complaints.php">View Complaints</a></li>
								 </ul>
							</div>
						</li>
						';
						}
					
				
				 

					if (isset($_SESSION['customer_email'])) {
						echo "
						<li class='nav-item admin'>
						<i class=fa fa-user></i>
				   				 <a class='' href='profile.php'>Profile</a>
				   		</li>
				   		";
					}else{
					}	
				
				
				
				  
				   		echo '<li class="nav-item">';
						if (!isset($_SESSION['customer_email'])) {
							echo "<a href='#loginbox' onclick='showPopUp();'>User Login</a>";
						}else{
							echo "<a href='../logout.php'>Logout</a>";
						}
						echo '</li>';	
					
				 
				
				

					if (!isset($_SESSION['customer_email'])) {
						echo "
						<li class='nav-item admin'>
						<i class=fa fa-user></i>
				   				 <a class='' href='#'>Admin</a>
				   		</li>
				   		";
					}else{
					}	
				
				echo "
				</ul>
				    </div>
				  </div>
				</nav>
		";
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
				        <a href="../pages.php?safetytips"><li>Safety Tips</li></a>
				      <li class="nav-item">
				       <a href="../pages.php?initiatives"><li>Initiatives</li></a>
				      </li>
				      <li class="nav-item">
				       <a href="../pages.php?downloads"><li>Downloads</li></a>
				      </li>
				      <li class="nav-item">
				       <a href="../pages.php?aboutus"><li>About US</li></a>
				      </li>
				      <li class="nav-item">
				       <a href="../pages.php?contactus"><li>Contact US</li></a>
				      </li>
				    </ul>
				  </div>
		 	</div>
		</nav>
	</div>
	<!-- New Navbar End -->
	<!-- content -->

	
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
		<div class="col-lg-9 col-md-9 col-sm-9">
			<div class="card complaints">
			  	<div class="card-header">
			  		<span>View All </span> <span> Complaints</span>
			  	</div>
				<div class="card-body table-responsive">
				    <table id="complaint_data" class="table table-striped table-hover table-bordered">
					  <thead>
					  	<tr>
					  		<th>Complaint-ID</th>
					  		<th>Subject</th>
					  		<th>Complaint Date</th>
					  		<th>Police Station</th>
					  		<th>Status</th>
					  		<th>View</th>
					  	</tr>
					  </thead>
					  <tbody>
					  	<?php
					  		$session_email=$_SESSION['customer_email'];
					  		$fetch="select * from complaints where session_mail='$session_email'";
					  		$run=mysqli_query($con,$fetch);

					  		while ($row=mysqli_fetch_array($run)) {
					  			$com_id=$row['complaint_id'];
					  			$sub=$row['subject'];
					  			$reg_date=$row['regisration_date'];
					  			$police_station=$row['Police_Station_Name'];
								echo "
									<tr>
								  		<td>$com_id</td>
								  		<td>$sub</td>
								  		<td>$reg_date</td>
								  		<td>$police_station</td>
								  		<td>pending</td>
								  		<td><button  id='$com_id' onclick='showModel();' class='btn btn-info text-white p-1 Modelbtn'>View</button>
								  		</td>
								  	</tr>
									";
					  		}
					  	?>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Model -->
<div id="complaintModel" class="complaintModel col-lg-7 col-md-7">
	<div class="card">
		<div class="card-header">
			<h4 class="text-white">View Complaints</h4>
			<i onclick="CloseModel();" class="fas fa-times"></i>
		</div>
		<div class="card-body">
			<div class="row p-4" id="ModelBody">
				
			</div>
		</div>
	</div>
</div>
<!-- Model End -->
	<!-- Footer Start -->
		<div class="footer" style="overflow-x:hidden;">
			<div class="footertop row" style="background-image: url(Photos/background/classyfabric1.png);">
				<div class="row justify-content-center mt-5">
					<div class="col-lg-3 col-md-3">
						<h4 class="widgettitle">ABOUT US</h4>
						<p style="font-size: 20px;margin-top: 20px; text-align: justify; color: white;">Valsad Police shall ensure the Rule of Law, enforce the law of the land impartially and firmly without fear or favour, and strive to create a fear free environment that is conducive to growth and development.</p>
      					 <a href="pages/pages.php?aboutus" style="text-decoration:none; color: #EBFF00; float: right;">READ MORE.. &rarr;</a><br><br> 
					</div>
					<div class="links col-md-3 col-lg-3">
						<h4 class="widgettitle ">SITEMAP</h4>
						<div class="row">
							<ul class="mt-2 d col-md-6">
								<li><a href="">SPECIAL UNIT</a></li>
								<li><a href="">SAFETY TIPS</a></li>
								<li><a href="">INITIATIVES</a></li>
								<li><a href="">COMPLAINTS</a></li>
							</ul>
							<ul class="mt-2 col-md-6">
								<li><a href="">DOWNLOADS</a></li>
								<li><a href="">DOWNLOADS</a></li>
								<li><a href="">CONTACT US</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="footerbottom row">
				<div class="row mt-3">
					<p>© 2021 . All rights reserved. Theme by Ritesh Suthar & Rajan Sah.</p>
				</div>
			</div>
		</div>
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
 <script>
 function showModel(){
  var popup_box = document.getElementById('complaintModel');
  popup_box.style.display="block";
   /*For Opacity of Background*/
  var OpacityBack = document.getElementById('opa');
  OpacityBack.style.opacity="0.95";
}


function CloseModel(){
  var popup_box = document.getElementById('complaintModel');
  popup_box.style.display="none";
   /*For Opacity of Background*/
  var OpacityBack = document.getElementById('opa') ;
  OpacityBack.style.opacity="1";
}
</script>

<!-- ajax to call Model Data -->
<script>
				$(document).ready(function(){
				  $("button").click(function(){
				    complaint_id=$(this).attr("id");
				    if (complaint_id != '') {
				    	$.post("complaint_model.php",{
				    		complaint_id:complaint_id
				    	},function (data,status) {
				    		$('#ModelBody').html(data);
				    	})
				    }
				  });
				});
				</script>

 <script>  
$(document).ready(function(){  
     $('#complaint_data').DataTable();  
});  
</script> 
</html>



