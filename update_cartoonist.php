<?php
  require 'connexio.php';
  $id=$_GET['id'];

   $sql="SELECT * FROM cartoonist WHERE id='$id'";
   $res = $conn->query($sql);
   $cartoonist = $res->fetch_array();
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
            <form action="edit_cartoonist.php" method="POST">
            <h1>Edit Cartoon of Cartoon Network!</h1>
            <fieldset>
                <legend>Edició del personatge <?= $cartoonist['name']?> </legend>         
                <input type="hidden" name="id" value="<?= $cartoonist['id']?>">
                <label form="fname"> Nom </label><br>
                <input type="text" name="name" placeholder="Nom" maxlength="30" value="<?= $cartoonist['name']?>">
                <label form="fname"> Pais </label><br>
                <input type="text" name="country" placeholder="Pais" maxlength="30" value="<?= $cartoonist['country']?>">
                <label form="fname"> Categoria </label><br>
                <input type="text" name="familyname" placeholder="Categoria" maxlength="30" value="<?= $cartoonist['familyname']?>">
                <input type="submit" value="Actualitzar Dades">
            </fieldset>
            </form>
            </div>
        </div>
    </body>
</html>