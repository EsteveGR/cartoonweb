
<?php
require 'funcions/imatges.php';
require 'connexio.php';

if ($_GET["id"])
{
    $id=$_GET["id"];
}
else{
    header("Location: films.php");
    exit;
}

//$id=$_GET["id"];
$personatges_film="SELECT * from cartoon WHERE filmID='$id'";
$res1 = mysqli_query($conn, $personatges_film);
$num_personatges = $res1->num_rows;
$personatges = $res1->fetch_array();

$dades_film ="SELECT * from film WHERE id='$id'";
$res= mysqli_query($conn, $dades_film);
$num_pelicules = $res->num_rows;
$film = $res->fetch_array();;


?>
<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/modal.css">
        <title>Cartoon Web!</title>
        <script>
        function confirmemBorrat() {
            return confirm("Segur que vols eliminar la pelicula/serie?");
        }
    </script>
        <?php
        require 'html/menu.html';
        ?>
    </head>
<body>
<div class="main">
<h1>Deleting film of Cartoon Network!</h1>
    <div class='confirm-delete'>
    <?php
        if ($num_pelicules == 0){
            echo "La pelicula amb ".$id." no existeix";
            exit;
        }
        if ($personatges == null)
        {
            echo "<br>";
            echo "No hi ha personatges a la pel·lícula/serie: ".$film['id']." - ".$film['name'];
            echo "<br>";
            echo "<br>";
            echo "<div class='centerb'>";   
            //Borrar confirmació eliminació pel·lícula/serie
            
            // Validem si s'ha enviat la solicitut de borrat
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                echo "<br>";
                echo "<h3>Pelicula eliminada: ".$film['id']." - ".$film['name']."</h3>";
                echo "<br>";
                $sql="DELETE FROM film WHERE id='$id'";
                $query = mysqli_query($conn, $sql);
                exit; //parem execució
            } else
            {
                echo "<h3>Confirma que vols eliminar les dades!</h3>";
                echo "<form action='delete_film.php?id=".$film['id']."' method='post' onsubmit='return confirmemBorrat();'>";
                //S'envia la confirmació per post
                echo "<br>";
                echo "<input type='submit' value='Eliminar Dades'>";
                echo "<br>";
                echo "</div>";
                echo "</form>";
            }

        }
        else{
            echo "Aquesta pelicula te ".$num_personatges." personatges, si l'elimines aquests personatges quedaran orfes!";
            echo "<br>";
            echo "Segur que la vols eliminar?";
            echo "<br>";
        }
    ?>
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

                    //llistat de personatges per borrar.
                    while($personatges != null){
                        echo "<tr>";
                        echo "<th>".$personatges['id']."</th>";
                        echo "<th>".$personatges['name']."</th>";
                        echo "<th>".$personatges['cartoonistID']."</th>";
                        canviMidaImatgeAlcada($personatges['img']);
                        echo "<th>".$personatges['filmID']."</th>";
                        echo "<th><a href='update_cartoon.php?id=".$personatges['id']."' class='list-table--edit'>Editar</a></th>";
                        echo "<th><a href='delete_cartoon.php?id=".$personatges['id']."' class='list-table--delete'>Eliminar</a></th>";
                        echo "</tr>";
                        $personatges = $res1->fetch_array();
                    }
                }
                ?>
            </tbody>
        </table>
        <!-- Modal -->
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <div class="modal-content">
                <img id="img01">
            </div>
        </div>
        <script src="javascript/modal.js"></script>  
        </div>
    </div>
</div>
</body>
</html>