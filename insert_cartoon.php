
<?php
require 'connexio.php';

$name = $_POST['name'];
$cartoonistID = $_POST['cartoonistID'];
$filmID = $_POST['filmID'];

echo $name;
echo $cartoonistID;
echo $filmID;
echo "<br>";
// check if the user has clicked the button "UPLOAD" 

$target_dir = "uploads/";
echo $target_dir;
echo "<br>";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
echo $target_file;

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if image file is a actual image or fake image
if(isset($_POST["enviar"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;

  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "<br>";
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "<br>";
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "<br>";
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "<br>";
      echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      $sql="INSERT INTO cartoon (name,cartoonistID,img,filmID) VALUES('$name','$cartoonistID','$target_file','$filmID')";
      $query = mysqli_query($conn, $sql);
    } else {
      echo "<br>";
      echo "Sorry, there was an error uploading your file. :(";
    }
  }


//falta validar si cartoon existeix

//if($query){
//    Header("Location: index.php");
//}else{

//}

?>