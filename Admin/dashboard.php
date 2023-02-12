
<!-- Connect Database -->
<?php
	include ("../database\db.php");
	session_start();
?>
<!-- End -->
 <?php 
	if (!isset($_SESSION['admin_email'])) {
			echo '<script>window.location = "admin_login.php";</script>';
		}else{
 ?>			
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
	<!-- all cdn links of  bootstrap/javascript/jquery/sweetalert,etc-->
	<?php
		include ("../links/alllinks.php");
	?>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="admin_style.css">
</head>
<body>
	<div class="main_div">
		<div class="child_div1">
			<div class="sidebar">
				<div>
					<div class="top_menu">
						<div class="row">
							<div class="col-lg-6 col-md-6 head">
								Menu
							</div>
							<div class="col-lg-6 col-md-6 bars">
								<i class="fas fa-bars"></i>
							</div>
						</div>
					</div>
					<div class="bottom_menu">
						<div id="scroll">
							<ul class="menu">
								<li class="menu_head">Menu</li>
								<li>
									<a href="javascript:void(0);" id="slide_menu">
										<i class="fas fa-tachometer-alt"></i> Dashboards
										<i class="fas fa-chevron-down"></i>
									</a>
									<ul id="slide_submenu">
										<li><a href="#complaints_table">Case Registered</a></li>
										<li><a href="#crimeratio_slider">Crime Ratio</a></li>
										<li><a href="#crimeratio_slider">News</a></li>
										<li><a href="#complaints_table">Cases Analysis</a></li>
										<li><a href="#">Chat Box</a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0);" class="show_profile">
										<i class="far fa-address-card"></i> Profile
									</a>
								</li>
								<li class="menu_head">Police Station</li>
								<li>
									<a href="javascript:void(0);" id="officer_popup">
										<i class="far fa-user" style="color:rgb(117 118 119);padding-left: 0;"></i> Police Officers
									</a>
								</li>
								<li>
									<a href="javascript:void(0);" id="station_popup">
										<i class="fas fa-portrait"></i> Police Stations
									</a>
								</li>
								<li class="menu_head">
									Add Section
								</li>
								<li id="add_policestation">
									<a href="#crimeratio_slider">
										<i class="fas fa-plus-circle"></i> Add Police Stations
									</a>
								</li>
								<li id="add_policeofficer">
									<a href="#crimeratio_slider">
										<i class="fas fa-user-plus"></i>Add Police Officers
									</a>
								</li>
								<li id="add_missing_person">
									<a href="#crimeratio_slider">
										<i class="far fa-plus-square"></i> Add Missing Person
									</a>
								</li>
								<li id="add_mostwanted">
									<a href="#crimeratio_slider">
										<i class="fas fa-skull-crossbones"></i> Add Most Wanted Criminals
									</a>
								</li>
								<li id="add_news">
									<a href="#crimeratio_slider">
										<i class="far fa-newspaper"></i>Add Public News
									</a>
								</li>
								<li class="menu_head">Logout</li>
								<li>
									<a href="admin_logout.php">
										<i class="fas fa-sign-out-alt"></i> Logout
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<div class="overlay" onclick="overlay()"></div>
		<div class="child_div2">
			<div class="header_mobile_section">
				<div class="header_mobile_inner">
					<a href="" id=admin_logo>Admin</a>
					<button class="sidebar_opener">
						<i class="fas fa-bars" id="icon" onclick="icon();"></i>
					</button>
					<div class="elipsis_icon">
						<button class="bg-transparent border-0">
							<i class="fas fa-ellipsis-v"></i>
						</button>
					</div>
				</div>
			</div>

			<div class="main_content">
				<div class="header_section">
					<div class="left_portion">
						<div class="top">Valsad Police</div>
						<div class="bottom">Valsad Police shall ensure the Rule of Law, and strive to create a fear free environment.</div>
					</div>
					<div class="right_portion">
						<div class="search_sec">
							<img class="img-fluid" src="photos/searching.png">
							<input type="text" name="" placeholder="Search...">
						</div>
						<div class="notification d-flex">
							<div class="dropdown">
								<button data-toggle="dropdown" class="btn border-0 bg-transparent mr-5">
								<i class="fas fa-th-large"></i>
								</button>
								<!-- popup -->
								<div class="dashboard_popup dropdown-menu dropdown-menu-right " aria-labelledby="dropdownMenuButton">
									<div class="dashboard_popup_header">
										<div class="dashboard_header_inner">
											<h5>Police Dashboard</h5>
											<h6>Seva Shanti Suraksha</h6>
										</div>
									</div>
									<div class="dashboard_popup_content">
										<div class="row">
											<div class="col-lg-4 col-sm-6">
												<button class="border-0 bg-transparent">
													<i class="fas fa-file mb-3"></i>
													Case Registered
												</button>
											</div>
											<div class="col-lg-4 col-sm-6">
												<button class="border-0 bg-transparent">
													<i class="fas fa-file mb-3"></i>
													Crime Ratio
												</button>
											</div>
											<div class="col-lg-4 col-sm-6">
												<button class="border-0 bg-transparent">
													<i class="fas fa-file mb-3"></i>
													News
												</button>
											</div>
											<div class="col-lg-4 col-sm-6">
												<button class="border-0 bg-transparent">
													<i class="fas fa-file mb-3"></i>
													Case Analysis
												</button>
											</div>
											<div class="col-lg-4 col-sm-6">
												<button class="border-0 bg-transparent">
													<i class="fas fa-file mb-3"></i>
													Chat Box
												</button>
											</div>
											<div class="col-lg-4 col-sm-6">
												<button class="border-0 bg-transparent">
													<i class="fas fa-file mb-3"></i>
													Most Wanted
												</button>
											</div>
										</div>
									</div>
									<div class="dashboard_popup_footer">
											<button class="btn">Close</button>
									</div>
								</div>
								<!-- end -->
							</div>
							<div class="dropdown">
								<button class="btn border-0 bg-transparent" data-toggle="dropdown">
									<i class="far fa-bell"></i>
								</button>
								<!-- popup -->
									<div class="notification_popup dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
										<div class="notification_popup_header">
											<div class="notification_header_inner">
												<h5>Notifications</h5>
												<h6>You have unread messages</h6>
											</div>
										</div>
										<?php 
											if (isset($_SESSION['admin_email'])) {
											$session_email=$_SESSION['admin_email'];	
											$fetch="select * from admin where admin_email='$session_email'";
											$run=mysqli_query($con,$fetch);
											$row=mysqli_fetch_array($run);
											$img=$row['admin_photo'];
										}
										?>
										<div class="notification_popup_content">
											<div class="notification_content_header">
												<button class="btn">Messages</button>
											</div>
											<div class="notification_content_inner">
												<div>
													<div class="notification_content_container">
														<div class="notification_vertical_line">
															<span class="custom_icon_ritesh"></span>
															<div>
																<h5>Jai Hind</h5>
															</div>
														</div>
														<div class="notification_vertical_line">
															<span class="custom_icon_ritesh"></span>
															<div>
																<h5>Last Login: <?php echo $row['login_activity'];?></h5>
															</div>
														</div>
														<div class="notification_vertical_line">
															<span class="custom_icon_ritesh"></span>
															<div>
																<h5>
																 <?php 
																 		if (!isset($_SESSION['admin_email'])) {
																			 	echo '<script>swal("Oops!", "Firstly Login!", "error").then(function() {
					                              window.location = "admin_login.php";
					                          		});</script>';
																 		}else{
																 			$session_name=$_SESSION['admin_name'];
																				echo "Welcome, ".	$session_name; 
																		}
																 ?>															 	
																 </h5>
															</div>
														</div>
														<div class="notification_vertical_line">
															<span class="custom_icon_ritesh"></span>
															<div>
																<h5>
																	<?php

																			echo "POST: ". $row['admin_post'];
																		
																	?>
																</h5>
															</div>
														</div>
														<div class="notification_vertical_line">
															<span class="custom_icon_ritesh"></span>
															<div>
																<h5>સેવા શાંતિ સુરક્ષા</h5>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="notification_popup_footer">
												<button class="btn">Close</button>
										</div>
									</div>
									<!-- end -->
							</div>
						</div>
						<div class="profile_sec">
							<div class="dropdown">
								<button data-toggle="dropdown" class="bg-transparent border-0">
									<a href="#">
									<?php echo "<img src='photos/officers/$img' class='img-fluid'>"; ?>
									<i class="fas fa-chevron-down"></i>
								</a>
								</button>
								<!-- popup -->
								<div class="profile_popup dropdown-menu dropdown-menu-right " aria-labelledby="dropdownMenuButton">
									<div class="profile_popup_header">
										<div class="profile_header_inner d-flex">
											<?php echo "<img src='photos/officers/$img' class='img-fluid rounded-circle'>" ?>
											<div class="info">
												<h5><?php echo $row['admin_name']; ?></h5>
												<h6><?php echo $row['admin_post']; ?></h6>
											</div>
											<div class="Logout">
												<button class="btn"><a href="admin_logout.php" style="text-decoration: none;
    color: unset;">Logout</a></button>
											</div>
										</div>
									</div>
									<div class="profile_popup_content">
										<div class="profile_content_top">
											<ul>
												<li>ACTIVITY</li>
												<li>Chat</li>
												<li>Recover Password</li>
												<li>MY ACCOUNT</li>
											</ul>
										</div>
										<div class="profile_content_bottom row">
											<div class="col-lg-6 col-md-6 text-center">
												<i class="fas fa-user d-block"></i>
												<a href="javascript:void(0);" class="show_profile" style="text-decoration:none; color: unset;">Admin Profile</a>
											</div>
											<div class="col-lg-6 col-md-6 text-center">
												<i class="fas fa-user-plus d-block"></i>
												<a href="add_member.php" style="text-decoration: none;
    color: unset;">Add Member</a>
											</div>
										</div>
									</div>
									<div class="notification_popup_footer">
											<button class="btn">Close</button>
									</div>
								</div>
								<!-- end -->
							</div>
						</div>
					</div>
				</div>

				<!-- Another Section -->
				<div class="page_menu">
					<div class="inner_page_menu">
						<ul class="page_menu_items">
							<a href="dashboard.php"><li>Home</li></a>
							<a href="#"><li>Overview</li></a>
							<a href="#crimeratio_slider"><li>Crime Ratio</li></a>
							<a href="#crimeratio_slider"><li>News</li></a>	
						</ul>
					</div>
				</div>
				<!-- End -->

				<!-- Case Registered Section -->
				<div class="case_registered_section">
					<div class="card">
						<div class="card-header">
							Case Registered
						</div>
						<!-- PHP code for fetch cases details -->
						<?php
							$fetch_cases="select * from complaints";
							$run_cases=mysqli_query($con,$fetch_cases);
							
							$count_cases=mysqli_num_rows($run_cases);

							$fetch_emergency_cases="select * from emergency_complaints";
							$run_emergency_cases=mysqli_query($con,$fetch_emergency_cases);

							$count_emergency_cases=mysqli_num_rows($run_emergency_cases);

							$all_cases=($count_cases)+($count_emergency_cases);
						?>
						<!-- PHP code for fetch cases details End -->
						<div class="card-body d-flex row">
							<div class="col-lg-4 col-md-4">
								<div class="d-flex">
									<div class="icon_box">
										<div class="icon">
											<img src="photos/laptop.png" class="img-fluid">
										</div>
									</div>
									<div class="content">
										<div>All Cases Registered</div>
										<div><?php echo $all_cases ?></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4">
								<div class="d-flex">
									<div class="icon_box">
										<div class="icon">
											<img src="photos/emergency.png" class="img-fluid emergency">
										</div>
									</div>
									<div class="content">
										<div>Emergency Cases</div>
										<div><?php echo $count_emergency_cases ?></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4">
								<div class="d-flex">
									<div class="icon_box">
										<div class="icon">
											<img src="photos/murder.png" class="img-fluid murder">
										</div>
									</div>
									<div class="content">
										<div>Murder Cases</div>
										<div><?php echo $count_cases ?></div>
									</div>
								</div>
							</div>
						</div>
				
						<div class="card-footer">
							<div class="view_all">
								<button id="crimeratio_slider" class="btn"><!-- crimeratio_slider for slide to crime rate when click on crime ratio -->
								<span><i class="fas fa-wave-square"></i></span>
								<span><a href="#complaints_table">View Complete Report</a></span>
								</button>
							</div>
						</div>
					</div>
				</div>
				<!-- End -->
<!-- Admin Profile -->
<?php
include ('admin_profile.php');
?>
<!-- Admin Profile End -->
<!-- police_officer_popup -->			
<?php
include('police_officer_popup.php');
?>
<!-- police_officer_popup End -->		

<!-- police_station_popup -->			
<?php
include('police_station_popup.php');
?>
<!-- police_station_popup End -->			

				<!-- Police Station -->
					<?php
						include("add_policestation.php");
					?>
				<!-- End Plice Station -->
				<!-- Police Officer -->
					<?php
						include("add_police.php");
					?>
				<!-- End Police Officer -->
				<!-- Missing Person -->
					<?php
						include("add_missing_person.php");
					?>
				<!-- End Missing Person -->
				<!-- Missing Person -->
					<?php
						include("addmostwanted.php");
					?>
				<!-- End Missing Person -->
				<!-- News -->
					<?php
						include("insertnews.php");
					?>
				<!-- End News -->

				<div class="row mt-4" id="crime_rate_news_ticker">
					<div class="col-lg-6 col-md-6">
						<!-- Crime Rate Section (Graph) -->
							<?php
								include ('crime_rate.php');
							?>
						<!-- End -->
					</div>
					<div class="col-lg-6 col-md-6">
						<!-- News Ticker -->
							<?php
								include ('newsTicker.php');
							?>
						<!-- End -->
						<div class="police_quote mt-3">
							<div class="card-body">
								<h5>સેવા શાંતિ સુરક્ષા</h5>
							</div>
						</div>
					</div>
				</div>
				

				<!-- Cases table Section -->
				<?php
					include ('all_complaints.php');
				?>
				<!-- End -->
		</div> 
			</div>
		</div>
	</div>

</body>
<!-- For toggle Sidebar Sub menu item -->
<script> 
$(document).ready(function(){
  $("#slide_menu").click(function(){
    $("#slide_submenu").slideToggle(170);
  });
});
</script>

<!-- For Sidebar Toggle(Ritesh Suthar) -->
<script> 
$(document).ready(function(){
  $(".header_mobile_section .sidebar_opener").click(function(){
    $(".child_div1").toggle();
    $(".sidebar").addClass("active_sidebar");
    $(".sidebar .fa-bars").hide();
    $(".overlay").show();
  });
   addEventListener("resize", function() {
    if (innerWidth >= 1300) {
      $(".child_div1").show(0);
      $(".sidebar .fa-bars").show();
      $(".child_div2").css("background","rgba(0,0,0,0)");
      $(".sidebar").removeClass("active_sidebar");
      $(".overlay").hide();
    }
    if (innerWidth < 1300) {
      $(".child_div1").hide(".sidebar");
    }
  })
   $(".overlay").click(function(){
   		$(".child_div1").hide();
   		$(".overlay").hide();
   		$(".right_portion").toggleClass("visibility");
   });
});
</script>
<script>
	function icon() {
		var icon=document.getElementById("icon");
		if (icon.classList.contains("fa-bars")) {
			icon.classList.remove("fa-bars");
			icon.classList.add("fa-times");
		}
	}
		function overlay() {
			var icon=document.getElementById("icon");
			icon.classList.remove("fa-times");
			icon.classList.add("fa-bars");	
	}
</script>
<!-- show right side for mobile display -->
<script>
	$(document).ready(function() {
		$(".elipsis_icon").click(function () {
			$(".right_portion").toggleClass("visibility");
			$(".overlay").show();
		})
	})
</script>
<script>
	$(document).ready(function() {
		$("#slide_submenu li a").click(function(){
			$("#slide_submenu li a").removeClass("active_anchor");
			$(this).addClass("active_anchor");
		})
	})
</script>
<script>
	$(document).ready(function() {
		$("#add_policestation").click(function(){
			$("#police_station").css("display","block");
			$("#police_officer").css("display","none");
			$("#missing_person").css("display","none");
			$("#mostwanted").css("display","none");
			$("#public_news").css("display","none");
		});
		$("#add_policeofficer").click(function(){
			$("#police_officer").css("display","block");
			$("#police_station").css("display","none");
			$("#missing_person").css("display","none");
			$("#mostwanted").css("display","none");
			$("#public_news").css("display","none");
		});
		$("#add_missing_person").click(function(){
			$("#missing_person").css("display","block");
			$("#police_station").css("display","none");
			$("#police_officer").css("display","none");
			$("#mostwanted").css("display","none");
			$("#public_news").css("display","none");
		});
		$("#add_mostwanted").click(function(){
			$("#mostwanted").css("display","block");
			$("#missing_person").css("display","none");
			$("#police_station").css("display","none");
			$("#police_officer").css("display","none");
			$("#public_news").css("display","none");
		});
		$("#add_news").click(function(){
			$("#public_news").css("display","block");
			$("#mostwanted").css("display","none");
			$("#missing_person").css("display","none");
			$("#police_station").css("display","none");
			$("#police_officer").css("display","none");
		});
	});
</script>
<script>
	$(document).ready(function() {
		$("#officer_popup").click(function() {
			$(".back3").show();
			$(".overlay").show();
		});
		$("#station_popup").click(function() {
			$(".station_table").show();
			$(".overlay").show();
		});
		$(".show_profile").click(function() {
			$("#profile_section").show();
			$(".sidebar").css("z-index","0");
			$(".overlay").show();
		});
		$(".overlay").click(function(){
			$("#profile_section").hide();
		});
		$(".close_icon").click(function(){
			$("#profile_section").hide();
			$(".overlay").hide();
		});
	})
</script>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</html>
<?php } ?>