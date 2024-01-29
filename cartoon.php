<?php
        require 'connexio.php';
        $res = $conn->query('SELECT * FROM cartoon');
        $cartoon = $res->fetch_array();
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
        <div class="users-form"> 
        <form action="insert_cartoon.php" method="POST" enctype="multipart/form-data" >
            <h1>Add Cartoon to Cartoon Network!</h1>
            <fieldset>
                <legend>Dades Personatges</legend>
                <label form="fname"> Nom </label><br>
                <input type="text" id="name" name="name"><br>
                <label form="fname"> Dibuixant </label><br>
                <input type="text" id="cartoonistID" name="cartoonistID"><br>
                <label form="fname"> Imatge </label><br>
                <input type="file" name="fileToUpload" id="fileToUpload"><br>
                <label form="fname"> Pelicula/Serie </label><br>
                <input type="text" id="filmID" name="filmID"><br><br>
                
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
                        echo "<th><img src='".$cartoon['img']."'></th>";
                        echo "<th>".$cartoon['filmID']."</th>";
                        echo "<th><a href='update_cartoon.php?id=".$cartoon['id']."' class='list-table--edit'>Editar</a></th>";
                        echo "<th><a href='delete_cartoon.php?id=".$cartoon['id']."' class='list-table--delete'>Eliminar</a></th>";
                        echo "</tr>";
                        $cartoon = $res->fetch_array();
                        }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</body>
</html>