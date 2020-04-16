<?php

    //Template of saving data in the database

    include_once 'dbh.inc.php';
    echo "connection established";
    $name = mysqli_real_escape_string($conn, $_GET['name']);
    $surname = mysqli_real_escape_string($conn, $_GET['surname']);
    $number = mysqli_real_escape_string($conn, $_GET['number']);
    $sql = "INSERT INTO test (name, surname, number) VALUES (?, ?, ?);";

    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        eader('Location: ../index.php?signup=error');
    } else {
        mysqli_stmt_bind_param($stmt, "sss", $name, $surname, $number);
        mysqli_stmt_execute($stmt);
        header('Location: ../index.php?signup=success');
    }