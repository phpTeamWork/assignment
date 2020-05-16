<?php
    require_once __DIR__.'/includes/dbh.php';

    //Get the db object
    $db = new Db();
    $menuTypes = $db -> select("SELECT name FROM type");