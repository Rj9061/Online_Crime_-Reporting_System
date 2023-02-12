
<html>
    <style>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
::selection{
  background: #fa4299;
  color: #fff;
}
.wrappers{
  overflow: hidden;
  max-width: 390px;
  background: #fff;
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
  display: none;
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s;
}
.wrappers i{
  float: right;
  margin-top: -15px;
  margin-right: -10px;
  font-weight: bolder;
  font-size: 19px;
  cursor: pointer;  
}
@media screen and (min-width: 790px){
  .wrappers{
    position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  }
}
.wrappers .title-text{
  display: flex;
  width: 200%;
}
.wrappers .title{
  width: 50%;
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
.wrappers .slide-controls{
  position: relative;
  display: flex;
  height: 50px;
  width: 100%;
  overflow: hidden;
  margin: 30px 0 10px 0;
  justify-content: space-between;
  border: 1px solid lightgrey;
  border-radius: 5px;
}
.slide-controls .slide{
  height: 100%;
  width: 100%;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  text-align: center;
  line-height: 48px;
  cursor: pointer;
  z-index: 1;
  transition: all 0.6s ease;
}
.slide-controls label.signup{
  color: #000;
}
.slide-controls .slider-tab{
  position: absolute;
  height: 100%;
  width: 50%;
  left: 0;
  z-index: 0;
  border-radius: 5px;
  background: -webkit-linear-gradient(left, #a445b2, #fa4299);
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
input[type="radio"]{
  display: none;
}
#signup:checked ~ .slider-tab{
  left: 50%;
}
#signup:checked ~ label.signup{
  color: #fff;
  cursor: default;
  user-select: none;
}
#signup:checked ~ label.login{
  color: #000;
}
#login:checked ~ label.signup{
  color: #000;
}
#login:checked ~ label.login{
  cursor: default;
  user-select: none;
}
.wrappers .form-container{
  width: 100%;
  overflow: hidden;
}
.form-container .form-inner{
  display: flex;
  width: 200%;
}
.form-container .form-inner form{
  width: 50%;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
.form-inner form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
}
.form-inner form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 15px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  border-bottom-width: 2px;
  font-size: 17px;
  transition: all 0.3s ease;
}
.form-inner form .field input:focus{
  border-color: #fc83bb;
  /* box-shadow: inset 0 0 3px #fb6aae; */
}
.form-inner form .field input::placeholder{
  color: #999;
  transition: all 0.3s ease;
}
form .field input:focus::placeholder{
  color: #b3b3b3;
}
.form-inner form .pass-link{
  margin-top: 5px;
}
.form-inner form .signup-link{
  text-align: center;
  margin-top: 30px;
}
.form-inner form .pass-link a,
.form-inner form .signup-link a{
  color: #fa4299;
  text-decoration: none;
}
.form-inner form .pass-link a:hover,
.form-inner form .signup-link a:hover{
  text-decoration: underline;
}
form .btn{
  height: 50px;
  width: 100%;
  border-radius: 5px;
  position: relative;
  overflow: hidden;
}
form .btn .btn-layer{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  background: -webkit-linear-gradient(right, #a445b2, #fa4299, #a445b2, #fa4299);
  border-radius: 5px;
  transition: all 0.4s ease;;
}
form .btn:hover .btn-layer{
  left: 0;
}
form .btn input[type="submit"]{
  height: 100%;
  width: 100%;
  z-index: 1;
  position: relative;
  background: none;
  border: none;
  color: #fff;
  padding-left: 0;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
}
/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {opacity:1}
}
</style>

    <div class="wrappers" id="loginbox">
      <i onclick="ClosePopUp()" class="fas fa-times"></i>
      <div class="title-text">
        <div class="title login">
Login Form</div>
<div class="title signup">
Signup Form</div>
</div>
<div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab">
</div>
</div>
<div class="form-inner">
          <form action="" method="POST" class="login">
            <div class="field">
              <input type="text" name="loginemail" placeholder="Email Address" required>
            </div>
<div class="field">
              <input type="password" name="loginpassword" placeholder="Password" required>
            </div>
<div class="pass-link">
<a href="#">Forgot password?</a></div>
<div class="field btn">
              <div class="btn-layer">
</div>
<input type="submit" name="login" value="Login">
            </div>
<div class="signup-link">
Not a member? <a href="">Signup now</a></div>
</form>
<form action="" method="POST" class="signup">
  <div class="field">
              <input type="name" name="name" placeholder="User Name" required>
            </div>
  <div class="field">
              <input type="number" name="number" placeholder="Mobile Number" required>
            </div>
            <div class="field">
              <input type="text" name="email" placeholder="Email Address" required>
            </div>
<div class="field">
              <input type="password" name="password" id="password" name="password" oninput="this.setCustomValidity('')"  placeholder="Password" required="">
            </div>
<div class="field">
              <input type="password" name="con-password" id="con_password" name="con_password" oninput="this.setCustomValidity('')"  placeholder="Confirm password" required>
            </div>
<div class="field btn">
              <div class="btn-layer">
</div>
<input type="submit" name="register" value="Signup">
            </div>
</form>
</div>
</div>
</div>

<!-- For Sign-Up -->
<?php
   if (isset($_POST['register'])) {
      $name=$_POST['name'];
      $phone=$_POST['number'];
      $email=$_POST['email'];
      $pass=$_POST['password'];
      $con_pass=$_POST['con-password'];

      $fetch="select * from users";
      $runss=mysqli_query($con,$fetch);
      while($f=mysqli_fetch_array($runss)){
      $e=$f['user_email'];
      }
      if ($e==$email) {
        echo '<script>swal("Oops!", "Email Already Registerd!", "error").then(function() {
                              window.location = "../index.php";
                          });</script>';
      }else{

        $inserts="INSERT INTO users(user_name, user_phone_number, user_email, user_password, user_confirm_password) VALUES ('$name','$phone','$email','$pass','$con_pass')";
         $query=mysqli_query($con,$inserts);

         if ($query) {
                  $_SESSION['customer_name']=$name;
                  $_SESSION['customer_email']=$email;
                    echo '<script>swal("Great!", "You have Successfully Registerd!", "success").then(function() {
                              window.location = "../index.php";
                          });</script>';
                    
                  }else{
                    echo '<script>swal("Oops!", "You have Not Successfully Registerd!", "error").then(function() {
                              window.location = "redirectURL";
                          });</script>';
                  }
      }
    
  }
?>


<!-- For Login -->
<?php
    if (isset($_POST['login'])) {
      $loginemail=$_POST['loginemail'];
      $loginpass=$_POST['loginpassword'];

      $fetch="select * from users where user_email='$loginemail' AND user_password='$loginpass'";
      $runs=mysqli_query($con,$fetch);

      $row=mysqli_fetch_array($runs);
      $cust_name=$row['user_name'];
      $check_customer=mysqli_num_rows($runs);

      if ($check_customer==0) {
        echo '<script>swal("Oops!", "You have Entered Wrong Email or Password!", "error");</script>';
      }

      if ($check_customer==1) {
        $_SESSION['customer_email']=$loginemail;
        $_SESSION['customer_name']=$cust_name;
        echo '<script>swal("Great!", "You have Successfully Login!", "success").then(function() {
                              window.location = "../index.php";
                          });</script>';
      }
    }
?>


<script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
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