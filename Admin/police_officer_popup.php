
<!DOCTYPE html>
<html>
<head>
	<title>Police Officer</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
	.modal{
		z-index: 99999 ! important;
	}
		.back3{
			background: #fff;
			position: absolute;
			z-index: 99999;
			top: 10%;
			box-shadow: 0 0.46875rem 2.1875rem rgb(31 10 6 / 3%), 0 0.9375rem 1.40625rem rgb(31 10 6 / 3%), 0 0.25rem 0.53125rem rgb(31 10 6 / 5%), 0 0.125rem 0.1875rem rgb(31 10 6 / 3%);
			margin-right: 30px;
			display: none;
			height: 80vh;
			overflow: auto;
		}
		.back3 .police_officer{
			box-shadow: 0 0.46875rem 2.1875rem rgb(31 10 6 / 3%), 0 0.9375rem 1.40625rem rgb(31 10 6 / 3%), 0 0.25rem 0.53125rem rgb(31 10 6 / 5%), 0 0.125rem 0.1875rem rgb(31 10 6 / 3%);
			position: relative;
			overflow: hidden;
		}
		.back3 .police_officer:hover .delete_officer_panel{
			right: 0%;
		}
		.back3 .content .police_officer img{
			width: 30vh;
			height: 30vh;
		}
		.delete_officer_panel{
			position: absolute;
			top: 0;
			right: 100%;
			background: #cbe3ef;
			height: 31.5vh;
			width: 30vh;
			transition: .4s;
		}
		.delete_officer{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
		}
		@media screen and (max-width: 1440px){
			.delete_officer_panel{
				width: 22vh;
			}

		}
		@media screen and (max-width: 990px){
			.delete_officer_panel{
				width: 50vh;
			}
		}
		@media screen and (max-width: 490px){
			.delete_officer_panel{
				width: 50vh;
				top: 100%;
				right: 0;
				height: 55vh;
			}
			.back3 .police_officer:hover .delete_officer_panel{
			top: 37%;
		}
		}
	</style>
</head>
<body>

	<!-- Content -->
	<div class="back3 pb-5" style="background-image: url(Photos/background/classyfabric2.png);">
		<div class="back_btn mt-2 ml-2 pl-2" style="margin-left: 10px;">
			<button class="btn btn-secondary"><a href="dashboard.php" style="text-decoration: none;" class="text-white">Back</a></button>
		</div>
		<div class='container-fluid content row justify-content-around'>
		<?php
						$select="select * from add_police_officer";
						$run=mysqli_query($con,$select);
						while ($row=mysqli_fetch_array($run)) {
							$name=$row['Name'];
							$image=$row['Photo'];
							$designation=$row['Designation'];
       					 	$phone_number=$row['Phone_Number'];
        					$email=$row['Email_Address'];
        					$city=$row['City'];
        					$ID=$row['ID'];

					echo "
		
			<div class='row police_officer col-lg-5 pt-2 pb-2 mt-5'>
				<div class='photo col-lg-4'>
					<img class='img-fluid' src='../pages/Photos\police_officer/$image'>
				</div>
				<div class='police_officer_details col-lg-8 row ms-auto pt-3'>
					<div class='col-lg-6'>	
						<h5>Name:</h5><P>$name</P>
						<h5>Designation:</h5><P>$designation</P>
						<h5>City/District:</h5><P>$city</P>
					</div>
					<div class='col-lg-6'>
						<h5>Mobile Number:</h5><p>$phone_number</p>
						<h5>Email:</h5><p>$email</p>
					</div>
				</div>
				<div class='delete_officer_panel'>
					<form method='GET'>
						<div class='delete_officer text-center'>
							   <!-- Button trigger modal -->
								<button type='button' class='btn btn-primary update_data' data-id='$ID' data-bs-toggle='modal' data-bs-target='#exampleModal'>
								  Update
								</button>
							<button class='btn btn-primary'><a href='delete.php?id=$ID' class='text-white'>Delete</a></button>
						</div>
					</form>
				</div>
			</div>
		
		"; }
		?>
		</div>
	</div>
	<!-- Content End -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
  </div>
</div>
</div>

</body>
<script>
    $(document).ready(function(){
                        $('.update_data').click(function() {
                        	var update=$(this).attr('data-id');
                        	$.ajax({
                                url:'update_police_officer.php',
                                type:'post',
                                data: {updateID:update},
                                success:function(data) {
                                   $('.modal-content').html(data);
                                }
                            });          
                    });
                });
                            
</script>
<?php 
    
    if (isset($_POST['submit'])) {
        $name=$_POST['name'];
        $designation=$_POST['designation'];
        $phone_number=$_POST['phone'];
        $email=$_POST['email'];
        $city=$_POST['city'];
        $id=$_POST['Update_id'];

        if(empty($_FILES['photo']['name'])){
				 $select="select * from add_police_officer where ID='$id'";
                   $run=mysqli_query($con,$select);
	            while($row=mysqli_fetch_array($run))
	            {
	            $image=$row['Photo'];

				$update="update add_police_officer SET Name='$name',City='$city',Phone_Number='$phone_number',Email_Address='$email',Photo='$image',Designation='$designation' where ID='$id'";
        		$running=mysqli_query($con,$update);
        		}
				echo '<script>swal("Great!", "You have Successfully Updated Details!", "success").then(function() {
                              window.location = "dashboard.php";
                          });</script>';
			}else{
				$image=$_FILES['photo']['name'];
		        $temp_image=$_FILES['photo']['tmp_name'];
		        move_uploaded_file($temp_image,"../pages/Photos/police_officer/$image");

		        $update="update add_police_officer SET Name='$name',City='$city',Phone_Number='$phone_number',Email_Address='$email',Photo='$image',Designation='$designation' where ID='$id'";
		        $running=mysqli_query($con,$update);
		        echo '<script>swal("Great!", "You have Successfully Updated Details!", "success").then(function() {
                              window.location = "dashboard.php";
                          });</script>';
    	}
    }

 ?>
</html>