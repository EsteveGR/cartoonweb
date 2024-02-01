
<?php
require 'connexio.php';

$name = $_POST['name'];
$country = $_POST['country'];
$familyname = $_POST['familyname'];


echo $name;
echo $country;
echo $familyname;
echo "<br>";

//validar si existeix o no

$sql="INSERT INTO cartoonist (name,country,familyname) VALUES('$name','$country','$familyname')";
$query = mysqli_query($conn, $sql);


if($query){
    Header("Location: index.php");
}else{

}

?>