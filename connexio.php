<?php

    $servername = "localhost";
    $database = "cartoondb";
    $username = "root";
    $password = "r00t!!!!";


    //create connection
    $conn = mysqli_connect($servername,$username,$password,$database);

    //check connection
    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "Connected successfully <br>";

?>