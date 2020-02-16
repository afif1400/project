<?php
    
  ob_start();  
  require 'includes/common.php';
  error_reporting(E_ERROR|E_PARSE);
$name=$_POST['username'];
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$repassword=mysqli_real_escape_string($con,$_POST['repwd']);
$pass=md5($password);
$repass=md5($repassword);
echo $pass;
echo $repass;
if($pass==$repass){
  $select_query="Select user_id from users where email='$email'";
  $result=mysqli_query($con,$select_query) or die(mysqli_error($con));
  if(!(mysqli_num_rows($result)>0)){
    $insert_query="Insert into users(user_name, email, password) values ('$name','$email','$pass')";
    mysqli_query($con,$insert_query) or die(mysqli_error($con));
    session_start();
      $select_query1="Select user_id, user_name, email from users where email='$email'";
      $result1=mysqli_query($con,$select_query1) or die(mysqli_error($con));
      $row=mysqli_num_rows($result1);
    $_SESSION['user_id']=$row['user_id'];
    $_SESSION['email']=$row['email'];
    $_SESSION['user_name']=$row['user_name'];
    echo "<script type='text/javascript'>document.location.href='index.php';</script>";
    //header('location:index.php');
  }
  else{
    header('location:signup.php?email_error=Username exists');
  }
}
else{
  header('location:signup.php?repwd_error=Password doesn\'t match');
}

?>
