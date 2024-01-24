
<?php
require 'connexio.php';

$name = $_POST['name'];
$cartoonistID = $_POST['cartoonistID'];
$img = $_POST['img'];
$filmID = $_POST['filmID'];

//falta validar si cartoon existeix

$sql="INSERT INTO cartoon (name,cartoonistID,img,filmID) VALUES('$name','$cartoonistID','$img','$filmID')";
$query = mysqli_query($conn, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>