<?php

include "connect.php";
session_start();
?>
<!DOCTYPE HTML>
<html class="no-js" data-theme="light">


<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Your Board</title>

  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/custom.css">  

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="js/modernizr.js"></script>
  <script src="app.js"></script>

</head>

<body>

  <div class="body">
    <!-- Start Site Header -->
    <header class="site-header">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <a href="index.php"><img src="images/logo.png" width="100" height="80" alt="Logo"></a>
          </div>
          <div id="date-time"></div>
          <div>
            <a href="add_post.php">
              <button class="btn post_btn"><i class="fa fa-plus mr-2"></i>Post</button>
            </a>
          </div>

        </div>
      </div>

      <div class="main-menu-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <nav class="navigation light dark_bg">
                <ul class="sf-menu">
                  <li><a href="index.php">Home</a>
                  </li>
                  <li><a href="showAllpost.php">Board</a>
                  </li>
                  <?php
                  if (isset($_SESSION['SESS_USER_NAME'])) {
                  ?>
                    <a href="./user/logout.php"><i class="fa fa-sign-out"></i> Logout</a>

                  <?php } else if (isset($_SESSION['SESS_FIRST_NAME'])) {
                  ?>
                    <a href="./user/logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                  <?php } else {
                  ?>
                    <li style="background-color:bisque"><a href="./user/user_signin.php">Sigin</a></li>
                    <li style="background-color:bisque"><a href="./user/register.php">Sigup</a></li>

                  <?php }
                  ?>


                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- dark mode button -->
      <div class="darkmode-btn">
        <i class="fa fa-moon-o darkicon"></i>
      </div>
    </header>