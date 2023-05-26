<?php
include '../connect.php';
session_start();

function clean($str, $conn)
{
	$str = @trim($str);
	return mysqli_real_escape_string($conn, $str);
}

//Sanitize the POST values
$login = clean($_POST['username'], $conn);
$password = clean($_POST['password'], $conn);

//Input Validations
if ($login == '') {
	$errmsg_arr[] = 'Username missing';
	$errflag = true;
}
if ($password == '') {
	$errmsg_arr[] = 'Password missing';
	$errflag = true;
}

//If there are input validations, redirect back to the login form

$qry = "SELECT * FROM user WHERE username='$login' AND password='$password'";
$result = mysqli_query($conn, $qry);

//Check whether the query was successful or not
if ($result) {
	if (mysqli_num_rows($result) > 0) {
		//Login Successful
		session_regenerate_id();
		$member = mysqli_fetch_assoc($result);
		$_SESSION['SESS_USER_ID'] = $member['id'];
		$_SESSION['SESS_USER_NAME'] = $member['name'];
		$_SESSION['SESS_USER_EMAIL'] = $member['email'];
		$_SESSION['SESS_USER_PRO_PIC'] = $member['file'];
		session_write_close();
		header("location: index.php");
		exit();
	} else {
		echo '<script language = "javascript">';

		echo "alert('Something went wrong, Enter correct details');window.location.href='user_signin.php'";
		echo '</script>';
		exit;
	}
} else {
	die("Failed to proceed query!");
}
