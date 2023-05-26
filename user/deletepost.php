<?php

	include '../connect.php';
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM posts WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
      header("location:index.php?success=true");
        }else{
            header("location:index.php?failed=true");
        } 
		
?>