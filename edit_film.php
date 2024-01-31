<?php

require 'connexio.php';

$id=$_POST["id"];
$name = $_POST['name'];
$genre = $_POST['genre'];
$year = $_POST['year'];
$country = $_POST['country'];

$sql="UPDATE film SET name='$name', genre='$genre', year='$year', country='$country' WHERE id='$id'";
$query = mysqli_query($conn, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>