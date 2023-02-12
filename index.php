
<!-- Connect Database -->
<?php
	include ("database\db.php");

	include ("functions.php");
	session_start();
?>
<!-- End -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Crime Reporting</title>
	<!-- all cdn links of  bootstrap/javascript/jquery/sweetalert,etc-->
	<?php
		include ("links/alllinks.php");
	?>
	<link rel="stylesheet" type="text/css" href="links\des.css">
</head>
<body>
	<!-- Navbar Start -->
	
	<nav class="navbar navbar-expand-lg navbar-light  fixed-top header">
		<div class="container-fluid">
			<a href="" class="index">
				<img src="Photos\logo\logo.png" alt="shop-logo" class="logo"  filter-color="blue" >
			</a>
			<a href="" class="session_name">
				<?php
						if (!isset($_SESSION['customer_name'])) {
							echo "Welcome: Guest";
						}else{
							$session_email=$_SESSION['customer_email'];

							$fetch="select * from users where user_email='$session_email'";
							$run=mysqli_query($con,$fetch);
							while($row=mysqli_fetch_array($run))
								{
									echo "Welcome: " .$row['user_name'] ."";
								}
							}
					?>	
			</a>

				 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				   <span class="navbar-toggler-icon"></span>
				 </button>
			<div class="collapse navbar-collapse " id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto text-center">
				 <li class="nav-item ">
				   <a class="" aria-current="page" href="index.php" style="color: #009bd9; ">Home</a>
				 </li>

				 <!-- Complaints --> 
				 <?php

					if (isset($_SESSION['customer_email'])) {
						echo '
						<li class="nav-item admin">
							<div class="dropdown ">
								 <button class="dropdown-toggle" type="" id="dropdownMenuButton1" data-toggle="dropdown">
								   Add Complaints
								 </button>
								 <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
								   <li><a class="dropdown-item" href="pages/register_complaints.php">Register Your Complaint</a></li>
								   <li><a class="dropdown-item" href="pages/users/complaints.php">View Complaints</a></li>
								 </ul>
							</div>
						</li>
						';
						}
					?>
				<!-- Profile -->
				 <?php

					if (isset($_SESSION['customer_email'])) {
						echo "
						<li class='nav-item admin'>
						<i class=fa fa-user></i>
				   				 <a class='' href='pages/users/profile.php'>Profile</a>
				   		</li>
				   		";
					}else{
					}	
				?>
				<!-- Login and Logout -->
				<li class="nav-item">
				   <?php

						if (!isset($_SESSION['customer_email'])) {
							echo "<a href='#loginbox' onclick='showPopUp();'>User Login</a>";
						}else{
							echo "<a href='pages/logout.php'>Logout</a>";
						}	
					?>
				 </li>
				<!-- Admin Panel -->
				<?php

					if (!isset($_SESSION['customer_email'])) {
						echo "
						<li class='nav-item admin'>
						<i class='fa fa-user'></i>
				   				 <a class='' href='Admin/admin_login.php'>Admin</a>
				   		</li>
				   		";
					}else{
					}	
				?>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Navbar End-->

	<!-- Emergency complain Sidebar Start -->

	<div class="wrapper" style="overflow-x: hidden;">
		<!-- Carousel Start -->
			<div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active " data-bs-interval="4000">
			      <img class="d-block w-100" src="Photos\Carousel\1.jpg" alt="First slide">
			      <div class="carousel-caption d-none d-md-block">
				     <div id="arrow" >
					  	<a href="#content"><img class="mt-3" src="Photos/logo/arrow.png"></a>
					 </div>
				  </div>
			    </div>
			    <div class="carousel-item" data-bs-interval="4000">
			      <img class="d-block w-100" src="Photos\Carousel\3.jpg" alt="Second slide">
			      <div class="carousel-caption d-none d-md-block">
				   	<div id="arrow">
					  	<a href="#content"><img class="mt-3" src="Photos/logo/arrow.png"></a>
					 </div>
				  </div>
			    </div>
			    <div class="carousel-item" data-bs-interval="4000">
			      <img class="d-block w-100" src="Photos\Carousel\4.jpg" alt="Third slide">
			      <div class="carousel-caption d-none d-md-block">
				   	<div id="arrow">
					  	<a href="#content"><img class="mt-3" src="Photos/logo/arrow.png"></a>
					 </div>
				  </div>
			    </div>
			  </div>
			</div>
			<!-- Emergency complain Sidebar Start -->
			
			<div id="sidebar" class="">
				<div class="d-flex" >
					<div>
						<button type="button" id="sidebarCollapse" class="btn ">
             			<i class="fa fa-bars text-white"></i>
		              	</button>
		              	<div class="emergencytext">
		              		<h5 class="animate__animated animate__rubberBand" style="animation-delay: 1s">E</h5>
		             		<h5 class="animate__animated animate__rubberBand">M</h5>
		             		<h5 class="animate__animated animate__rubberBand">E</h5>
		             		<h5 class="animate__animated animate__rubberBand">R</h5>
		             		<h5 class="animate__animated animate__rubberBand">G</h5>
		             		<h5 class="animate__animated animate__rubberBand">E</h5>
		             		<h5 class="animate__animated animate__rubberBand">N</h5>
		             		<h5 class="animate__animated animate__rubberBand">C</h5>
		             		<h5 class="animate__animated animate__rubberBand">Y</h5>
		             		<h5 class="animate__animated animate__rubberBand">C</h5>
		             		<h5 class="animate__animated animate__rubberBand">O</h5>
		             		<h5 class="animate__animated animate__rubberBand">M</h5>
		             		<h5 class="animate__animated animate__rubberBand">P</h5>
		             		<h5 class="animate__animated animate__rubberBand">L</h5>
		             		<h5 class="animate__animated animate__rubberBand">A</h5>
		             		<h5 class="animate__animated animate__rubberBand">I</h5>
		             		<h5 class="animate__animated animate__rubberBand">N</h5>
		             		<h5 class="animate__animated animate__rubberBand">T</h5>		
		              	</div>
					</div>
					<div>
						<div class="insidesidebarform">	</div>
						<div class="insidesidebarcontent">
							<form class="row mt-2" method="POST">
							  <!-- 2 column grid layout with text inputs for the first and last names -->
							  <div class="row mb-3">
							  	 <!-- First Name input -->
							    <div class="col">
							      <div class="form-outline">
							        <input type="text" required="" name="first_name" class="form-control " />
							        <label class="form-label" for="form3Example1">First name</label>
							      </div>
							    </div>
							     <!-- Last Name input -->
							    <div class="col">
							      <div class="form-outline">
							        <input type="text" required="" name="last_name" class="form-control" />
							        <label class="form-label" for="form3Example2">Last Name</label>
							      </div>
							    </div>
							  </div>
							  <div class="row mb-3">
							  	<!-- Gender input -->
							   <div class="col">
							      <div class="form-outline">
							        <select class="custom-select mr-sm-2 form-control " required="" name="gender" >
								        <option selected>Gender...</option>
								        <option value="Male">Male</option>
								        <option value="Female">Female</option>
								        <option value="Transgender">Transgender</option>
								      </select>
								      <label class="form-label" for="form3Example2">Gender</label>
							      </div>
							    </div>
							     <!-- Date of Birth input -->
							    <div class="col">
							      <div class="form-outline">
							        <input type="Date" required="" name="date" class="form-control" />
							        <label class="form-label" for="form3Example2">Date of Birth <p>(Optional)</p></label>
							      </div>
							    </div>
							  </div>
							   <!-- Mobile Numgber input -->
							  <div class="row mb-2">
							    <div class="col">
							      <div class="form-outline">
							        <input name="mobile_number" required="" class="form-control" />
							        <label class="form-label" for="form3Example1">Mobile Number</label>
							      </div>
							    </div>
							     <!-- Date of Occurence input -->
							    <div class="col">
							      <div class="form-outline">
							        <input type="Date" required="" name="date_of_occurence" class="form-control" />
							        <label class="form-label" for="form3Example2">Date of Occurence <p>(Optional)</p></label>
							      </div>
							    </div>
							  </div>
							  <!-- Place of Occurence input -->
							  <div class="form-outline mb-3">
							    <input type="text" required="" name="place_of_occrence" class="form-control" />
							    <label class="form-label" for="form3Example3">Place of Occurence</label>
							  </div>

							  <!-- Description input -->
							  <div class="form-outline mb-3">
							    <input type="text" required="" name="description" class="form-control" />
							    <label class="form-label" for="form3Example3">Description</label>
							  </div>

							  <!-- Submit button -->
							  <div class="text-center">
							  	<button type="submit" name="entered" class="btn btn-primary btn-block mb-4 ">Submit</button>
							  </div>
							</form>
							<?php
								if (isset($_POST['entered'])) {
									$firstname=$_POST['first_name'];
									$lastname=$_POST['last_name'];
									$gender=$_POST['gender'];
									$DOB=$_POST['date'];
									$mobile=$_POST['mobile_number'];
									$DOO=$_POST['date_of_occurence'];
									$POO=$_POST['place_of_occrence'];
									$description=$_POST['description'];
									$complaint_id=rand();

									$insert="INSERT INTO emergency_complaints(First_name, Last_name, Gender, DOB, Mobile_no, DOO, POO, Description,complaint_id) VALUES ('$firstname','$lastname','$gender','$DOB','$mobile','$DOO','$POO','$description','$complaint_id')";
									$run=mysqli_query($con,$insert);

									if ($run) {
										echo "<script>alert('Your Complaints Registerd Successfully')</script>";
										echo "<script>window.open('index.php','_self')</script>";
									}else{
										echo "<script>alert('Your Complaints Not Registerd Successfully')<>";
										echo "window.open('index.php,'_self')";
									}
								}
							?>
						</div>
					</div>
				</div>
			</div>
			
		<!-- Emergency complain Sidebar End -->
		<!-- Carousel End -->
	</div>

	<center>
	<?php
		include ("pages/reg_log.php");
	?>
	<?php
		include ("pages/forget_password.php");
	?>
	</center>

	<div class="content row" id="content" style="overflow-x: hidden;"> 
		<div class="quote text-center">
			<img class="img1 animate__animated animate__fadeInTopLeft img-fluid" src="Photos\logo\seva.png">
			<img class="img2 animate__animated animate__rubberBand img-fluid" src="Photos\logo\shanti.png">
			<img class="img3 animate__animated animate__fadeInTopRight img-fluid" src="Photos\logo\suraksha.png">
		</div>
		<!-- WHOWEARE Start -->
		<div class="WHOWEARE"  style="background-image: url(Photos/background/classyfabric1.png);">
			<div class="container">
				<section>
				<div>
					<h1 class="head1" data-aos="fade-right"  data-aos-duration="1000">WHO</h1>
					<div class="angle">
						<span class=""></span>
						<h1 class="2h" data-aos="fade-left"  data-aos-duration="1000">WE ARE</h1>
					</div>
				</div>
				<div>
					<h2 data-aos="flip-up"  data-aos-duration="1500">we are the people who have responsibility to obey the law / respect authority.</h2>
				</div>
				</section>
			</div>
		</div>
		<!-- WHOWEARE End -->

		<!-- main content start -->
		<div class="maincontent ">
			<div class="back  row" style="background-image:url(Photos/background/classyfabric2.png);">
				<div class='col-md-3 col-lg-3 shade ' data-aos-duration="1000">
					<a href=''>
						<div class="image_sp"  data-aos="zoom-in-right">
		 					<img class='img-fluid' src='Photos\background\sp_valsad.jpg'>
		 				</div>
					</a>
					<div class='text text-center card-title title'>
						<h3>
								ACP Rajdeepsinh zala 
						</h3>
					</div>
				</div>
				<div class="col-lg-5 col-md-5 mission" >
					<h3 data-aos="flip-down" data-aos-duration="1000">Our Mission</h3>
					 <p data-aos="zoom-in">Vapi Police shall ensure the Rule of Law, enforce the law of the land impartially and firmly without fear or favour, and strive to create a fear free environment that is conducive to growth and development.</p>
					 <p data-aos="zoom-in">Vapi Police will remain committed to maintaining public order, preventing and detecting crime, maintaining and promoting communal harmony, ensuring a smooth flow of traffic, and taking strong action against terrorism, organized crime, anti-social / illicit activities / elements.</p>
				</div>
				<div class="col-lg-3 col-md-3 sidelinks mt-4">
					<div class="card innercard text-center" data-aos="fade-left"  data-aos-duration="1000">
						<div class="card-header innercardheader">
							<h3 class="d-inline ml-5">Important</h3>
							<h3 class="d-inline "> Link</h3>
						</div>
						<div class="card-body">
							<ul>
								<li><a href="pages\pages.php?safetytips">SAFETY TIPS</a></li>
								<li><a href="pages\pages.php?initiatives">INITIATIVES</a></li>
								<li><a href="">COMPLAINTS</a></li>
								<li><a href="pages\pages.php?downloads">DOWNLOADS</a></li>
								<li><a href="pages\pages.php?aboutus">ABOUT US</a></li>
								<li><a href="pages\pages.php?contactus">CONTACT US</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="back1 row pb-5" style="background-image:url(Photos/background/classyfabric1.png); ">
				<div class="col-md-8 col-lg-8 row">
					<div class="head">
						<h3 data-aos="zoom-out-right"  data-aos-duration="1000">Services................</h3>
					</div>
					<div class="row body">
						<div class="col-md-4 col-sm-12 text-center content" data-aos="fade-up" data-aos-duration="3000">
							<a href="pages/users/complaints.php"><img class="img-fluid" src="Photos\links images\complaints.png"></a>
							<a href="pages/users/complaints.php"><h4 class="text-white mt-5">complaints</h4></a>
						</div>	
						<div class="col-md-4 text-center content" data-aos="fade-down" data-aos-easing="linear"	 data-aos-duration="1500">
							<a href="pages/police_officer.php"><img class="img-fluid" src="Photos\links images\Police officer.png"></a>
							<a href="pages/police_officer.php"><h4 class="text-white mt-5">police officer</h4></a>
						</div>
						<div class="col-md-4 text-center line" data-aos="fade-up" data-aos-duration="3000">
							<a href="pages/missingperson.php"><img class="img-fluid" src="Photos\links images\missing person1.png"></a>
							<a href="pages/missingperson.php"><h4 class="text-white mt-5">missing person</h4></a>
						</div>
					</div>
					<div class="row mt-5">
						<hr>
					</div>
					<div class="row body">
						<div class="col-md-4 col-sm-12 text-center content content" data-aos="fade-down" data-aos-easing="linear"	 data-aos-duration="1500">
							<a href="pages/police_station.php"><img class="img-fluid" src="Photos\links images\police station.png"></a>
							<a href="pages/police_station.php"><h4 class="text-white mt-5">police station</h4></a>
						</div>
						<div class="col-md-4 text-center content" data-aos="fade-up" data-aos-duration="3000">
							<a href="pages/mostwanted.php"><img class="img-fluid" src="Photos\links images\most wanted.png"></a>
							<a href="pages/mostwanted.php"><h4 class="text-white mt-5">most wanted</h4></a>
						</div>
						<div class="col-md-4 text-center" data-aos="fade-down" data-aos-easing="linear"	 data-aos-duration="1500">
							<a href="pages/maps.php"><img class="img-fluid" src="Photos\links images\google maps.png"></a>
							<a href="pages/maps.php"><h4 class="text-white mt-5">maps</h4></a>
						</div>
					</div>
				</div>
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
			</div>
			<div class="row back2" style="background-image:url(Photos/background/classyfabric2.png); ">
				<div class='row justify-content-center'>
					<div class="mostwanted">
						<h3 data-aos="zoom-in">Most Wanted Criminal</h3>
					</div>
					<div class="card criminal col-md-2 col-lg-2 " data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
						<div class="card-header">
			 				<img class='img-fluid' src='Photos\mostwanted\dawood.jpg'>
			 			</div>

						<div class='text text-center card-title title'>
							<h3>
									Dawood Ibrahim Kaskar
							</h3>
						</div>
					</div>
					<div class="card criminal col-md-2 col-lg-2" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
						<div class="card-header">
			 				<img class='img-fluid' src='Photos\mostwanted\kashmiri.jpg'>
			 			</div>

						<div class='text text-center card-title title'>
							<h3>
									Ilyas kashmiri
							</h3>
						</div>
					</div>
					<div class="card criminal col-md-2 col-lg-2" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
						<div class="card-header">
			 				<img class='img-fluid' src='Photos\mostwanted\azhar.jpg'>
			 			</div>

						<div class='text text-center card-title title'>
							<h3>
									Masood azhar
							</h3>
						</div>
					</div>
					<div class="card criminal col-md-2 col-lg-2" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
						<div class="card-header">
			 				<img class='img-fluid' src='Photos\mostwanted\salahuddin.jpg'>
			 			</div>

						<div class='text text-center card-title title'>
							<h3>
									Syed salahuddin
							</h3>
						</div>
					</div>
				</div>
				<div>
					<section class="pt-5">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.5449257235805!2d72.93323286539824!3d20.6066338574294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0c2813007c5eb%3A0x92d6b84a7e8df127!2sPolice%20Head%20Quarter%2C%20Valsad!5e0!3m2!1sen!2sno!4v1620109479672!5m2!1sen!2sno" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</section>
				</div>
			</div>
		</div>
		<!-- main content end -->

		<!-- Footer Start -->
		<?php
			footerIndex();
		?>
		<!-- Footer End -->
	</div>
</body>
 <script>
 		
 	
    /*Close*/

    /*Background Opacity Change*/
    $(document).ready.(function(){
    	$('.maincontent').waypoint(function(direction){
    		$('.head1').addClass('animate__animated animate__fadeInLeftBig')
    		
		})
    });
    
 </script>
 <script type="text/javascript">
 	/*sidebar annimate*/
   	 $("#sidebarCollapse").click(function() {
        
        $("#sidebar").toggleClass("active");
    });

     $("#sidebarCollapse").click(function() {
        
        $("#content").toggleClass("disable");
    });

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
//For open login box
 function showPopUp(){
  var popup_box = document.getElementById('loginbox');
  popup_box.style.display="block";
}
//For closed login box
function ClosePopUp(){
  var popup_box = document.getElementById('loginbox');
  popup_box.style.display="none";
}
//For open forget_password box
 function ShowForgetPopUp(){
  var popup_box = document.getElementById('forget_load');
  var login_popup_box = document.getElementById('loginbox');
  login_popup_box.style.display="none";
  popup_box.style.display="block";
}
//For closed forget_password box
function CloseForgetPopUp(){
  var popup_box = document.getElementById('forget_load');
  popup_box.style.display="none";
  window.location.href='index.php';
}
</script>
 <script>
	  AOS.init();
 </script>
 <script src="app.js"></script>

 <!-- Forget Password Section -->
<?php
use PHPMailer\PHPMailer\PHPMailer;
	if (isset($_POST['ResetPass'])) {
		$email=$_POST['email'];

		$fetch="select * from users where user_email='$email'";
		$run=mysqli_query($con,$fetch);

		$checkmail=mysqli_num_rows($run);
		echo $checkmail;
		if ($checkmail == 0) {
			echo '<script>swal("Oops!", "Email Not Exist!", "error");</script>';
		}else{

			$rand_otp=rand(100000,900000);
			$update_otp="UPDATE otp SET otp='$rand_otp'";
			$run_otp=mysqli_query($con,$update_otp);

			/*email sent otp*/

			$names = 'Valsad Police';
              $emails = 'Valsad_police_departm@yahoo.in';
              $subject = 'OTP';
              $body = 'otp:'.$rand_otp;

              require_once "PHPMailer/PHPMailer.php";
              require_once "PHPMailer/SMTP.php";
              require_once "PHPMailer/Exception.php";

              $mail = new PHPMailer();

              //smtp settings
              $mail->isSMTP();
              $mail->Host = "smtp.gmail.com";
              $mail->SMTPAuth = true;
              $mail->Username = "ocrsocrs065@gmail.com";
              $mail->Password = 'ocrsocrs12345';
              $mail->Port = 465;
              $mail->SMTPSecure = "ssl";

              //email settings
              $mail->isHTML(true);
              $mail->setFrom($emails, $names);
              $mail->addAddress('ocrsocrs065@gmail.com');
              $mail->Subject = ("$emails ($subject)");
              $mail->Body = $body;

              if($mail->send()){
                  $status = "success";
                  $response = "Email is sent!";
              }
              else
              {
                  $status = "failed";
                  $response = "Something is wrong: <br>" . $mail->ErrorInfo;
              }
              

			/*End email*/
			$email=$_POST['email'];
			$_SESSION['email']=$email;
			echo "
				 <script>
				 	$(document).ready(function(){
				 		$('.forget_load').show();
				 			$.ajax({
				 				url:'pages/otpsec.php',
				 				type:'post',
				 				beforeSend:function() {
				 					$('.email_section').hide();
				 					$('.preloader').show();
				 				},
				 				success:function(data) {
				 					setTimeout(function() {
				 						$('.email_section').show();
				 						$('.preloader').hide();
				 						$('.email_section').html(data);
				 					 }, 1000);
				 				}
				 			});
				 			  return false;
				 	});

				 </script>
			";

		}
	}

?>
</html>
