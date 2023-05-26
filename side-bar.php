<div class="col-md-3 sidebar">

  <!-- Recent Posts Widget -->
  <div class="widget-recent-posts widget">
    <div class="sidebar-widget-title">
      <h3>Recent Posts</h3>
    </div>
    <ul>
      <?php
      $result = $db->prepare("SELECT * FROM posts ORDER BY id DESC Limit 4");
      $result->execute();
      for ($i = 0; $row = $result->fetch(); $i++) {
      ?>

        <div class="widget-blog-content"><a href="post-detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['posts_title']; ?></a> <span class="meta-data">
            <i class="fa fa-calendar"></i> on <?php echo $row['date']; ?></span> </div>
        </li>
      <?php } ?>
    </ul>
  </div>
</div>
</div>
</div>
</div>
</div>