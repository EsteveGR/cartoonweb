<?php

require 'connexio.php';
$id=$_GET["id"];

$sql="DELETE FROM cartoon WHERE id='$id'";
$query = mysqli_query($conn, $sql);

if($query){
    Header("Location: cartoon.php");
}else{

}

?>