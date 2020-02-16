
<?php

  require 'includes/common.php';
  
 
  $item_id=$_GET['id'];
  
  $insert_query="INSERT INTO batches(batch_id) VALUES ('$item_id')";
  mysqli_query($con,$insert_query) or die(mysqli_error($con));
  header('location:instructor_page.php');
?>
