
<!DOCTYPE html>
<html>
<head>
  <title></title>

    <style>
      #police_officer
      {
        background: #fff;
        display: none;
        border-radius: .35rem;
        border: #dee2e6 solid 1px;
        margin: 30px 0 30px 0;
      }
    </style>
</head>
<body>
 <div id="police_officer">
    <h2 class="text-center mt-5 text-danger">Add Police Officer</h2>
      <div class="container  align-items-center mt-5">
        <form class="" method="POST" enctype="multipart/form-data" >
          <div class="mb-3">
            <label for="name" class="form-label">Enter Name</label>
            <input type="text" required=""  name="name" class="form-control" >
          </div>
          <div class="mb-3">
            <label for="photo" class="form-label">Add Photo</label>
            <input type="file" required=""  name="photo" class="form-control" >            
          </div>
          <div class="mb-3">
            <label for="photo" class="form-label">Add Designation</label>
            <input type="text" required=""  name="designation" class="form-control" >            
          </div>
          <div class="mb-3">
            <label for="photo" class="form-label">Add Phone Number</label>
            <input type="text" required=""  name="phone" class="form-control" >            
          </div>
          <div class="mb-3">
            <label for="photo" class="form-label">Add Email Address</label>
            <input type="text" required=""  name="email" class="form-control" >            
          </div>
          <div class="mb-3">
            <label for="photo" class="form-label">Add City/District</label>
            <input type="text" required=""  name="city" class="form-control" >            
          </div>
          
          <button type="submit" name="police_submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
 </div>

      <?php
     if (isset($_POST['police_submit'])) {
        $name=$_POST['name'];
        $designation=$_POST['designation'];
        $phone_number=$_POST['phone'];
        $email=$_POST['email'];
        $city=$_POST['city'];
        $image=$_FILES['photo']['name'];
        $temp_image=$_FILES['photo']['tmp_name'];
        move_uploaded_file($temp_image,"../pages/Photos/police_officer/$image");

        $insert="INSERT INTO add_police_officer(Name, City, Phone_Number, Email_Address, Photo, Designation) VALUES ('$name','$city','$phone_number','$email','$image','$designation')";
        $inserted=mysqli_query($con,$insert);

       if ($inserted) {
          echo "<script>alert('Added Suucessfully')</script>";
          echo "<script>window.open('dashboard.php?add_police','_self')</script>";
       }else{
          echo "<script>alert('Not Added Suucessfully')</script>";
          echo "<script>window.open('dashboard.php?add_police','_self')</script>";
       }
     }
      ?>
</body>
</html>