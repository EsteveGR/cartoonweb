<?php
        require 'funcions/imatges.php';
        require 'funcions/form.php';
        require 'connexio.php';
        //llistat de personatges amb totes les seve dades
        $res = $conn->query('SELECT * FROM cartoon');
        $cartoon = $res->fetch_array();

        //llistat de pelicules per desplegable
        $res_films = $conn->query('SELECT id, name FROM film');

        //llistat de dibuixants per desplegable
        $res_cartoonists= $conn->query('SELECT id, name FROM cartoonist');

        $conn->close(); 
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
        <div class="users-form"> 
        <form action="insert_cartoon.php" method="POST" enctype="multipart/form-data" >
            <h1>Add Cartoon to Cartoon Network!</h1>
            <fieldset>
                <legend>Dades Personatges</legend>
                <label form="name"> Nom </label><br>
                <input type="text" id="name" name="name" maxlength="30" required><br>
                
                <label form="caroonist"> Dibuixant </label><br>
                <select name="cartoonistID" required>
                <?php 
                    creaSelectForm($res_cartoonists);
                ?>
                </select><br>

                <label for="image"> Imatge </label><br>
                <input type="file" name="fileToUpload" id="fileToUpload" required><br>

                <label for="film"> Pelicula/Serie </label><br>
                <select name="filmID" required>
                <?php 
                    creaSelectForm($res_films);
                ?>
                </select> <br><br>

                <input type="submit" name="enviar" value="Enviar"><br>
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
                        <th>Dibuixant</th>
                        <th>Imatge</th>
                        <th>Pelicula/Serie</th>
                        <th></th>
                        <th></th>
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
                        echo "<th><a href='update_cartoon.php?id=".$cartoon['id']."' class='list-table--edit'>Editar</a></th>";
                        echo "<th><a href='delete_cartoon.php?id=".$cartoon['id']."' class='list-table--delete'>Eliminar</a></th>";
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