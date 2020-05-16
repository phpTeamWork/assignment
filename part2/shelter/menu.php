<?php
    require_once __DIR__.'/database.php';

    //Get the db object
    $db = new Db();
    $animalTypes = $db -> select("SELECT id, name FROM type order by name");