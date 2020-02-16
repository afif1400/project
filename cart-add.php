<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    ?>
<?php

  require 'includes/common.php';
  
  $user_id=$_SESSION['user_id'];
  $item_id=$_GET['id'];
  $insert_query="INSERT INTO user_enrolled_batches(user_id, batch_id, batch_status) VALUES('$user_id', '$item_id', 1)";
  mysqli_query($con,$insert_query) or die(mysqli_error($con));
  header('location:index.php');
?>
