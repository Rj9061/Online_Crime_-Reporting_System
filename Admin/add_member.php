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
	<title>Add MeMber</title>
	<!-- all cdn links of  bootstrap/javascript/jquery/sweetalert,etc-->
	<?php
		include ("../links/alllinks.php");
	?>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&family=Righteous&family=Seymour+One&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Righteous&family=Seymour+One&display=swap" rel="stylesheet">
	<style>
		.register_member div h4{
			font-family: 'Righteous', cursive;
			color: #fff;
		}
		.register_member{
			margin-top: 5rem;
		}
		.back_register{
			background-image: url(photos/background_login.jpg);
			content: '';
			width: 100%;
			height: 100%;
			position: absolute;
			z-index: 1;
			overflow-y: auto;
			overflow-x: hidden;
		}
		.back_register::before{
			    content: "";
			    display: block;
			    position: absolute;
			    z-index: -1;
			    width: 100%;
			    height: 100vh;
			    top: 0;
			    left: 0;
			    background: #005bea;
			    background: -webkit-linear-gradient(bottom,#005bea,#00c6fb);
			    background: -o-linear-gradient(bottom,#005bea,#00c6fb);
			    background: -moz-linear-gradient(bottom,#005bea,#00c6fb);
			    background: linear-gradient(bottom,#005bea,#00c6fb);
			    opacity: .9;
		}
		.back_register .btn{
			color: #fff;
	    opacity: .8;
	    font-family: 'Odibee Sans', cursive;
	    letter-spacing: 2px;
	    background: black;
	    border-radius: 50px;
	    border: none;
	    padding: 13px 165px;
	    margin-top: 20px;
	    background: #333333d4;
		}
		.back_register form .form-control{
			padding: .775rem 1.5rem;
			border-radius: 50px;
		}
		.back_register form .mb-3{
			width: 380px;
			margin: auto;
		}
		@media screen and (max-width: 550px){
		.back_register form .mb-3{
			width: 285px;
		}
		.back_register .btn{
			padding: 12px 120px;
			width: 285px;
		}
		.back_register::before{
			height: 200vh;
		}
		}
		#input_profile_header{
			position: relative;
			margin: auto;
	    background: #fff;
	    border-radius: 50px;
		}
		.input_profile{
			position: absolute;
	    height: 80px;
	    bottom: 0;
	    width: 100%;
	    background: #373c4054;
	    border-top-left-radius: 500px;
	    border-top-right-radius: 500px;
	    border-bottom-left-radius: 700px;
	    border-bottom-right-radius: 700px;

		}
		#input_profile_header input::-webkit-file-upload-button{
			position: absolute;
	    bottom: 5%;
	    left: 50%;
	    transform: translate(-50%, -5%);
	    cursor: pointer;
	    visibility: hidden;
		}
		.upload_img{
			cursor: pointer;
			color: transparent;
		}
		.img_section{
			margin: auto;
		}
		.upload_img::before{
			content: '\f030';
			font-family: "Font Awesome 5 Pro";
			font-size: 50px;
			color:  #de645b;;
			font-weight: 900;
			position: absolute;
	    bottom: 5%;
	    left: 50%;
	    transform: translate(-50%, -5%);
		}
		.img_section #input_profile_header img{
			 border-bottom-left-radius: 50px;
	    border-bottom-right-radius: 50px;
		}
	</style>
</head>
<body>
	<div class="back_register">
		<div class="register_member text-center">
			
			<div class="p-3">
				<div class="form_section">
						<form class="mt-4 row" method="POST" enctype="multipart/form-data">
							<div class="img_section col-lg-6">
								<div id="input_profile_header" class="col-lg-4">
									<img src="photos/admin.png" class="img-fluid">
									<div class="input_profile">
											<input type="file" name="photo" class="upload_img" required="">
									</div>
								</div>
							</div>
						  <div class="col-lg-6">
						  	<h4 class="text-center mb-4 mt-3">Add and Register Member</h4>
						  	<div class="mb-3">
							    <input type="text" class="form-control" name="name" placeholder="Name" required="">
							    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
							  </div>
							  <div class="mb-3">
							    <input type="email" class="form-control" name="email" placeholder="Email" required="">
							  </div>
							  <div class="mb-3">
							    <input type="password" class="form-control" name="password" placeholder="Password" required="">
							  </div>
							  <div class="mb-3">
							    <input type="password" class="form-control" name="con_password" placeholder="Confirm Password" required="">
							  </div>
							  <div class="mb-3">
							    <input type="date" class="form-control" name="dob" placeholder="Date Of Birth" required="">
							  </div>
							  <div class="mb-3">
							    <input type="number" class="form-control" name="number" placeholder="Phone Number" required="">
							  </div>
							  <div class="mb-3">
							    <input type="text" class="form-control" name="post" placeholder="Post (ex:- Deputy Commissioner of Police)" required="">
							  </div>
							  <div class="mb-3">
							    <textarea type="text" class="form-control" name="address" placeholder="Address" required=""></textarea>
							  </div>
							  <div class="mb-3">
							  	<button type="submit" name="register" class="btn">Submit</button>
							  </div>
						  </div>
						</form>
				</div>
			</div>
		</div>
	</div>
<?php
	   if (isset($_POST['register'])) {
      $name=$_POST['name'];
      $phone=$_POST['number'];
      $email=$_POST['email'];
      $pass=$_POST['password'];
      $con_pass=$_POST['con_password'];
      $post=$_POST['post'];
      $dob=$_POST['dob'];
      $address=$_POST['address'];
      $image=$_FILES['photo']['name'];
      $temp_image=$_FILES['photo']['tmp_name'];
      move_uploaded_file($temp_image,"photos/officers/$image");
      $admin_id=rand(10000,100000);

      $fetch="select * from admin where admin_email='$email'";
      $runss=mysqli_query($con,$fetch);
      
      if (mysqli_num_rows($runss) >= 1) {
        echo '<script>swal("Oops!", "Email Already Registerd!", "error").then(function() {
                              window.location = "add_member.php";
                          });</script>';
      }elseif($pass!=$con_pass){
      	echo '<script>swal("Oops!", "Password & Confirm Password Not Matched!", "error").then(function() {
                        window.location = "add_member.php";
                    });</script>';
      }else{

       $inserts="INSERT INTO admin(admin_name, admin_email, admin_password, admin_phone, admin_dob, admin_post, admin_photo, admin_ID, admin_address) VALUES ('$name','$email','$pass','$phone','$dob','$post', '$image', '$admin_id','$address')";
         $query=mysqli_query($con,$inserts);

        
         if ($query) {
              echo '<script>swal("Great!", "Members Added Successfully!", "success").then(function() {
                        window.location = "add_member.php";
                    });</script>';
                    
            }else{
              echo '<script>swal("Oops!", "You have Not Successfully Registerd!", "error")function() {
                        window.location = "redirectURL";
                    });</script>';
            }
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