<?php include "header.php"; ?>

<!-- Start Nav Backed Header -->
<?php
$id = $_GET['id'];
$result = $db->prepare("SELECT * FROM posts where id= :post_id");
$result->bindParam(':post_id', $id);
$result->execute();
for ($i = 0; $row = $result->fetch(); $i++) {
?>
  <div class="nav-backed-header parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="showAllpost.php">Board</a></li>
            <li class="active"><?php echo $row['posts_title']; ?></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- End Nav Backed Header -->
  
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-8">
          <h1>Board</h1>
        </div>
      </div>
    </div>
  </div>  
  

  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <header class="single-post-header clearfix">
              <h2 class="post-title"><?php echo $row['posts_title']; ?></h2>
            </header>
            <article class="post-content"> <span class="post-meta meta-data"><span><i class="fa fa-calendar"></i> Posted on <?php echo $row['date']; ?></span> <span></i> </span></span>
              <div class="featured-image"> <img src="uploads/<?php echo $row['file']; ?>" alt=""> </div>
              <div><?php echo $row['posts_detail']; ?></div>

            </article>
          </div>
        <?php } ?>
        <!-- Start Sidebar -->
        <?php include "side-bar.php"; ?>
        <!-- Start Footer -->
        <?php include "footer.php"; ?>