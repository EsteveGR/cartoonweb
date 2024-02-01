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
                <legend>Edició del personatge <?= $cartoon['name']?> </legend>         
                <input type="hidden" name="id" value="<?= $cartoon['id']?>" required>
                <label form="fname"> Nom </label><br>
                <input type="text" name="name" placeholder="Nom" maxlength="30" value="<?= $cartoon['name']?>" required>
                <label form="fname"> Dibuixant </label><br>
                <input type="text" name="cartoonistID" placeholder="Dibuixant" value="<?= $cartoon['cartoonistID']?>" required>
                <label form="fname"> Imatge </label><br>
                <input type="text" name="img" placeholder="Imatge" value="<?= $cartoon['img']?>" required>
                <label form="fname"> Pelicula/Serie </label><br>
                <input type="text" name="filmID" placeholder="Pelicula" value="<?= $cartoon['filmID']?>" required>
                <input type="submit" value="Actualitzar Dades">
            </fieldset>
            </form>
            </div>
        </div>

    </body>
</html>