<?php
	function navbar()
	{
		echo '	<nav class="navbar navbar-expand-lg navbar-light  fixed-top header">
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
				   <a class="" aria-current="page" href="../index.php" style="color: #009bd9; ">Home</a>
				 </li>

				 <!-- Complaints -->
				 ';
				 

					if (isset($_SESSION['customer_email'])) {
						echo '
						<li class="nav-item admin">
							<div class="dropdown ">
								 <button class="dropdown-toggle" type="" id="dropdownMenuButton1" data-toggle="dropdown">
								   Add Complaints
								 </button>
								 <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
								   <li><a class="dropdown-item" href="register_complaints.php">Register Your Complaint</a></li>
								   <li><a class="dropdown-item" href="users/complaints.php">View Complaints</a></li>
								 </ul>
							</div>
						</li>
						';
						}
					
				
				 

					if (isset($_SESSION['customer_email'])) {
						echo "
						<li class='nav-item admin'>
						<i class=fa fa-user></i>
				   				 <a class='' href='users/profile.php'>Profile</a>
				   		</li>
				   		";
					}else{
					}	
				
				
				
				  
				   		echo '<li class="nav-item">';
						if (!isset($_SESSION['customer_email'])) {
							echo "<a href='#loginbox' onclick='showPopUp();'>User Login</a>";
						}else{
							echo "<a href='logout.php'>Logout</a>";
						}
						echo '</li>';	
					
				 
				
				

					if (!isset($_SESSION['customer_email'])) {
						echo "
						<li class='nav-item admin'>
						<i class=fa fa-user></i>
				   				 <a class='' href='Admin/admin_login.php'>Admin</a>
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
	}

	function footer(){
		echo '<div class="footer" style="overflow-x:hidden;">
			<div class="footertop row" style="background-image: url(Photos/background/classyfabric1.png);">
				<div class="row justify-content-center mt-5">
					<div class="col-lg-3 col-md-3" data-aos="fade-right"  data-aos-duration="1000">
						<h4 class="widgettitle">ABOUT US</h4>
						<p style="font-size: 20px;margin-top: 20px; text-align: justify; color: white;">Valsad Police shall ensure the Rule of Law, enforce the law of the land impartially and firmly without fear or favour, and strive to create a fear free environment that is conducive to growth and development.</p>
      					 <a href="pages.php?aboutus" style="text-decoration:none; color: #EBFF00; float: right;">READ MORE.. &rarr;</a><br><br> 
					</div>
					<div class="links col-md-3 col-lg-3" data-aos="fade-left"  data-aos-duration="1000">
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
		</div>';
	}
	function footerIndex(){
		echo '<div class="footer" style="overflow-x:hidden;">
			<div class="footertop row" style="background-image: url(Photos/background/classyfabric1.png);">
				<div class="row justify-content-center mt-5">
					<div class="col-lg-3 col-md-3" data-aos="fade-right"  data-aos-duration="1000">
						<h4 class="widgettitle">ABOUT US</h4>
						<p style="font-size: 20px;margin-top: 20px; text-align: justify; color: white;">Valsad Police shall ensure the Rule of Law, enforce the law of the land impartially and firmly without fear or favour, and strive to create a fear free environment that is conducive to growth and development.</p>
      					 <a href="pages/pages.php?aboutus" style="text-decoration:none; color: #EBFF00; float: right;">READ MORE.. &rarr;</a><br><br> 
					</div>
					<div class="links col-md-3 col-lg-3" data-aos="fade-left"  data-aos-duration="1000">
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
		</div>';
	}
?>