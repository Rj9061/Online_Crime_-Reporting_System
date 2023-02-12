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
	<div class="back4 pt-5"  id="nav" style="background-image: url(Photos/background/classyfabric2.png); overflow: hidden;">
		<div class="row container-fluid ">
			<div class="col-lg-3 col-md-3 sidelinks">
				<div class="card innercard text-center" data-aos="fade-left"  data-aos-duration="1000">
					<div class="card-header innercardheader">
						<h3 class="d-inline ml-5">Important</h3>
						<h3 class="d-inline "> Link</h3>
					</div>
					<div class="card-body">
						<ul>
							<li><a href="..\pages.php?safetytips">SAFETY TIPS</a></li>
							<li><a href="..\pages.php?initiatives">INITIATIVES</a></li>
							<li><a href="">COMPLAINTS</a></li>
							<li><a href="..\pages.php?downloads">DOWNLOADS</a></li>
							<li><a href="..\pages.php?aboutus">ABOUT US</a></li>
							<li><a href="..\pages.php?contactus">CONTACT US</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class=" col-lg-9 col-md-9">
				<div class="card">
					<div class="card-header text-center">
						<h4>User <span> Profile</span></h4>
					</div>
					<div class="card-body">
						<div class="row">
							<!-- PHP CODE FOR DISPLAY DETAILS-->
								<?php

								$session_email=$_SESSION['customer_email'];

								$fetch="select * from users where user_email='$session_email'";
								$run=mysqli_query($con,$fetch);

								while($row=mysqli_fetch_array($run))
								{
									// check Gender
									if(empty($row['gender'])){
										$gender="XXXXXXXX";
									}else{
										$gender=$row['gender'];
									}

									//check address
									if(empty($row['address'])){
										$address="XXXXXXXX";
									}else{
										$address=$row['address'];
									}

									//check state
									//check address
									if(empty($row['state'])){
										$state="XXXXXXXX";
									}else{
										$state=$row['state'];
									}

									//check aadhar
									if(empty($row['aadhar']))
									{
										$aadhar="XXXXXXXX";
									}else{
										$aadhar=$row['aadhar'];
									}

									$photo=$row['photo'];
									?>
							<div class="col-lg-3 col-md-2 image">
								<?php echo "<img src='Photos/users_images/$photo' alt='ADD YOUR PROFILE' class='img-fluid'>"; ?>
							</div>
							<div class="col-lg-9 col-md-9 pt-2">
								<div class="head row container-fluid">
								<h3><?php echo $row['user_name']; ?></h3>
								</div>
								<div class="row container-fluid mt-2">
									<label class="col-md-5">User Name:</label>
									<span class="col-md-6"><?php echo $row['user_name']; ?></span>
								</div>
								<div class="row container-fluid mt-2">
									<label class="col-md-5">Gender:</label>
									<span class="col-md-6"><?php echo $gender ?></span>
								</div>
								<div class="row container-fluid mt-2">
									<label class="col-md-5">D-O-B:</label>
									<span class="col-md-6"><?php echo $row['DOB']; ?></span>
								</div>
								<div class="row container-fluid mt-2">
									<label class="col-md-5">Address:</label>
									<span class="col-md-6"><?php echo $address ?></span>
								</div>
								<div class="row container-fluid mt-2">
									<label class="col-md-5">Contact No:</label>
									<span class="col-md-6"><?php echo $row['user_phone_number']; ?></span>
								</div>
								<div class="row container-fluid mt-2">
									<label class="col-md-5">Email Id:</label>
									<span class="col-md-6"><?php echo $row['user_email']; ?></span>
								</div>
								<div class="row container-fluid mt-2">
									<label class="col-md-5">State:</label>
									<span class="col-md-6"><?php echo $state ?></span>
								</div>
								<div class="row container-fluid mt-2">
									<label class="col-md-5">Id Proof (Aadhar Number):</label>
									<span class="col-md-6"><?php echo $aadhar ?></span>
								</div>
								<hr>
								<div class="col-sm-3 col-md-3" style="float: right;">
									<a href="#" data-role="update" onclick="showUpdatePopUp()" data-id="78" class="btn btn-warning a-btn-slide-text ">
			       						<span class=""></span>
			        					<span><strong>Update Your Full Profile</strong></span>            
			    					</a>
			    				</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Content End -->

	<!-- Model -->
	<div class="model col-lg-11 col-md-11" id="model">
		<div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Edit Profile</h4>
            <button type="button" onclick="CloseUpdatePopUp()" class="close border border-0 bg-white">×</button>
          </div>
          <form action="" method="post" class="row" enctype="multipart/form-data">
          
          <div class="modal-body col-lg-6 col-md-6 p-5">
              <div class="form-group">
              	<div class="form-group">
                 <label>Upload Profile Photo</label>
                 <input type="file" name="photos" class="form-control">
                </div>
                <label>Username</label>
                <input type="text" id="lastName" required="" value="<?php echo $row['user_name']; ?>" name="username" class="form-control">
              </div>

              <div class="form-group">
                <label>Password (optional)</label>
                <input type="password" id="password" pattern="^\S{6,}$" oninput="this.setCustomValidity('')"   name="password" class="form-control">
              </div>
              <div class="form-group">
                <label>Confirm Password (optional)</label>
                <input type="password" id="con_password" pattern="^\S{6,}$" oninput="this.setCustomValidity('')"  name="con_password" class="form-control">
                <span id='message'></span>
              </div>
              <div class="form-group">
                <label>D-O-B</label>
                <input type="date" id="dob" value="<?php echo $row['DOB']; ?>" name="dob" class="form-control">
              </div>
          </div>
          <div class="modal-body col-lg-6 col-md-6 p-5">
          	<div class="form-group">
                <label>Gender</label>
                <input type="text" id="gender" value="<?php echo $gender ?>" name="gender" class="form-control">
              </div>
              <div class="form-group">
                <label>Address</label>
                <input type="text" id="address" value="<?php echo $address ?>" name="address" class="form-control">
              </div>
              <div class="form-group">
                <label>State</label>
                <input type="text" id="state" value="<?php echo $state ?>" name="state" class="form-control">
              </div>
              <div class="form-group">
                <label>Contact No</label>
                <input type="text" id="phone" value="<?php echo $row['user_phone_number']; ?>" name="phone" class="form-control">
              </div>
              <div class="form-group">
                <label>ID Proof</label>
                <input type="text" id="identity" value="<?php echo $aadhar ?>" name="identity" class="form-control">
              </div>
             
             
             
                <input type="hidden" id="userId" name="id" class="form-control" value="78">


          </div>
          <div class="modalfooter">
          	<button type="button" class="btn btn-default border bg-light" style="float: left" data-dismiss="modal">Close</button>
            <button type="submit" id="save" name="saveData" style="float: right;" class="btn btn-success mb-3">Update</button>
          </div>
          </form>
        </div>
	<?php		
		}
	?>
	</div>

	<?php
		//Update Query

		if(isset($_POST['saveData'])){

		$session_mail=$_SESSION['customer_email'];
		$username=$_POST['username'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$address=$_POST['address'];
		$state=$_POST['state'];
		$phone=$_POST['phone'];
		$identity=$_POST['identity'];
		$session_email=$_SESSION['customer_email'];
		$fetch="select * from users where user_email='$session_email'";
		$run=mysqli_query($con,$fetch);
		$row = mysqli_fetch_array($run);

        // check photo
			if(empty($_FILES['photos']['name'])){
				$image=$row['photo'];
				$update="UPDATE users SET user_name='$username',user_phone_number='$phone', gender='$gender',DOB='$dob',address='$address',aadhar='$identity' ,photo='$image',state='$state' where user_email='$session_mail' ";

				$running=mysqli_query($con,$update);

				echo '<script>swal("Great!", "You have Successfully Updated Your Profile!", "success").then(function() {
                              window.location = "profile.php";
                          });</script>';
			}else{
				$image=$_FILES['photos']['name'];
        		$temp_image=$_FILES['photos']['tmp_name'];
        		move_uploaded_file($temp_image,"Photos/users_images/$image");
        		$update="UPDATE users SET user_name='$username',user_phone_number='$phone', gender='$gender',DOB='$dob',address='$address',aadhar='$identity' ,photo='$image',state='$state' where user_email='$session_mail' ";

				$running=mysqli_query($con,$update);

				echo '<script>swal("Great!", "You have Successfully Updated Your Profile!", "success").then(function() {
                              window.location = "profile.php";
                          });</script>';
			}
					
		if(empty($_POST['password']) OR empty($_POST['con_password'])){
			$password=$row['user_password'];
			$con_password=$row['user_confirm_password'];
			$passUpdate="UPDATE users SET user_password='$password' , user_confirm_password='$con_password' where user_email='$session_mail' ";
			$passRun=mysqli_query($con,$passUpdate);

			echo '<script>swal("Great!", "You have Successfully Updated Your Profile!", "success").then(function() {
                              window.location = "profile.php";
                          });</script>';
		}else{
			$password=$_POST['password'];
			$con_password=$_POST['con_password'];
			
			$passUpdate="UPDATE users SET user_password='$password', user_confirm_password='$con_password' where user_email='$session_mail'";
			$passRun=mysqli_query($con,$passUpdate);

			echo '<script>swal("Great!", "You have Successfully Updated Your Profile!", "success").then(function() {
                              window.location = "profile.php";
                          });</script>';
		}


	}
	?>


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

 <!-- For Login  -->
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

<!-- For Update Profile -->
 <script>
 function showUpdatePopUp(){
  var popup_box = document.getElementById('model');
  popup_box.style.display="block";

   	  /*For Opacity of Background*/
  var OpacityBack = document.getElementById('opa') ;
  OpacityBack.style.opacity="0.95";
}


function CloseUpdatePopUp(){
  var popup_box = document.getElementById('model');
  popup_box.style.display="none";

  	  /*For Opacity of Background*/
  var OpacityBack = document.getElementById('opa') ;
  OpacityBack.style.opacity="1	";
}

</script>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
 </script>



 	<script>
    var password = document.getElementById("password");
    var confirm_password = document.getElementById("con_password");

function validatePassword()
{
    if(password.value=="")
    {
        password.setCustomValidity("Passwords must not be empty");
    } 
    else if(password.value != confirm_password.value)
    {
        confirm_password.setCustomValidity("Passwords Don't Match");
    } 
    else
    {
      
    }
}
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
</html>



