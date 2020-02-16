<?php
require 'includes/common.php';
      if(isset($_POST['emailC']) && isset($_POST['nameC']) && isset($_POST['subject']) && isset($_POST['message'])){

        $email=mysqli_real_escape_string($con,$_POST['emailC']);

        //echo ("insert into contactus(name,address,subject,message) values('".$_POST['name']."','".$email."','".$_POST['subject']."','".$_POST['message']."');");
        $insert_query="insert into contactus(name,address,subject,message) values('".$_POST['nameC']."','".$email."','".$_POST['subject']."','".$_POST['message']."');";

        $result=mysqli_query($con,$insert_query) or die(mysqli_error($con));

          header("location:index.php?success=Successfully submitted");
        }
 ?>
