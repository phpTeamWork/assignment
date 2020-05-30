<?php
    require_once __DIR__.'/includes/dbh.php';

    //Get the db object
    $db = new Db();
    $resInfo = $db -> select("SELECT address, telephone, email, hours FROM about");

     //finding the info from db about
     $about = [
        'address' => $resInfo[0]['address'],
        'telephone' => $resInfo[0]['telephone'],
        'email' => $resInfo[0]['email'],
        'hours' => $resInfo[0]['hours'],
    ];