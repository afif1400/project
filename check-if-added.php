<?php

    function check_if_added_to_cart($batch_id){
      require'includes/common.php';
      $user_id=$_SESSION['user_id'];

      $check_query="SELECT * FROM user_enrolled_batches WHERE batch_id='$batch_id' AND user_id ='$user_id' and batch_status=1";

      $result=mysqli_query($con,$check_query) or die(mysqli_error($con));
      if(mysqli_num_rows($result)>=1){
        return 1;
      }
      else{
        return 0;
      }
    }



        function check_if_order_confirmed($batch_id){
          require'includes/common.php';
          $user_id=$_SESSION['user_id'];

          $check_query="SELECT * FROM user_enrolled_batches WHERE batch_id='$batch_id' AND user_id ='$user_id' and batch_status=2";

          $result=mysqli_query($con,$check_query) or die(mysqli_error($con));
          if(mysqli_num_rows($result)>=1){
            return 1;
          }
          else{
            return 0;
          }
        }

 ?>
