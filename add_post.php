<?php
include 'header.php';
?>

<div class="container py-5">

    <div class="col-md-8 inbox_right py-4">
        <div class="Compose-Message">
            <div class="panel panel-default">                
                <div class="panel-heading">
                    Create Posts
                </div>                
                <div class="panel-body panel-body-com-m">

                    <form action="./admin/save-posts.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="post_title">Post Title</label>
                            <input type="text" class="form-control" name="posts_title" required>
                        </div>
                        <div class="form-group">
                            <label for="post_description">Description</label>
                            <textarea class="form-control" name="posts_detail" rows="6" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="post_thumbnail">Add Post Thumbnail</label>
                            <input type="file" class="form-control-file" name="file" required>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>