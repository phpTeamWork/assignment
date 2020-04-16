<?php

    //Template of gatting data from the database

    include_once 'dbh.inc.php';

    $input = mysqli_real_escape_string($conn, $_GET['name']);
    $sql = "SELECT * FROM test WHERE name=?;";

    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL error";
    } else {
        mysqli_stmt_bind_param($stmt, "s", $input);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while($row = mysqli_fetch_assoc($result)) {
            echo $row['name']."<br>";
        }
    } 