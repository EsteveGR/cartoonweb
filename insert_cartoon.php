
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


//Validem imatge
if(isset($_POST["enviar"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "El fitxer és una imarge - " . $check["mime"] . ".";
    $uploadOk = 1;

  } else {
    echo "El fitxer no és una imatge.";
    $uploadOk = 0;
  }
}

//Validem la mida que no sigui més gran de 5meges
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "<br>";
    echo "El fitxer és massa gran.";
    $uploadOk = 0;
  }
  
  // Limitem els foramts
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "webp") {
    echo "<br>";
    echo "Només s'accepten els següents formats: JPG, JPEG, PNG & GIF.";
    $uploadOk = 0;
  }
  
  //Validem si l'uploadOk es 0 si és 0 no compleix els requisits anteriors.
  if ($uploadOk == 0) {
    echo "<br>";
    echo "El fixer no s'ha pujat. :(";
  //Si tot ok, puja fitxer.
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "<br>";
      echo "La imatge ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " s'ha pujat correcctament. :)";
      $sql="INSERT INTO cartoon (name,cartoonistID,img,filmID) VALUES('$name','$cartoonistID','$target_file','$filmID')";
      $query = mysqli_query($conn, $sql);
    } else {
      echo "<br>";
      echo "Hi ha hagut un error amb la pujada del fitxer. :(";
    }
  }


//falta validar si cartoon existeix

//if($query){
//    Header("Location: index.php");
//}else{

//}

?>