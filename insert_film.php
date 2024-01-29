
<?php
require 'connexio.php';

$name = $_POST['name'];
$year = $_POST['year'];
$country = $_POST['country'];
$genre = $_POST['genre'];


echo $name;
echo $year;
echo $country;
echo $genre;
echo "<br>";

//validar si existeix o no

$sql="INSERT INTO film (name,year,country,genre) VALUES('$name','$year','$country','$genre')";
$query = mysqli_query($conn, $sql);


if($query){
    Header("Location: index.php");
}else{

}

?>