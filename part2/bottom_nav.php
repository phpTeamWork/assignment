<?php
    require_once __DIR__.'/includes/dbh.php';

    //Get the db object
    $db = new Db();
    $resInfo = $db -> select("SELECT address, hours, social FROM about");
    $menuTypes = $db -> select("SELECT name FROM type");

    //converting dual-dimensional array into single dimension
    $details = [
        'address' => $resInfo[0]['address'],
        'hours' => $resInfo[0]['hours'],
        'social' => substr($resInfo[0]['social'], 10)
    ];