<?php
        require 'funcions/imatges.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/modal.css">
        <title>Cartoon Web!</title>
        <?php
        require 'html/menu.html';
        ?>
    </head>
    <body>
      
    <div class="main"> 
    <?php
        require 'connexio.php';
    ?>

    <h2> Llistat de Dibuixants </h2>
    <?php

    $stmt = $conn->prepare('SELECT * FROM cartoonist');
    $stmt->execute();
    $res = $stmt->get_result();
    $cartoonist = $res->fetch_array();
    ?>
    <div class="list-table">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Categoria</th>
                        <th>Pais</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($cartoonist != null){
                        echo "<tr>";
                        echo "<th>".$cartoonist['id']."</th>";
                        echo "<th>".$cartoonist['name']."</th>";
                        echo "<th>".$cartoonist['familyname']."</th>";
                        echo "<th>".$cartoonist['country']."</th>";
                        echo "</tr>";
                        $cartoonist = $res->fetch_array();
                    }?>
                </tbody>
            </table>
        </div>

    <h2> Llistat de Pel·licules/Series </h2>
    <?php
    $res = $conn->query('SELECT * FROM film');
    $film = $res->fetch_array();
    ?>
    <div class="list-table">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Any</th>
                    <th>Pais</th>
                    <th>Genere</th>
                </tr>
            </thead>
            <tbody>
                <?php while($film != null){
                    echo "<tr>";
                    echo "<th>".$film['id']."</th>";
                    echo "<th>".$film['name']."</th>";
                    echo "<th>".$film['year']."</th>";
                    echo "<th>".$film['country']."</th>";
                    echo "<th>".$film['genre']."</th>";
                    echo "</tr>";
                    $film = $res->fetch_array();
                }?>
            </tbody>
        </table>
    </div>

    <h2> Llistat de Personatges </h2>
    <?php
    $res = $conn->query('SELECT * FROM cartoon');
    $cartoon = $res->fetch_array();
    ?>
    <div class="list-table">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Dibuixant</th>
                        <th>Imatge</th>
                        <th>Pelicula/Serie</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while($cartoon != null){
                        echo "<tr>";
                        echo "<th>".$cartoon['id']."</th>";
                        echo "<th>".$cartoon['name']."</th>";
                        echo "<th>".$cartoon['cartoonistID']."</th>";
                        canviMidaImatgeAlcada($cartoon['img']);
                        echo "<th>".$cartoon['filmID']."</th>";
                        echo "</tr>";
                        $cartoon = $res->fetch_array();
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
    </body>
</html>