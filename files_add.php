<?php session_start();

  date_default_timezone_set('Asia/Kolkata');
function reArrayFiles($file_post) {

    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}
if(isset($_SESSION['user_id'])) {
    echo "hello";
  
  if(isset($_FILES["uploaddocs"]["name"])){
      echo "hello";
    $file_ary = reArrayFiles($_FILES['uploaddocs']);
    foreach ($file_ary as $key => $value) {
    
    $target_dir = "upload/";
    $target_file = $target_dir .$value["name"];
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $temp = explode(".", $value["name"]);
    $newfilename = $value["name"]."_".round(microtime(true)) . '.' . end($temp);
    $file_size = filesize($value['tmp_name']);
    $file_size_mb = $file_size / 1024 / 1024; // megabytes with 1 digit

    $display = "";
    $error1 = 0;
    $error2 = 0;
    if($imageFileType != "pdf" && $imageFileType != "docs" && $imageFileType != "docx" && $imageFileType != "doc" && $imageFileType != "xls" && $imageFileType != "xlsx" && $imageFileType != "ppt" && $imageFileType != "pptx" ) {
        $display = "<script>alert('Sorry, only PDF, DOCS, Excel and PowerPoint files are allowed.')</script>";
      $error1 = 1;
    }
    elseif ($file_size_mb == 0) {
     $display = "<script>alert('Sorry, only files upto size 2mb are allowed!')</script>";
    $error2 = 1;
    }
    else{
    move_uploaded_file($value["tmp_name"], $target_dir .$newfilename);
    
    }
    echo json_encode(array("a"=> $_POST['id'],"b"=> $display,"e1"=>$error1,"e2"=>$error2));
  }
  }
}
?>