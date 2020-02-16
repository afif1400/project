<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    ?>
                       
            
 <?php 
      require 'includes/common.php';
      require 'includes/navbar.php';

?>

﻿<!DOCTYPE html>
<html lang="en">
<head>
<style>
::placeholder{
    color:black;
    opacity:1;
}
.nav-pills.li.active{background-color:red;}

    li.active{background-color:red;}
    
    
  .modal-content iframe{
        margin: 0 auto;
        display: block;
    }


 </style>
  <title>Batch Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/homepage.css">
  <link rel="stylesheet" href="css/batches.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SpanishBolo | Instructor</title>

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
        <body style="background-color:rgba(0,0,0,0.18)">
            
            <ul class="nav nav-pills nav-fill container " id="tab" style="margin-left:%;margin-bottom:1%;padding-left:2%;padding-right:2%;" >
            <li class=" nav-item nav-link active shadow bg-black rounded" id="tab1" style="color:#1c828a;font-size:20;paddind:1% ;margin-bottom:1%" data-toggle="tab" href="#form1" >Add Batches
               
            </li>
            <li class="  nav-item nav-link shadow bg-black rounded" id="tab2" style="color:#1c828a;widt:absolute;font-size:20;paddind:1%;margin-bottom:1%" data-toggle="tab" data-target="#qwer" href="#qwer" >Upload Materials
               
            </li>
            <li class="nav-item nav-link shadow bg-black rounded" id="tab3" style="color:#1c828a;with:absolute;font-size:20;paddind:1%;margin-bottom:1%" data-toggle="pill" href="#material_view" >View Materials
               
               </li>
        </ul>
            <div class="tab-content">
             
              <div class="tab-pane container" id="material_view">
                    <?php
                        $sql1="SELECT * from batches ";
                        $result1 = $con->query($sql1);
                
                        if($result1 -> num_rows > 0){
                        while ($row1 = $result1 -> fetch_assoc()){
                        
                ?>
                <div class="card shadow bg-black rounded " style="margin:1%">
                    <div class="card-title" id="p1" style="padding-top:1% ;height:50px;padding-left:1%" aria-expanded="false"><?php echo $row1['batch_name']  ?></div>
                    <div class="card-subtitle"  style="padding:1%"><?php echo $row1['batch_id'] ?></div>
                    <div class="card-body" style="padding-bottom=0%"> Classes On
                        <?php if($row1['is_sunday']){?>
                        <div class="btn btn-primary" id="bt">Sun</div>
                        <?php } ?>
                        <?php if($row1['is_monday']){?>
                        <div class="btn btn-primary" id="bt">Sun</div>
                        <?php } ?>
                        <?php if($row1['is_tuesday']){?>
                        <div class="btn btn-primary" id="bt">Sun</div>
                        <?php } ?>
                        <?php if($row1['is_wednesday']){?>
                        <div class="btn btn-primary" id="bt">Sun</div>
                        <?php } ?>
                        <?php if($row1['is_thursday']){?>
                        <div class="btn btn-primary" id="bt">Sun</div>
                        <?php } ?>
                        <?php if($row1['is_friday']){?>
                        <div class="btn btn-primary" id="bt">Sun</div>
                        <?php } ?><?php if($row1['is_saturday']){?>
                        <div class="btn btn-primary" id="bt">Sun</div>
                        <?php } ?>
                        
                        
                        <?php 
                        
                        echo  ' <button id="bt1" style="margin-right:5px;margin-left:5px;margin-bottom:5px;margin-top:1px" class="btn btn-primary pull-right video-btn"  data-toggle="modal" data-target="#myModal"?>view video</button>';
                         
                         
                        echo  ' <button id="bt1" style="margin-right:5px;margin-left:5px;margin-bottom:5px;margin-top:1px"  class="btn btn-primary pull-right " data-toggle="modal" data-target="#myModal_'.$row1['batch_id'].'"?>view assign</button>';
                        ?>
                        
                        <?php
                            echo '<div class="modal fade" role="dialog" style="overflow:hidden;width:;margin-top:2%;margin-right:0%" id="myModal_'.$row1['batch_id'].'">';
                            ?>
                                <div class="modal-dialog modal-lg">
                    
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header pull-left">File Name
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"></h4>
                                        </div>
                                        <div class="modal-body">
                    
                                            <embed src="upload/Maxwell's_equations.pdf" frameborder="0" width="100%" height="400px">
                    
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                    
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Trigger the modal with a button -->
                            
                            
                            <!-- Modal -->

                          <div id="myModal" style="padding:1%;overflow:hidden" class="modal fade">
                            <div class="modal-dialog" >
                                <div class="modal-content" >
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">YouTube Video</h4>
                                    </div>
                                    <div class="modal-body" style="margin-left:0%;margin-right:0%;padding-left:0%;padding-right:0%">
                                        <iframe   id="cartoonVideo"  src="//www.youtube.com/embed/YE7VzlLtp-4"  allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            
                                            <!--div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-body">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <iframe width="100%" height="350" src="" frameborder="0" allowfullscreen></iframe>
                            </div>
                          </div>
                        </div>
                      </div-->
                      
                        
                         
                        
                        </div>
                        
                        
                            
                            
                              

                            
                            
                         
                        </div>
                        
                        
                            
                                                    
                         
                        <?php
                        }
                        }
                        else{
                            echo " no result";
                        }
                       
                        ?>
              </div>
              <div class="tab-pane container" id="qwer">
                
                    <?php
                        $sql="SELECT * from batches ";
                        $result = $con->query($sql);
                
                        if($result -> num_rows > 0){
                        while ($row = $result -> fetch_assoc()){
                        
                ?>
                <div class="card shadow bg-black rounded " style="margin:1%">
                    <div class="card-title" id="p1" style="padding-top:1% ;height:50px;padding-left:1%" aria-expanded="false"><?php echo $row['batch_name']  ?></div>
                    <div class="card-subtitle"  style="padding:1%"><?php echo $row['batch_id'] ?></div>
                    <div class="card-body" style="padding-bottom=0%"> Classes On
                        <?php if($row['is_sunday']){?>
                        <div class="btn btn-primary" id="bt">Sun</div>
                        <?php } ?>
                        <?php if($row['is_monday']){?>
                        <div class="btn btn-primary" id="bt">Sun</div>
                        <?php } ?>
                        <?php if($row['is_tuesday']){?>
                        <div class="btn btn-primary" id="bt">Sun</div>
                        <?php } ?>
                        <?php if($row['is_wednesday']){?>
                        <div class="btn btn-primary" id="bt">Sun</div>
                        <?php } ?>
                        <?php if($row['is_thursday']){?>
                        <div class="btn btn-primary" id="bt">Sun</div>
                        <?php } ?>
                        <?php if($row['is_friday']){?>
                        <div class="btn btn-primary" id="bt">Sun</div>
                        <?php } ?><?php if($row['is_saturday']){?>
                        <div class="btn btn-primary" id="bt">Sun</div>
                        <?php } ?>
                        
                        
                        <?php 
                        
                        echo  ' <button id="bt1" style="margin-right:5px;margin-left:5px;margin-bottom:5px;margin-top:1px" class="btn btn-primary pull-right" data-toggle="collapse" href="#collapse_'.$row['batch_id'].'"?>Add Assign</button>';
                         
                         
                        echo  ' <button id="bt1" style="margin-right:5px;margin-left:5px;margin-bottom:5px;margin-top:1px"  class="btn btn-primary pull-right" data-toggle="collapse" href="#collapse1_'.$row['batch_id'].'"?>Add Vieo</button>';
                        ?>
                        
                      
                       
                        
                        
                        
                         
                        
                        </div>
                        
                        <?php
                            echo '<div class="collapse" style="overflow:hidden;width:;margin-top:2%;margin-right:0%" id="collapse_'.$row['batch_id'].'">';
                            ?>
                            <hr style="border-top:0.5px solid black">  
                            <div class="panel panel-body " style="padding:0%;margin-bottom:0%;border:1px;border-color:black " >
                            <form action="video-add.php" method="POST">
                                        <div class="form-group" >
                                            <?php $id = $row['batch_id'];
                                                ?>
                                            <?php // echo '<input type="hidden" name="id" value="'. $row['batch_id'].'" >' ;?>
                                            
                                            <input type="hidden" name="id" value="<?php echo $id ?>">
                                            <div class="container">
                                                <div class="form-row"  >
                                                    <div class="col-11" style=";padding-left:1%;padding-right:0%">
                                                        <input class="form-control form-control-lg" style="heght:32px;width:relative;padding-right:0%" name="url"  type="url" pattern="https://.+" >
                                            
                                                    </div>
                                                    <div class="col" style="padding-left:0%">
                                                                                                                
                                                        <?php  echo '<button type="submit" class="btn btn-primary  pull-right" name="'.$row['batch_id'].'" id="bt1" >Submit</button>';
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            

                                            
                                        </div>
                                        </form>
                            </div>
                            </div>
                            
                              <?php
                            echo '<div class="collapse" style="overflow:hidden;width:;margin-top:2%;margin-right:0%" id="collapse1_'.$row['batch_id'].'">';
                            ?>
                            <div class="panel panel-body" style="padding:0%;margin-bottom:0% " >
                            <form id="uploa_form" action="file_add.php" enctype="multipart/form-data" method="POST">
                                        <div class="form-group" >
                                            <?php $id = $row['batch_id'];
                                                ?>
                                            <?php // echo '<input type="hidden" name="id" value="'. $row['batch_id'].'" >' ;?>
                                            
                                            <input type="hidden" name="id" value="<?php echo $id ?>">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                       <input  id="fileToUpload"  name="fileToUpload"  type="file"  > 
                                                    </div>
                                                    <div class="col">
                                                         <?php  echo '<button type="submit" class="btn btn-primary  pull-right" name="'.$row['batch_id'].'" id="bt1" >Submit</button>';
                                            ?>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                           
                                            
                                        </div>
                                        </form>
                            </div>
                            </div>
                            
                            
                            
                         
                        </div>
                        
                        
                            
                                                    
                         
                        <?php
                        }
                        }
                        else{
                            echo " no result";
                        }
                        $con->close();
                        ?>
                    
                </div>
                    
                
             
            
            <div class="tab-pane container active " id="form1">
            <form method="post"  action="instructor.php">     
            <div class="container "  style=" ;backgroung-color:white;">
                <div class="panel-group shadow-lg bg-white rounded" style="backgroung-color:white;">
                    <div class="panel panel-default">
                        <div class=panel-heading style="background-color:#1c828a">
                            <h2 style="color:white">Enter Batch Details</h2>
                        </div>
                        <div class="panel-body" style="">
                        <div class="from-row">
                            <div class="input-group">
                            <input type="text" name="batchname" placeholder="Batch Name" style="background-color:rgba(0,0,0,0.18);margin:1%;width:100%;height:40;padding:2%;font-size:18;color:white;border-radius:8px;" required></br>
                            </div>
                            </div>
                            <div>
                                <div class="from-group">
                                    <div class="input-group">
                                <lable style="font-size:20;margin:1%">Start-Time<input type="time" name="start_time" style="background-color:rgba(0,0,0,0.18);margin-left:1%;height:40; width:100%;padding:2%;font-size:18 ;border-radius:4px" placeholder="start-time" required></lable>
                                <lable style="font-size:20;margin:1%">End-Time<input type="time" name="end_time" style="background-color:rgba(0,0,0,0.18);margin-left:1%;height:40; width:100%;padding:2%;font-size:18;border-radius:4px" placeholder="end-time" required>
                            </div>
                            </div>
                            </div>
                            <div style="margin-left:2% ;margin-bottom:2%;padding-bottom :2% ;font-size:20" required>  classes On

                                <div class="form-group">
                                    <div class="input-group">

                                <lable style="font-size:18">
                                <input type="checkbox" value="1" name="sunday" placeholder="sunday">    Sunday</lable></br>
                                </div>
                                </div>
                                <div class="form-group" required>
                                    <div class="input-group">

                                <lable style="font-size:18">
                                <input type="checkbox" value="1" name="monday" placeholder="sunday">    Monday</lable></br>
                                </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">

                                <lable style="font-size:18">
                                <input type="checkbox" value="1" name="Tuesday" placeholder="sunday">    Tuesday</lable></br>
                                </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">

                                <lable style="font-size:18">
                                <input type="checkbox" value="1" name="wednesday" placeholder="sunday">    Wednesday</lable></br>
                                </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">

                                <lable style="font-size:18">
                                <input type="checkbox" value="1" name="thursday" placeholder="sunday">    Thursday</lable></br>
                                </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">

                                <lable style="font-size:18">
                                <input type="checkbox" value="1" name="friday" placeholder="sunday">    Friday</lable></br>
                                </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">

                                <lable style="font-size:18">
                                <input type="checkbox" value="1" name="saturday" placeholder="sunday">    Saturday</lable></br>
                            </div>
                            </div>

                            <div class="from-row">
                            <div class="input-group">
                            <input type="url" name="zoomid" pattern="https?://.+" placeholder="Zoom Id" style="background-color:rgba(0,0,0,0.18);height:40;margin:0%;padding-left:1%;width:100%; font-size:18;border-radius:8px" required></br>
                            </div>
                            </div>
                           
                            
                            
                            <div class="form-row pull-right " style="margin:1%">
                                <div class="input-group">
                                    <button type="submit" name="submit" style="background-color:#1c828a;margin:1%;;font-size:18" class="btn btn-primary pull-right">Submit                            
                            
                        
                        </div>
</div>
                    </div>
                </div>
            
            </form>
            
           </div>
           
           
            </div>
        </body>
        <script>


$("#tab1").on("click",function(){
$("#tab1").css("background-color","#1c828a");
$("#tab1").css("color","white");
$("#tab2").css("color","#1c828a");
$("#tab3").css("color","#1c828a");
$("#tab2").css("background-color","white");
$("#tab3").css("background-color","white");
});

$("#tab2").on("click",function(){
$("#tab1").css("background-color","white");
$("#tab2").css("background-color","#1c828a");
$("#tab2").css("color","white");
$("#tab1").css("color","#1c828a");
$("#tab3").css("color","#1c828a");
$("#tab3").css("background-color","white");
});

$("#tab3").on("click",function(){
$("#tab1").css("background-color","white");
$("#tab2").css("background-color","white");

$("#tab3").css("color","white");
$("#tab1").css("color","#1c828a");
$("#tab2").css("color","#1c828a");
$("#tab3").css("background-color","#1c828a");
});

$(document).ready(function(){
    $("#form1").submit(function(){
 if ($('input:checkbox').filter(':checked').length < 1){
        alert("Check at least one day!");
 return false;
 }
    });
});

/*$('#upload_form').on('submit',function()
{
    $.ajax({
        url:"file_add.php",
        method:"POST",
        data:new FormData(this),
        contentType:false,
        cache:false,
        processData:false,
        enctype="multipart/form-data",
        
        success:function(data)
        {
            alert(data);
        }
    })
    
});*/
/*
$(document).ready(function() {

// Gets the video src from the data-src on each button

var $videoSrc;  
$('.video-btn').click(function() {
    $videoSrc = $(this).data( "src" );
});
console.log($videoSrc);

  
  
// when the modal is opened autoplay it  
$('.modal fade').on('shown.bs.modal', function (e) {
    
// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
$("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
})
  


// stop playing the youtube video when I close the modal
$('.modal fade').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#video").attr('src',$videoSrc); 
}) 
    
    


  
  
// document ready  
});*/



$(document).ready(function(){
    /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#cartoonVideo").attr('src');
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#myModal").on('hide.bs.modal', function(){
        $("#cartoonVideo").attr('src', '');
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#myModal").on('show.bs.modal', function(){
        $("#cartoonVideo").attr('src', url);
    });
});




        </script>
    </head>

</html>