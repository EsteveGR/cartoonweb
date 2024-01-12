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
      
    <div> 
    <?php
        echo "<h1> Connexió BDD </h1> ";
        require 'connexio.php';
    ?>

    <h1> Llistat Dibuixants </h1>
    
    <?php
    $res = $conn->query('SELECT * FROM cartoonist');
    $dibuixants = $res->fetch_array();
    while ($dibuixants != null){
        echo $dibuixants['id']."--".$dibuixants['name']."--".$dibuixants['familyname']."--".$dibuixants['country']."<br>";
        $dibuixants = $res->fetch_array();
    }
    ?>

    <h1> Llistat Personatges </h1>
    <?php
    $res = $conn->query('SELECT * FROM cartoon');
    $cartoon = $res->fetch_array();
    while ($cartoon != null){
        echo $cartoon['id']."--".$cartoon['name']."--".$cartoon['cartoonistID']."--".$cartoon['filmID']."<br>";
        $cartoon = $res->fetch_array();
    }
    ?>

    <h1> Llistat Llistat Pelicules </h1>
    <?php
    $res = $conn->query('SELECT * FROM film');
    $film = $res->fetch_array();
    while ($film != null){
        echo $film['id']."--".$film['name']."--".$film['year']."--".$film['country']."--".$film['genre']."<br>";
        $film = $res->fetch_array();
    }
    ?>

    </div>

    </body>
</html>