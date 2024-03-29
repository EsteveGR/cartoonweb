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
        <div class="users-form"> 
        <?php
        require 'connexio.php';
        $res = $conn->query('SELECT * FROM film');
        $film = $res->fetch_array();
        ?>
        <form action="insert_film.php" method="POST">
        <h1>Add film to Cartoon Network!</h1>
        <fieldset>
            <legend>Dades Pel·licules/Series</legend>
            <label form="fname"> Nom </label><br>
            <input type="text" id="name" name="name" maxlength="30" value="" required><br>
            <label form="fname"> Any </label><br>
            <input type="text" id="year" name="year" maxlength="4" pattern="\d{4}" title="El format és per exemple --> 2024" value="" required><br>
            <label form="fname"> Pais </label><br>
            <input type="text" id="country" name="country" maxlength="30" value="" required><br>
            <label form="fname"> Genere </label><br>
            <input type="text" id="genre" name="genre" maxlength="30" value="" required><br><br>
            <input type="submit" value="Enviar"><br>
        </fieldset>
        </form>
        </div>
    
        <div class="list-table">
            <h2>Llistat de pel·licules/series</h2>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Any</th>
                        <th>Pais</th>
                        <th>Genere</th>
                        <th></th>
                        <th></th>
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
                        echo "<th><a href='update_film.php?id=".$film['id']."' class='list-table--edit'>Editar</a></th>";
                        echo "<th><a href='delete_film.php?id=".$film['id']."' class='list-table--delete'>Eliminar</a></th>";
                        echo "</tr>";
                        $film = $res->fetch_array();
                    }?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>