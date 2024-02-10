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
            $country = $_POST['country'];
            $familyname = $_POST['familyname'];

            echo $name;
            echo $country;
            echo $familyname;
            echo "<br>";

            //validar si existeix o no
            if (checkItemExists('cartoonist', 'name', $name)) {
                echo "The film already exists";
                die();
            }
            else {
                $stmt = $conn->prepare("INSERT INTO cartoonist (name, country, familyname) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $name, $country, $familyname);
                $stmt->execute();
                $stmt->close();
                echo "The film does not exist";
            }
        ?>
    </div>
</body>
</html>