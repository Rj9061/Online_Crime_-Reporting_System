
<!DOCTYPE html>
<html>
<head>
  <title></title>

    
    <style>
      #police_station
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
  <div id="police_station">
    <h2 class="text-center mt-2 text-danger pt-3">Add Police Station</h2>
      <div class="container  align-items-center mt-5 pb-5">
        <form class="" method="POST" enctype="multipart/form-data" >
          <div class="mb-4">
            <label for="name" class="form-label">Enter Police Station Name</label>
            <input type="text" required=""  name="name" class="form-control" >
          </div>
          <div class="mb-4">
            <label for="photo" class="form-label">Add Address</label>
            <input type="text" required=""  name="address" class="form-control" >            
          </div>
          <div class="mb-4">
            <label for="photo" class="form-label">Add Map Link</label>
            <input type="text" required=""  name="map" class="form-control" >            
          </div>
          <div class="mb-4">
            <label for="photo" class="form-label">Add Phone Number</label>
            <input type="text" required=""  name="phone" class="form-control" >            
          </div>
          <div class="mb-4">
            <label for="photo" class="form-label">Add Map Photo</label>
            <input type="file" required=""  name="photo" class="form-control" >            
          </div>
         <div class="text-center mt-5">
            <button type="submit" name="station_submit" class="btn btn-primary">Submit</button>
         </div>
        </form>
      </div>

  </div>
      <?php
     if (isset($_POST['station_submit'])) {
        $name=$_POST['name'];
        $phone_number=$_POST['phone'];
        $address=$_POST['address'];
        $map=$_POST['map'];
        $image=$_FILES['photo']['name'];
        $temp_image=$_FILES['photo']['tmp_name'];
        move_uploaded_file($temp_image,"../pages/Photos/police_station/$image");

        $insert="INSERT INTO add_polce_station(Police_Station_Name, Address, Phone, Map, map_photo) VALUES ('$name','$address','$phone_number','$map', '$image')";
        $inserted=mysqli_query($con,$insert);

       if ($inserted) {
          echo "<script>alert('Added Suucessfully')</script>";
          echo "<script>window.open('dashboard.php?add_policestation','_self')</script>";
       }else{
          echo "<script>alert('Not Added Suucessfully')</script>";
          echo "<script>window.open('dashboard.php?add_policestation','_self')</script>";
       }
     }
      ?>
</body>
</html>