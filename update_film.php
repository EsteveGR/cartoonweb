<?php
  require 'connexio.php';
  $id=$_GET['id'];

   $sql="SELECT * FROM film WHERE id='$id'";
   $res = $conn->query($sql);
   $film = $res->fetch_array();
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
            <form action="edit_film.php" method="POST">
            <h1>Edit Cartoon of Cartoon Network!</h1>
            <fieldset>
                <legend>Edició del personatge <?= $film['name']?> </legend>         
                <input type="hidden" name="id" value="<?= $film['id']?>">
                <label form="fname"> Nom </label><br>
                <input type="text" name="name" placeholder="Nom" value="<?= $film['name']?>">
                <label form="fname"> Any </label><br>
                <input type="text" name="year" placeholder="Any" value="<?= $film['year']?>">
                <label form="fname"> Pais </label><br>
                <input type="text" name="country" placeholder="Pais" value="<?= $film['country']?>">
                <label form="fname"> Genere </label><br>
                <input type="text" name="genre" placeholder="Genere" value="<?= $film['genre']?>">
                <input type="submit" value="Actualitzar Dades">
            </fieldset>
            </form>
            </div>
        </div>

    </body>
</html>