
<?php

require 'connexio.php';
$id=$_GET["id"];

$personatges_film="SELECT * from cartoon WHERE filmID='$id'";
$res1 = mysqli_query($conn, $personatges_film);
$num_personatges = $res1->num_rows;
$personatges = $res1->fetch_array();;

$dades_film ="SELECT * from film WHERE id='$id'";
$res= mysqli_query($conn, $dades_film);
$film = $res->fetch_array();;

?>
<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <title>Cartoon Web!</title>
        <?php
        require 'html/menu.html';
        ?>
    </head>
<body>
<div class="main">
<h1>Deleting film to Cartoon Network!</h1>
    <div class="list-table">
    <h2>Llistat de personatges</h2>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Dibuixant</th>
                    <th>Imatge</th>
                    <th>Pelicula/Serie</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                //Mirar si te personatges
                if ($personatges != null)
                {
                    echo "hi ha ".$num_personatges." personatges no es pot borrar la pelicula si no es borren abans";
                    echo "<br>";
                    //fer llistat de personatges per borrar.
                    while($personatges != null){
                        echo "<tr>";
                        echo "<th>".$personatges['id']."</th>";
                        echo "<th>".$personatges['name']."</th>";
                        echo "<th>".$personatges['cartoonistID']."</th>";
                        echo "<th><img src='".$personatges['img']."'></th>";
                        echo "<th>".$personatges['filmID']."</th>";
                        echo "<th><a href='update_cartoon.php?id=".$personatges['id']."' class='list-table--edit'>Editar</a></th>";
                        echo "<th><a href='delete_cartoon.php?id=".$personatges['id']."' class='list-table--delete'>Eliminar</a></th>";
                        echo "</tr>";
                        $personatges = $res1->fetch_array();
                        }
                }
                else{
                    echo "no hi ha personatges ara borro la pelicula: ".$film['id'];
                // $sql="DELETE FROM film WHERE id='$id'";
                // $personatges = mysqli_query($conn, $sql);
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>