<?php
    //Establishing a connection with the mySQL database

    $dbServername = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'assignment';

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    //Connection verification
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";