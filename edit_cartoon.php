<?php

require 'connexio.php';

$id=$_POST["id"];
$name = $_POST['name'];
$cartoonistID = $_POST['cartoonistID'];
$img = $_POST['img'];
$filmID = $_POST['filmID'];

$sql="UPDATE cartoon SET name='$name', cartoonistID='$cartoonistID', img='$img', filmID='$filmID' WHERE id='$id'";
$query = mysqli_query($conn, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>