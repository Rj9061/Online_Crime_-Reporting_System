<!-- Connect Database -->
<?php
	include ("../database\db.php");
	session_start();
?>
<!-- End -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Admin Login</title>
	<!-- all cdn links of  bootstrap/javascript/jquery/sweetalert,etc-->
	<?php
		include ("../links/alllinks.php");
	?>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Righteous&family=Seymour+One&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&family=Righteous&family=Seymour+One&display=swap" rel="stylesheet">
	<style>
		.back_login{
			width: 100%;
			height: 100vh;
			background-size: 100% 100%;
			z-index: 1;
			position: relative;
		}
		.back_login::before{
			    content: "";
			    display: block;
			    position: absolute;
			    z-index: -1;
			    width: 100%;
			    height: 100%;
			    top: 0;
			    left: 0;
			    background: #005bea;
			    background: -webkit-linear-gradient(bottom,#005bea,#00c6fb);
			    background: -o-linear-gradient(bottom,#005bea,#00c6fb);
			    background: -moz-linear-gradient(bottom,#005bea,#00c6fb);
			    background: linear-gradient(bottom,#005bea,#00c6fb);
			    opacity: .9;
		}
		.back_login .map{
			position: absolute;
			top: 50%;
			left: 20%;
			transform: translate(-20%,-50%);
		}
		@media screen and (max-width: 1500px){
			.back_login .map{
				display: none;
			}
		}
		.admin_login{
			position: absolute;
			top: 40%;
			left: 70%;
			transform: translate(-70%,-40%);
		}
		.login_header img{
			width: 250px;
		}
		.login_header h5{
			color: #fff;
			font-family: 'Righteous', cursive;
			font-size: 25px;
		}
		.login_form form input{
			padding: 15px 150px 15px 50px;
			border: none;
			background: #fff;
			border-radius: 50px;
			margin-top: 15px;
		}
		.login_form form input::placeholder{
			color: #434a45;
			opacity: .8;
			font-family: 'Odibee Sans', cursive;
			letter-spacing: 1px;
		}
		.login_form form .btn{
			color: #fff;
			opacity: .8;
			font-family: 'Odibee Sans', cursive;
			letter-spacing: 2px;
			background: black;
			border-radius: 50px;
			border: none;
			padding: 13px 165px;
			margin-top: 20px;
			background: #333333d4;;
		}
		.login_form form .div_email, .login_form form .div_password{
			position: relative;
		}
		.login_form form i{
			position: absolute;
			top: 50%;
			left: 10%;
			transform: translate(-50%,-10%);
			opacity: .7;
			margin-top: 2px;
		}
	</style>
</head>
<body>
	<div class="back_login d-flex" style="background-image: url(photos/background_login.jpg);">
		<div class="map">
			<img src="photos/map.png">
		</div>
		<div class="admin_login">
			<div class="login_header text-center">
				<img src="photos/police.png" class="img-fluid">
				<h5>Admin Login</h5>
			</div>
			<div class="login_form text-center mt-3">
				<form method="POST">
					<div class="div_email">
						<i class="fas fa-user"></i>
						<input type="email" name="email" placeholder="Email" required="">
					</div>
					<div class="div_password">
						<i class="fas fa-unlock-alt"></i>
						<input type="password" name="password" placeholder="Password" required="" minlength="8">
					</div>
					<div>
						<button class="btn" name="login">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php 
		if (isset($_POST['login'])) {
			$email=$_POST['email'];
			$password=$_POST['password'];

			$fetch="select * from admin where admin_email='$email' AND admin_password='$password'";
			$run=mysqli_query($con,$fetch);

			$check_admins=mysqli_num_rows($run);
			$row=mysqli_fetch_array($run);
      $admin_name=$row['admin_name'];

			if ($check_admins==0) {
				echo '<script>swal("Oops!", "You have Entered Wrong Email or Password!", "error");</script>';
			}
			if ($check_admins==1) {
		        $_SESSION['admin_email']=$email;
		        $_SESSION['admin_name']=$admin_name;
		        echo '<script>swal("Great!", "You have Successfully Login!", "success").then(function() {
		                              window.location = "dashboard.php";
		                          });</script>';
		      }
			}
	?>
</body>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</html>