<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    ?>
<?php
    require "includes/common.php";
	global $batch_name,$start_time,$end_time,$is_sunday,$is_monday,$is_tuesday,$is_wednesday,$is_thursday,$is_friday,$is_saturday,$zoomid;
    
    $con=mysqli_connect('localhost','id12132688_root','iball12312','id12132688_spanishbolo');
	if (!$con) {
		die("Connection failed: " . $con->connect_error);
	}
	
	
		if(isset($_POST['batchname'])){
			$batch_name = $_POST['batchname'];
		}	
		
		if(isset($_POST['start_time'])){
			$start_time = $_POST['start_time'];
		}
		if(isset($_POST['end_time'])){
			$end_time = $_POST['end_time'];
		}		
    
        if(isset($_POST['sunday']) || isset($_POST['monday']) || isset($_POST['tuesday'])|| isset($_POST['wednesday'])     ||   isset($_POST['thursday']) || isset($_POST['friday']) || isset($_POST['saturday']) )  {      
        
           if(isset($_POST['sunday'])){
                $is_sunday = 1;
            }
            else{
                $is_sunday = 0;
            }
            if(isset($_POST['monday'])){
                $is_monday = 1;
            }
            else{
                $is_monday = 0;
            }
            if(isset($_POST['tuesday'])){
                $is_tuesday = 1;
            }
            else{
                $is_tuesday = 0;
            }
            if(isset($_POST['wednesday'])){
                $is_wednesday = 1;
            }
            else{
                $is_wednesday = 0;
            }
            if(isset($_POST['thursday'])){
                $is_thursday = 1;
            }
            else{
                $is_thursday = 0;
            }
            if(isset($_POST['friday'])){
                $is_friday = 1;
            }
            else{
                $is_friday = 0;
            }
            if(isset($_POST['saturday'])){
                $is_saturday = 1;
            }
            else{
                $is_saturday = 0;
            }
        
        }
        else{
            echo "check atlest one box";
        }
        if(isset($_POST['zoomid'])){
            $zoomid=$_POST['zoomid'];
        }
		
	$sql = "INSERT INTO batches (batch_name,start_time,end_time,is_sunday,is_monday,is_tuesday,is_wednesday,is_thursday,is_friday,is_saturday,zoom_id)
	VALUES ('$batch_name','$start_time ','$end_time','$is_sunday','$is_monday','$is_tuesday','$is_wednesday','$is_thursday','$is_friday','$is_saturday', '$zoomid')"; 
	if (mysqli_query($con, $sql)) {
		echo "new record created succesfully";
        exit;
	}
	else{
	   echo "Error:".$sql.mysqli_error($con);
    }
    mysqli_close($con);
?>