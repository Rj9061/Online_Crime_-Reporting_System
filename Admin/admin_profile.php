
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Admin Profile</title>
	<link rel="stylesheet" type="text/css" href="admin_style.css">
</head>
<body>
	<div id="profile_section">
		<div class="profile_section row">
			<span class="close_icon"><i class="fas fa-times"></i></span>
			<?php 
				if (isset($_SESSION['admin_email'])) {
				$session_email=$_SESSION['admin_email'];	
				$fetch="select * from admin where admin_email='$session_email'";
				$run=mysqli_query($con,$fetch);
				
				while ($row=mysqli_fetch_array($run)) {
				    $admin_id=$row['admin_ID'];
				    $admin_name=$row['admin_name'];
				    $admin_email=$row['admin_email'];
				    $admin_photo=$row['admin_photo'];
				    $admin_phone=$row['admin_phone'];
				    $admin_dob=$row['admin_dob'];
				    $admin_post=$row['admin_post'];
				    $admin_address=$row['admin_address'];

			?>
			<div class="pro_sec_1 col-lg-5">
				<div class="profile_photo col-lg-5">
					<div>
						<?php echo" <img src='photos/officers/$admin_photo' class='img-fluid img-thumbnail'>"; ?>
					</div>
				</div>
			</div>
			<div class="pro_sec_2 col-lg-7">
				<div class="upper_section">
					<h1><?php echo $admin_name; ?></h1>
					<h2><?php echo $admin_post; ?></h2>
				</div>
				<div class="lower_section">
					<div>
						<h2 class="title">personal details</h2>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="td-w25">Full Name</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $admin_name; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-w25">Email</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $admin_email; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-w25">Address</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $admin_address; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-w25">Date Of Birth</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $admin_dob; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-w25">Phone</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $admin_phone; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-w25">Post</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $admin_post; ?></td>
                                    </tr>

                                </tbody>
                            </table>
					</div>
				</div>
			</div>
			<?php } } ?>
		</div>
	</div>
</body>
</html>