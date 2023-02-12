
<!-- Connect Database -->
<?php
    include ("../database\db.php");
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <?php
        include ("../links/alllinks.php");
    ?>
</head>
<body>
        <?php  $updata_id=$_POST['updateID']; ?>


      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <div>
            <?php
           
            $select="select * from add_police_officer where ID='$updata_id'";
                        $run=mysqli_query($con,$select);
            while($row=mysqli_fetch_array($run))
            {
            $name=$row['Name'];
            $image=$row['Photo'];
            $designation=$row['Designation'];
            $phone_number=$row['Phone_Number'];
            $email=$row['Email_Address'];
            $city=$row['City'];
            $ID=$row['ID'];
        }
        ?>
                <h2 class="text-center mt-2 text-danger">Update Police Officer</h2>
                  <div class="container  align-items-center mt-5">
                    <form class="" method="POST" enctype="multipart/form-data" >
                       <div style="visibility: hidden;"> <input type="" name="Update_id" value="<?php echo $ID ?>"></div>
                      <div class="mb-3">
                        <label for="name" class="form-label">Enter Name</label>
                        <input type="text" required="" value="<?php echo $name; ?>" name="name" class="form-control" >
                      </div>
                      <div class="mb-3">
                        <label for="photo" class="form-label">Add Photo</label>
                        <input type="file" name="photo" class="form-control" >            
                      </div>
                      <div class="mb-3">
                        <label for="photo" class="form-label">Add Designation</label>
                        <input type="text" required="" value="<?php echo $designation; ?>" name="designation" class="form-control" >            
                      </div>
                      <div class="mb-3">
                        <label for="photo" class="form-label">Add Phone Number</label>
                        <input type="text" required="" value="<?php echo $phone_number; ?>" name="phone" class="form-control" >            
                      </div>
                      <div class="mb-3">
                        <label for="photo" class="form-label">Add Email Address</label>
                        <input type="text" required="" value="<?php echo $email; ?>" name="email" class="form-control" >            
                      </div>
                      <div class="mb-3">
                        <label for="photo" class="form-label">Add City/District</label>
                        <input type="text" required="" value="<?php echo $city; ?>" name="city" class="form-control" >            
                      </div>
                      <button  name="submit" class="btn btn-primary">Save changes</button>
                    </form>
                  </div>
             </div>
              
       </div>
      <div class="modal-footer">
        <button  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>



</body>

</html>
