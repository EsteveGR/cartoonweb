<?php

require 'connexio.php';

$id=$_POST["id"];
$name = $_POST['name'];
$familyname = $_POST['familyname'];
$country = $_POST['country'];

$sql="UPDATE cartoonist SET name='$name', familyname='$familyname', country='$country' WHERE id='$id'";
$query = mysqli_query($conn, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>