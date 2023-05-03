<?php

    $localhost = 'localhost';
    $username = 'root';
    $password = 'root';
    $db = 'floral';


    $con = mysqli_connect($localhost, $username, $password, $db);

    if(!$con) {
        echo "Not connect to db";
    }
    


?>