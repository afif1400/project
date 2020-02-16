<?php 
    include "includes/navbar.php"
    
?>    
<!DOCTYPE html>
<html>
<head>
    
   
<title>SignUp</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/signup.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/batches.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body style="background-color:#1c828a">
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="signup_submit.php" method="post">
					<?php if(isset($_GET['email_error'])){
						echo '<p style="color:red;">'. $_GET['email_error'] .'</p>';
					} ?>
					<input class="text" type="text" name="username" placeholder="Username" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
		        <?php if(isset($_GET['repwd_error'])){
							echo '<p style="color:red;margin-top: 1rem;margin-bottom: -1rem;">'. $_GET['repwd_error'] .'</p>';
		        } ?>
					<input class="text w3lpass" type="password" name="repwd" placeholder="Confirm Password" required="">
					<input type="submit" value="SIGN UP">
				</form>
				<p>Already have an Account? <a href="signin.php"> Login Now!</a></p>
			</div>
		</div>
	</div>
	<!-- //main -->
</body>
</html>
