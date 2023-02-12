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
				        <a href="pages.php?safetytips"><li>Safety Tips</li></a>
				      <li class="nav-item">
				       <a href="pages.php?initiatives"><li>Initiatives</li></a>
				      </li>
				      <li class="nav-item">
				       <a href="pages.php?downloads"><li>Downloads</li></a>
				      </li>
				      <li class="nav-item">
				       <a href="pages.php?aboutus"><li>About US</li></a>
				      </li>
				      <li class="nav-item">
				       <a href="pages.php?contactus"><li>Contact US</li></a>
				      </li>
				    </ul>
				  </div>
		 	</div>
		</nav>
	</div>
	<!-- New Navbar End -->

	<!-- Content -->
	<div class="back3 pb-5" style="background-image: url(Photos/background/classyfabric2.png);">
		<div class="container content">
			<?php
				if (isset($_GET['safetytips'])) {
					include ("safetytips.php");
				}elseif (isset($_GET['initiatives'])) {
					include ("initiatives.php");
				}elseif (isset($_GET['downloads'])) {
					include ("downloads.php");
				}elseif (isset($_GET['aboutus'])) {
					include ("aboutus.php");
				}elseif (isset($_GET['contactus'])) {
					include ("contactus.php");
				}else{
					include ("safetytips.php");
				}
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