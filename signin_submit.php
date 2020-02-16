<?php
ob_start();
if(!isset($_SESSION)){
    session_start();
    
}
    i
    ?>
<?php
require 'includes/common.php';
    error_reporting(E_ERROR|E_PARSE);
    if(isset($_POST['submit'])){
      echo "1";
      if(isset($_POST['email']) && isset($_POST['password'])){
        echo "2";
        $password=mysqli_real_escape_string($con,$_POST['password']);
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $pass=md5($password);
        $select_query="Select user_id, user_name, email,is_instructor from users where email='$email' and password='$pass'";
        $result=mysqli_query($con,$select_query) or die(mysqli_error($con));
        $row=mysqli_fetch_array($result);
        if(mysqli_num_rows($result)==0){
          header('location:signin.php?error=Invalid email or password');
        }
        else{
            
          session_start();
          $_SESSION['user_id'] = $row['user_id'];
          $_SESSION['user_name'] = $row['user_name'];
          $_SESSION['email'] = $row['email'];
          
          $_SESSION['is_instructor'] = $row['is_instructor'];
          
          echo $_SESSION['user_name'];
          echo $_SESSION['email'];
          //echo "<script type='text/javascript'>document.location.href='index.php';</script>";
         
          header("location:/index.php");
         
        }
      }
      else{
        echo "Hi";
      }
    }
 ?>