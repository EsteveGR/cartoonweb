<?php
  require 'connexio.php';
  $id=$_GET['id'];

   $sql="SELECT * FROM cartoon WHERE id='$id'";
   $res = $conn->query($sql);
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
            <form action="edit_cartoon.php" method="POST">
            <h1>Edit Cartoon of Cartoon Network!</h1>
            <fieldset>
                <legend>Edició Personatge <?= $cartoon['name']?> </legend>         
                <input type="hidden" name="id" value="<?= $cartoon['id']?>">
                <label form="fname"> Nom </label><br>
                <input type="text" name="name" placeholder="Nom" value="<?= $cartoon['name']?>">
                <label form="fname"> Dibuixant </label><br>
                <input type="text" name="name" placeholder="Dibuixant" value="<?= $cartoon['cartoonistID']?>">
                <label form="fname"> Imatge </label><br>
                <input type="text" name="name" placeholder="Imatge" value="<?= $cartoon['img']?>">
                <label form="fname"> Pelicula/Serie </label><br>
                <input type="text" name="name" placeholder="Pelicula" value="<?= $cartoon['filmID']?>">
                <input type="submit" value="Actualitzar Dades">
            </fieldset>
            </form>
            </div>
        </div>

    </body>
</html>