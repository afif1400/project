<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    ?>
<?php 
      require 'includes/common.php';
      require 'includes/navbar.php';
      include 'check-if-added.php';
?>

﻿<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/homepage.css">
  <link rel="stylesheet" href="css/batches.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SpanishBolo | Homepage</title>
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
  <link rel="stylesheet" href="css/homepage.css">
</head>
<body>
<div id="banner_image">
  <div class="container-fluid">
  <div class="content">
    <div class="banner-image">
      <div class="inner-banner-image">
        <center>
          <div id="banner_content">
              <h1>Connect With Us!</h1>
              <a href="#batches" class="btn btn-primary btn-lg active" style="background-color: #1c828a;border-color: #1c828a;">View Batches</a>
          </div>
        </center>
      </div>
    </div>
  </div>
  </div>
</div>

<div></br>
</div>

<?php
        $conn = mysqli_connect("localhost","id12132688_root","iball12312","id12132688_spanishbolo");
        if($conn->connect_error){
            die("connection failed:". $connect_error);
        }
        $sql="SELECT * from batches";
        $result = $conn->query($sql);

        if($result -> num_rows > 0){
        while ($row = $result -> fetch_assoc()){
        ?>
<div id="batches">
        <div class="panel-group " style="padding-left:6%;padding-right:6%">
                <div class="panel panel-default shadow rounded" >
                    <div class="panel-heading" id="p1"><?php echo $row["batch_name"] ?>
                    </div>


                    <div class="panel-body" id="p2" style="height: 40px"><?php echo $row["batch_id"] ?>

                        <?php if (!isset($_SESSION['email'])) { ?>
                              <a href="signin.php"><input type="button" class="btn btn-primary btn-lg pull-right"  id ="bt1" value="Enroll"></a>
                            <?php
                          } else {
                             //We have created a function to check whether this particular product is added to cart or not.
                             if (check_if_added_to_cart($row['batch_id'])) { //This is same as if(check_if_added_to_cart != 0)
                               echo '<a href="index.php"><input type="button" class="btn btn-primary btn-lg pull-right"  id ="bt1" disabled value="Added to Cart"></a>';

                             }
                             else {?>
                               <a href="cart-add.php?id=<?php echo $row['batch_id'] ?>" name="add" value="add"><input type="button" class="btn btn-primary btn-lg pull-right"  id ="bt1" value="Enroll"></a>
                             <?php
                           }
                         } ?>
                    </div>
                    <div class="panel-body" id="p2">Classes On


                    <?php
                        if($row["is_monday"] == 1)
                        {?>

                            <div class="btn btn-primary" id="bt" >Mon</div>
                        <?php } ?>
                        <?php
                        if($row["is_tuesday"] == 1)
                        {?>
                            <div class="btn btn-primary " id="bt" >Tue</div>
                        <?php } ?>
                        <?php
                        if($row["is_wednesday"] == 1)
                        {?>
                            <div class="btn btn-primary " id="bt" >Wed</div>
                        <?php } ?>
                        <?php
                        if($row["is_thursday"] == 1)
                        {?>
                            <div class="btn btn-primary " id="bt" >Thur</div>
                        <?php } ?>
                        <?php
                        if($row["is_friday"] == 1)
                        {?>
                            <div class="btn btn-primary " id="bt" >Fri</div>
                        <?php } ?>
                        <?php
                        if($row["is_saturday"] == 1)
                        {?>
                            <div class="btn btn-primary " id="bt" >Sat</div>
                        <?php } ?>
                        <?php
                        if($row["is_sunday"] == 1)
                        {?>
                            <div class="btn btn-primary " id="bt" >Sun</div>
                        <?php } ?>
                        </div>


                </div></br>


        </div>



    </div>




</div>
<?php
            }

            }
            else{
                echo "0 result";
            }

            $conn->close();
            ?>

            <div style="margin:20px;border:1px solid #cacdce;padding-bottom:2%;" id="contactUs">
                <div class="contact">
                  <div class="jumbotron jumbotron-sm jumbotronh jumbotron-smh">
                  <div class="container">
                      <div class="row">
                          <div class="col-sm-12 col-lg-12 ">
                              <h1 class="h1">
                                  Contact us </h1>
                          </div>
                      </div>
                  </div>
              </div>

  <div class="container">
      <div class="row">
          <div class="col-md-8">
              <div class="well well-sm">
                  <p style="color:green">
                    <?php if(isset($_GET['success'])){
                      echo $_GET['success'];
                    } ?>
                  </p>
                  <form action="contact.php" method="post">
                  <div class="row">

                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="name">
                                  Name</label>
                              <input type="text" class="form-control" name="nameC" placeholder="Enter name" required="required" />
                          </div>
                          <div class="form-group">
                              <label for="email">
                                  Email Address</label>
                              <div class="input-group">
                                  <span class="input-group-addon mailIcon" style="width:3rem"><span class="glyphicon glyphicon-envelope"></span>
                                  </span>
                                  <input type="email" class="form-control" name="emailC" placeholder="Enter email" required="required" /></div>
                          </div>
                          <div class="form-group">
                              <label for="subject">
                                  Subject</label>
                              <select id="subject" name="subject" class="form-control" required="required">
                                  <option value="na" selected="">Choose One:</option>
                                  <option value="service">General Customer Service</option>
                                  <option value="suggestions">Suggestions</option>
                                  <option value="product">Support</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="name">
                                  Message</label>
                              <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                  placeholder="Message"></textarea>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                              Send Message</button>
                      </div>
                  </div>
                  </form>
              </div>
          </div>

          <div class="col-md-4">
              <form>
              <legend class="legSpace"><span class="glyphicon glyphicon-globe"></span> Our office</legend>
              <address>
                  <strong>SpanishBolo</strong><br>
                   7-9/57, Suncity<br>
                   Hyderabad<br>
                  <abbr title="Phone">
                      P:</abbr>
                   +91 7660961752
              </address>
              <address>
                  <strong>Mail Us : </strong>
                  <a href="mailto:#">founder@spanishbolo.com</a>
              </address>
              </form>
          </div>
      </div>
  </div>
  </div>
</div>
</div>
<!--------------------About us start-------------------->
<div class="aboutus-section" id="aboutUs">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="aboutus">
                        <h2 class="aboutus-title">About Us</h2>
                        <p class="aboutus-text" style"font-color:greeen"> We make learning accessible to our clients from any location and in any format through video or audio e-learning. Our aim is to not just impart knowledge but make it easy to apply it. And thus, our alternative interactive methods are designed to cater to the varied needs of our users. We want to connect people of all age groups and make Spanish an engaging language to learn!</p>
                        <p class="aboutus-text" style"color:#FFA500">OUR MOTTO-if you have no time to attend the classroom,we bring the classroom to you! </p>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="aboutus-banner">
                        <img src="http://themeinnovation.com/demo2/html/build-up/img/home1/about1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="feature">
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h4>Learn with heart</h4>
                                    <p>Wouldn't it be easier to find all your resources in one place and navigate through everything on one portal? It is basically a treasure for learners to have integrated online learning using videos and audios. It makes the process not only easy but also engaging and interesting. Come try out this feature and judge for yourself!.</p><br>
                                </div>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h4>Insight</h4>
                                    <p>We think about what the learners need to do with the information or skill gained, after the course is finished and design around that</p><br>
                                </div>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h4>Great support</h4>
                                    <p>L:  Listen
                                        E:  Engage
                                        A : Ask
                                        R : Repeat 
                                        N : Note
                                        
                                        Follow the acronym for LEARN above, practice what you learn and never stop observing the minute details of a language. SpanishBOLO is here to aid you with the best tutors but your input in terms of personal efforts will provide the end result. So buck up! it is time for some fun-learn!



</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--------------------About us end-------------------->


</body>
</html>
