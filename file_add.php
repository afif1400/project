<?php
    require "includes/common.php";
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//=$_POST('id');$id

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "docs"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        /* $query = mysqli_query($con,"INSERT INTO `assignments`('id','batch_id','assign_url') VALUES (NULL,'".$_POST['id']."','".$target_file."')");*/
        /*echo $_POST['id'];
        echo $target_file;*/
        $id=$_POST['id'];
        $sql= " INSERT INTO assignments (id,batch_id,assign_url) VALUES (1,'$id','".$target_file."')";
        if($sql){
            echo "hello";
        }
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
      
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
<script>
    function myFunction(){
        location.reload();
    }
</script>