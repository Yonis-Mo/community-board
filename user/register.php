<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Register</title>
	<link href="../admin/css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
	<div class="container">
		<div id="page-wrapper">
			<div class="graphs">
				<div class="xs">

					<div class="col-md-8" style="margin: auto;">
						<div class="Compose-Message">
							<div class="panel panel-default">
								<div class="panel-heading">
									Register User
								</div>

								<div class="panel-body panel-body-com-m">

									<form class="com-mail" action="save-user.php" method="post" enctype="multipart/form-data">

										<label>Name : </label>
										<input type="text" name="name" class="form-control1 control3" required>
										<label>Email : </label>
										<input type="text" name="email" class="form-control1 control3" required>
										<label>Username : </label>
										<input type="text" name="username" class="form-control1 control3" required>
										<label>Password : </label>
										<input type="password" name="password" class="form-control1 control3" required>

										<label>Add Photo</label>
										<input type="file" name="file" class="form-control1 control3" required>

										<hr>
										<input type="submit" value="Register">
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>