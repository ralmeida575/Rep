<?php

$servername="localhost";
        $usernames="root";
        $password="";
        $dbName="restaurante_bd";
        

        $conn = new PDO('mysql:host='.$servername.';'.$dbName,$usernames,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>

