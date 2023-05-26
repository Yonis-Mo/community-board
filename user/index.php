<?php
include "../connect.php";
session_start();
if (!isset($_SESSION['SESS_USER_NAME'])) {
	header("location: user_signin.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Dashboard</title>

	<link href="../admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href=" ../admin/css/style.css" rel='stylesheet' type='text/css' />
	<link href="../admin/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
	<div class="container mt-4">
		<div class="d-flex justify-content-between align-items-center">
			<div>
				<a href="../add_post.php">
					<button class="btn btn-primary"><i class="fa fa-plus mr-2"></i>Create Post</button>
				</a>
			</div>
			<div>
				<a href="../index.php"><img src="../images/logo.png" width="100" height="80" alt="Logo"></a>
			</div>
			<div>
				<a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
			</div>
		</div>


		<div id="page-wrapper">
			<div class="graphs">
				<h3 class="blank1">All Posts</h3>
				<div class="xs tabls">
					<div class="panel-body1">

						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Title</th>
									<th>Date</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if (!isset($_GET["page"])) {
									$_GET["page"] = 1;
								}

								$tbl_name = "posts";		//your table name
								// How many adjacent pages should be shown on each side?
								$adjacents = 3;

								$get_posts_tbl = ORM::for_table("$tbl_name")
									->find_array();

								$total_pages = count($get_posts_tbl);
								/* Setup vars for query. */
								$targetpage = "pagination.php"; 	//your file name  (the name of this file)
								$limit = 10; 								//how many items to show per page
								$page = $_GET['page'];
								if ($page)
									$start = ($page - 1) * $limit; 			//first item to display on this page
								else
									$start = 0;								//if no page var is given, set start to 0

								/* Get data. */

								$result = $db->prepare("SELECT * FROM posts  ORDER BY id DESC LIMIT $start, $limit");
								$result->execute();

								/* Setup page vars for display. */
								if ($page == 0) $page = 1;					//if no page var is given, default to 1.
								$prev = $page - 1;							//previous page is page - 1
								$next = $page + 1;							//next page is page + 1
								$lastpage = ceil($total_pages / $limit);		//lastpage is = total pages / items per page, rounded up.
								$lpm1 = $lastpage - 1;						//last page minus 1
								?>

								<span class="text-muted m-r-sm">Showing
									<?php if ($lastpage == $next - 1) : ?>
										<?= $total_pages ?>
									<?php else : ?>
										<?= $page * $limit ?>
									<?php endif; ?>
									of <?= $total_pages ?>
								</span>

								<div class="btn-group">
									<?php if ($page != 1) : ?>
										<a class="btn btn-default" href="?page=<?= $prev ?>"><i class="fa fa-angle-left"></i></a>
									<?php endif; ?>

									<?php if ($lastpage == $next - 1) : ?>

									<?php else : ?>
										<a class="btn btn-default" href="?page=<?= $next ?>"><i class="fa fa-angle-right"></i></a>
									<?php endif; ?>
								</div>
					</div>
				</div>
				<table class="table">
					<?php

					for ($i = 1; $row = $result->fetch(); $i++) {

					?>
						<tr>
							<th scope="row"><?php echo $i; ?></th>
							<td><?php echo $row['posts_title']; ?></td>
							<td><?php echo $row['date']; ?></td>
							<td>
								<a href="../post-detail.php?id=<?= $row['id'] ?>" target="_blank" class="fa fa-eye-slash btn btn-xs btn-primary">View</a>
								<a href="deletepost.php?id=<?= $row['id'] ?>" class="fa fa-eraser btn btn-xs btn-success warning_4 delbtn">Delete</a>

							</td>
						</tr>
						</tbody>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</body>

</html>