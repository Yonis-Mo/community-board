<?php include "header.php"; ?>

<!-- slider start -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images\slider\2.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images\slider\1.jpg" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- slider end -->

<div class="container" >
  <header class="listing-header">
    <h3>Latest Posts</h3>
    <hr>
  </header>
  <!-- cards start -->
  <div class="card-deck">
    <?php
    $result = $db->prepare("SELECT * FROM posts ORDER BY id DESC Limit 4");
    $result->execute();
    for ($i = 0; $row = $result->fetch(); $i++) {
    ?>
      <div class="card dark_bg">
        <img class="card-img-top card_img" src="uploads/<?php echo $row['file']; ?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><a class="" href="post-detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['posts_title']; ?></a></h5>
          <p class="card-text"><?php echo strip_tags(substr($row['posts_detail'], 0, 100)); ?>...</p>
        </div>
        <div class="card-footer dark_bg">
          <small class="text-muted"><b>Last updated</b> <?php echo $row['date']; ?></small>
          <br>
          <small class="text-muted"><b>Author:</b>
            <?php
            $composer = $row['author'];
            if (!isset($_SESSION['SESS_USER_NAME'])) {
              $composer = 'ANONYMOUS';
            }
            echo $composer ?></small>
        </div>
      </div>
    <?php } ?>
  </div>
  <!-- cards end -->
  <div class="text-center my-5">
    <a href="showAllpost.php">
      <button class="post_btn">
        All Posts
      </button>
    </a>
  </div>  
</div>


<?php include "footer.php"; ?>