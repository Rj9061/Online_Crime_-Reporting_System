
<!DOCTYPE html>
<html>
<head>
  <title></title>
    <style>
      #mostwanted
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
  <div id="mostwanted">
    <h2 class="text-center mt-5 text-danger">Add Most Wanted Criminal</h2>
      <div class="container  align-items-center mt-5">
        <form class="" method="POST" enctype="multipart/form-data" >
          <div class="mb-3">
            <label for="name" class="form-label">Enter Criminal Name</label>
            <input type="text" required=""  name="name" class="form-control" >
          </div>
          <div class="mb-3">
            <label for="photo" class="form-label">Add Criminal Phonto</label>
            <input type="file" required=""  name="photo" class="form-control" >            
          </div>
          <div class="text-center mb-3">
            <button type="submit" name="wanted_submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
  </div>

      <?php
     if (isset($_POST['wanted_submit'])) {
        $name=$_POST['name'];
        $image=$_FILES['photo']['name'];
        $temp_image=$_FILES['photo']['tmp_name'];
        move_uploaded_file($temp_image,"../pages/Photos/mostwanted/$image");

        $insert="INSERT INTO add_mostwanted_criminal(Name, image) VALUES ('$name','$image')";
        $inserted=mysqli_query($con,$insert);

       if ($inserted) {
          echo "<script>alert('Added Suucessfully')</script>";
          echo "<script>window.open('dashboard.php?addmostwanted','_self')</script>";
       }else{
          echo "<script>alert('Not Added Suucessfully')</script>";
          echo "<script>window.open('dashboard.php?addmostwanted','_self')</script>";
       }
     }
      ?>
</body>
</html>