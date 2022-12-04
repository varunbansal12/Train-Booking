<?php
require_once 'connection.php';
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"]) && isset($_POST['name'])&& isset($_POST['model'])&& isset($_POST['price'])  ) {
   $n=  $_POST['name'];
   $m=  $_POST['model'];
   $p=  $_POST['price'];
    $sql_add_query = "INSERT INTO vehicles VALUES('$n','$m','$p')";
    if ($conn->query($sql_add_query) === FALSE) {
        die("Could not add the new user");
    }
    
    
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
if ($_FILES["fileToUpload"]["size"] > 500000) {
echo "Sorry, your file is too large.";
$uploadOk = 0;
}
if($imageFileType!="jpg" && $imageFileType!="jpeg" && $imageFileType!="png" &&$imageFileType!="gif" )
{
 
    $uploadOk=0;
}
if ( $uploadOk==0){
   echo"sorry";
   
}
else
{
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
        echo"The file was uploadded";
        
    } else
        echo 'sorry';
    
}