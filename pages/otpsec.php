<?php
include ("../database\db.php");
session_start();
?>
<html>
<head>
	<?php
		include ("../links/alllinks.php");
	?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

</head>
<body>

			<div class="otp_section">
			<form class="m-2 forget mt-3" method="POST">
				<div class="form-outline mt-3">
					<label class="mb-2">Enter your OTP</label>
					<input type="text" class="form-control" required="" name="otp">
				</div>
				<div class="form-outline mt-3">
					<label class="mb-2">Enter your Password</label>
					<input type="text" class="form-control" required="" name="forget_password">
				</div>
				<div class="form-outline mt-3">
					<label class="mb-2">Enter your confirm Password</label>
					<input type="text" class="form-control" required="" name="forget_con_password">
				</div>
				<div class="mt-3 text-center mb-5">
					<button type="submit" class="btn" name="ok">Submit</button>
				</div>
			</form>
		</div>

</body>

</html>


 