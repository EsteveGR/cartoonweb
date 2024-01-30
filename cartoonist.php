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
        <?php
        require 'connexio.php';
        $res = $conn->query('SELECT * FROM cartoonist');
        $cartoonist = $res->fetch_array();
        ?>
        <form action="insertcartoonist.php" method="POST">
        <h1>Add film to Cartoon Network!</h1>
        <fieldset>
            <legend>Dades dibuixants</legend>
            <label form="fname"> Nom </label><br>
            <input type="text" id="name" name="name" maxlength="30" value=""><br>
            <label form="fname"> Categoria </label><br>
            <input type="text" id="name" name="name" maxlength="30" value=""><br>
            <label form="fname"> Pais </label><br>
            <input type="text" id="name" name="name" maxlength="30" value=""><br><br>
            <input type="submit" value="Enviar"><br>
        </fieldset>
        </form>
        </div>
    
        <div class="list-table">
            <h2>Llistat de dibuixants</h2>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Categoria</th>
                        <th>Pais</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($cartoonist != null){
                        echo "<tr>";
                        echo "<th>".$cartoonist['id']."</th>";
                        echo "<th>".$cartoonist['name']."</th>";
                        echo "<th>".$cartoonist['familyname']."</th>";
                        echo "<th>".$cartoonist['country']."</th>";
                        echo "<th><a href='' class='list-table--edit'>Editar</a></th>";
                        echo "<th><a href='' class='list-table--delete'>Eliminar</a></th>";
                        echo "</tr>";
                        $cartoonist = $res->fetch_array();
                    }?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>