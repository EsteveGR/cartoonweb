<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <title>Cartoon Web!</title>
        <?php
        require 'html/menu.html';
        ?>
    </head>

<?php
require 'connexio.php';
?>

<body>
    <h1>Add Cartoonist - Animation World!</h1>
    <fieldset>
        <legend>Dades Cartoonist</legend>
        <label form="fname"> Nom </label><br>
        <input type="text" id="name" name="name" value=""><br>
        <label form="fname"> Familia </label><br>
        <input type="text" id="name" name="name" value=""><br>
        <label form="fname"> Pais </label><br>
        <input type="text" id="name" name="name" value=""><br><br>
        <input type="submit" value="Enviar"><br>
    </fieldset>
</body>
</html>