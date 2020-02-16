<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    ?>
<?php 
    
    include 'includes/navbar.php'; ?>
﻿<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <!-- For Glyphicons -->
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
<br style="margin-top:10%" class="aboveSpaceCart">
<div class="container">
  <h2>Enrolled Courses</h2>
      <?php
            require'includes/common.php';
            $sum=0;
            if (isset($_SESSION['email']))
             {
                 $user_id=$_SESSION['user_id'];
                 $join_query="select * from user_enrolled_batches inner join batches on user_id='$user_id' and batch_status=1 and batches.batch_id=user_enrolled_batches.batch_id";
                 $result=mysqli_query($con,$join_query) or die(mysqli_error($con));
                 if(mysqli_num_rows($result)==0)
                 {
                   echo "<h4 style=\";color:red\">Add items to the cart first!<h4>" ;
                 }
                 else
                 {?>
                   <p>  Items in your cart</p>
                   <table class="table table-striped">
                     <thead>
                       <tr>
                         <th>Sl.No</th>
                         <th>Batch Name</th>
                         <th>Price</th>
                         <th></th>
                       </tr>
                     </thead>
                     <tbody><?php

                     $i=0;
                   while($row=mysqli_fetch_array($result))
                   {
                     $sum = $sum + $row['price'];
                     $i++;?>
                     <tr>
                       <td><?php echo $i; ?></td>
                       <td><?php echo $row['batch_name'] ?></td>
                       <td><?php echo $row['price'] ?></td>
                       <?php echo "<td><a href='cart-remove.php?id=".$row['batch_id']."'>Remove</a></td>"; ?>
                     </tr>
                   <?php } ?>
                     <tr>
                       <td colspan="2">Total:</td>
                       <td>Rs <?php echo $sum ?>/-</td>
                       <!-- <td><a href="confirmOrder.php">Confirm Order</button></a></td> -->
                     </tr>
                   </tbody>
                 </table>
                     <?php

                 }
               }
              ?>

</div>
<br style="margin-top:10%">
<div class="foot">
<?php //include 'includes/footer.php'; ?>
</div>
</body>
</html>
