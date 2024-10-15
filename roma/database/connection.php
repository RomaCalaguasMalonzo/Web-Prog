<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "roma_db";
    //Connection string to connect database
    $conn = new mysqli($host, $user, $pass, $dbname);

    if($conn->connect_error)
    {
        die("Connection Failed: ".$conn->connect_error);
    }
?>