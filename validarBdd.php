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
    <?php
        echo "<h1> Connexió BDD </h1> ";
        require 'connexio.php';
    ?>
    </div>
</body>
</html>