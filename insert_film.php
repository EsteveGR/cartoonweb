<?php
    require 'connexio.php';
    require 'funcions/validacions.php';
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
        <?php
            $name = $_POST['name'];
            $year = $_POST['year'];
            $country = $_POST['country'];
            $genre = $_POST['genre'];

            echo $name;
            echo $year;
            echo $country;
            echo $genre;
            echo "<br>";

            //validar si existeix o no
            if (checkItemExists('film', 'name', $name)) {
                echo "The film already exists";
                die();
            }
            else {
                $stmt = $conn->prepare("INSERT INTO film (name, year, country, genre) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("ssss", $name, $year, $country, $genre);
                $stmt->execute();
                $stmt->close();
                echo "The film does not exist";
            }
        ?>
    </div>
</body>
</html>


