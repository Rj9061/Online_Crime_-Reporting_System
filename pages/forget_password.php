
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
	.Forgethead{
		max-width: 396px;
	}
	.Forgethead h3{
		color: #33bbff;
		letter-spacing: 1px;
		font-family: 'Rajdhani', sans-serif;
		font-family: 'Fredoka One', cursive;
		width: 100%;
	}
	.forget label{
		letter-spacing: 1px;
		color:  #333333;
		font-size: 22px;
		font: bolder;
	}
	.forget .btn{
		background: #33bbff;
		color: white;
	}
	.backend{
		max-width: 396px;
		display: flex;
		position: relative;
		overflow: hidden;
	}
	.backend .email_section{
		width: 100%;
	}
	.forget_load{
		position: absolute;
	    top: 50%;
	    left: 50%;
	    transform: translate(-50%,-50%);
	    background: #fff;
	    padding: 30px;
	    border-radius: 5px;
	    box-shadow: 0px 15px 20px rgb(0 0 0 / 10%);
	    display: none;
	    -webkit-animation-name: animatetop;
  		-webkit-animation-duration: 0.4s;
  		animation-name: animatetop;
  		animation-duration: 0.4s;
	}
	.forget_load .fa-times{
		float: right;
	    margin-top: -15px;
	    margin-right: -10px;
	    font-weight: bolder;
	    font-size: 19px;
	    cursor: pointer;
	}
	.preloader{
		display: none;
		position: relative;top: 100%;left: 50%;
		transform: translate(-50%,-50%);
		padding-top: 40px;
	}
</style>
</head>
<body>
<div class="forget_load" id="forget_load">
	<i onclick="CloseForgetPopUp()" class="fas fa-times"></i>
	<div class="Forgethead">
		<h3 class="text-center mt-4">Forgot Password</h3>
	</div>
	<div class="backend">
		<div class="preloader">
	      <img src="Photos/preloader.gif">
	    </div>
		<div class="email_section">
			<form class="m-2 forget mt-3" method="POST">
				<div class="form-outline mt-3">
					<label class="mb-2">Enter your email address</label>
					<input type="text" class="form-control"  id="email" name="email">
				</div>
				<div class="mt-3 text-center mb-5">
					<button class="btn" id="reset" name="ResetPass">Reset My Password</button>
				</div>
			</form>
		</div>
	</div>
</div>
	
</body>
<?php
	if (isset($_POST['ok'])) {
		$forget_password=$_POST['forget_password'];
		$forget_con_password=$_POST['forget_con_password'];
		$session=$_SESSION['email'];
		$entered_otp=$_POST['otp'];

		$select_otp="select * from otp";
		$run=mysqli_query($con,$select_otp);
		$row = mysqli_fetch_array($run);

		$otp=$row['otp'];    
		if ($otp!=$entered_otp) {
			echo '
						<script>swal("Try Again!", "otp Not Match", "error");</script>
				';
		}else{

		if ($forget_password==$forget_con_password) {
			$update="update users set user_password='$forget_password',user_confirm_password='$forget_password' 
			where user_email='$session'";
			$run=mysqli_query($con,$update);
			if ($run) {
				echo '
						<script>swal("You have Successfully Reset Your Password!", "Login to Continue", "success").then(function() {
                              window.location = "index.php";
                          });</script>
				';
			}
		}else{
				echo '<script>swal("Try Again!", "Password Not Match", "error");</script>';
			}
		}
	}
?>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
 </script>
</html>


