<?php
include "../connect.php";
session_start();
if (isset($_SESSION['SESS_USER_NAME'])) {
	header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Sigin</title>
	<link href="../admin/css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

	<div id="page-wrapper" class="sign-in-wrapper">
		<div class="graphs">
			<div class="sign-in-form">
				<div>
					<h2 class="text-center"><span>Sign In to</span> <a href="#">User</a></h2>
					<hr>
				</div>

				<div class="signin">

					<form action="process_login.php" method="post">
						<div class="log-input">
							<div class="log-input-left">
								<input type="text" class="user" name="username" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" />
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="log-input">
							<div class="log-input-left">
								<input type="password" class="lock" value="password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}" />
							</div>

							<div class="clearfix"> </div>
						</div>
						<input type="submit" value="Login to User Area">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>