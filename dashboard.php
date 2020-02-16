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

<div class="container">
             
              <div class="container" id="material_view">
                    <?php
                        $sql1="SELECT * from batches ";
                        $result1 = $con->query($sql1);
                
                        if($result1 -> num_rows > 0){
                        while ($row1 = $result1 -> fetch_assoc()){
                        
                ?>
                <div class="card shadow bg-black rounded " style="margin:1%">
                    <div class="card-title" id="p1" style="padding-top:1% ;height:50px;padding-left:1%;padding-right:1%" aria-expanded="false"><?php echo $row1['batch_name']  ?>
                    <?php 
                        echo '<a  class="btn btn-primary pull-right shadow bg-black rounded" id="bt1" style="background-color:white;color:black" href="'.$row1['zoom_id'].'">Connect</a>'
                    ?>    
                    </div>
                    <div class="card-subtitle"  style="padding:1%"><?php echo $row1['batch_id'] ?></div>
                    <div class="card-body" style="padding-bottom:0%"> Classes On
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
                         
                         
                        echo  ' <button id="bt1" style="margin-right:5px;margin-left:5px;margin-bottom:5px;margin-top:1px"  class="btn btn-primary pull-right " data-toggle="collapse" href="#myModal_'.$row1['batch_id'].'"?>view assign</button>';

                        
                        echo '<div class="collapse" id="myModal_'.$row1['batch_id'].'"  style="overflow:hidden">' ;
                        ?>
                            <div class="model-content"style="margin:1%;padding:%">
                                <?php 
                                $sqll="SELECT * FROM assignments";
                                $result2 = $con->query($sqll);
                
                                if($result2 -> num_rows > 0){
                                while ($row2 = $result2 -> fetch_assoc()){
                                    if($row1['batch_id']==$row2['batch_id']){
                                       echo '<a class="" id="" style="margin-top:1%" data-toggle="modal" data-target="#myModal_'.$row2['id'].'">assignment'.$row2['id'].'</br>';
                                        
                                    }
                                    else{
                                        echo 'no assignments to display';                                    }
                                        
                                 
                        
                            echo '<div class="modal fade" role="dialog" style="overflow:hidden;width:;margin-top:2%;margin-right:0%" id="myModal_'.$row2['id'].'">';
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
                        <?php 
                                }
                                }
                                ?>    
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