
<!DOCTYPE html>
<html>
<head>
  <title></title>
    
    <style>
      #missing_person
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
  <div id="missing_person">
    <h2 class="text-center mt-5 text-danger">Add Missing Person</h2>
      <div class="container  align-items-center mt-5">
        <form class="" method="POST" enctype="multipart/form-data" >
          <div class="mb-3">
            <label for="name" class="form-label">Enter First Name</label>
            <input type="text" required=""  name="f_name" class="form-control" >
          </div>
           <div class="mb-3">
            <label for="name" class="form-label">Enter Last Name</label>
            <input type="text" required=""  name="l_name" class="form-control" >
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Enter Father Name</label>
            <input type="text" required=""  name="fat_name" class="form-control" >
          </div>
           <div class="mb-3">
            <label for="name" class="form-label">Enter Other Relative Name</label>
            <input type="text" required=""  name="rel_name" class="form-control" >
          </div>
          <div class="mb-3">
            <label for="photo" class="form-label">Enter Address</label>
            <input type="text" required=""  name="address" class="form-control" >            
          </div>
          <div class="mb-3">
            <label for="photo" class="form-label">Enter Date Of Birth</label>
            <input type="date" required=""  name="age" class="form-control" >            
          </div>
          <div class="mb-3">
            <label for="photo" class="form-label">Enter Person Phone Number</label>
            <input type="text" name="p_number" class="form-control">           
          </div>
          <div class="mb-3">
            <label for="photo" class="form-label">Enter Relative Phone Number</label>
            <input type="text" name="f_phone" class="form-control">            
          </div>
          <div class="mb-3">
            <label for="photo" class="form-label">Enter Missing Date</label>
            <input type="date" required=""  name="date" class="form-control" >            
          </div>
          <div>
            <label for="photo" class="form-label">Enter Missing Person Photo</label>
            <input type="file" required=""  name="photo" class="form-control" >     
          </div>
         <div class="text-center">
           <button type="submit" name="missing_submit" class="btn btn-primary mt-3 mb-5">Submit</button>
         </div>
        </form>
      </div>
  </div>

    <?php
     if (isset($_POST['missing_submit'])) {
        $random=rand();
        $relative_name=$_POST['rel_name'];
        $f_name=$_POST['f_name'];
        $l_name=$_POST['l_name'];
        $address=$_POST['address'];
        $fat_name=$_POST['fat_name'];
        $age=$_POST['age'];
        $p_number=$_POST['p_number'];
        $f_phone=$_POST['f_phone'];
        $date=$_POST['date'];   
        $image=$_FILES['photo']['name'];
        $temp_image=$_FILES['photo']['tmp_name'];
        move_uploaded_file($temp_image,"../pages/Photos/missing_person/$image");
      $insert="INSERT INTO missing_person(first_name,last_name,father_name,address,Age,relative_name,photo,missing_date,father_phone_number,phone,person_id) VALUES ('$f_name','$l_name','$fat_name','$address','$age','$relative_name','$image','$date','$f_phone','$p_number','$random')";
       $inserted=mysqli_query($con,$insert);
       if ($inserted) {
          echo "<script>alert('Added Suucessfully')</script>";
          echo "<script>window.open('dashboard.php?add_missing_person','_self')</script>";
       }else{
          echo "<script>alert('Not Added Suucessfully')</script>";
          echo "<script>window.open('dashboard.php?add_missing_person','_self')</script>";
       }
     }
      ?>
</body>
</html>