<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    ?>
<?php

  require 'includes/common.php';
  
  $user_id=$_SESSION['user_id'];
  $url=$_POST['url'];
  $item_id=mysqli_real_escape_string($con,$_POST['id']);
  $sql=" INSERT INTO video_url(url,batch_id) VALUES ('".$url."',$item_id)";
  mysqli_query($con,$sql) or die(mysqli_error($con));
  header('location:index.php');
?>