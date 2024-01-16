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
        <form action="insertfilm.php" method="POST">
        <h1>Add film to Cartoon Network!</h1>
        <fieldset>
            <legend>Dades Pelicules</legend>
            <label form="fname"> Nom </label><br>
            <input type="text" id="name" name="name" value=""><br>
            <label form="fname"> Any </label><br>
            <input type="text" id="name" name="name" value=""><br>
            <label form="fname"> Pais </label><br>
            <input type="text" id="name" name="name" value=""><br>
            <label form="fname"> Genere </label><br>
            <input type="text" id="name" name="name" value=""><br><br>
            <input type="submit" value="Enviar"><br>
        </fieldset>
        </form>
        </div>
    
        <div class="list-table">
            <h2>Llistat de personatges</h2>
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
                        echo "<th><a href='' class='list-table--edit'>Editar</a></th>";
                        echo "<th><a href='' class='list-table--delete'>Eliminar</a></th>";
                        echo "</tr>";
                        $film = $res->fetch_array();
                    }?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>