<?php

require 'connexio.php';

$id=$_POST["id"];
$name = $_POST['name'];
$lastname = $_POST['cartoonistID'];
$username = $_POST['img'];
$password = $_POST['filmID'];

$sql="UPDATE users SET name='$name', lastname='$lastname', username='$username', password='$password', email='$email' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>