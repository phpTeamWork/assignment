<?php 
    require_once __DIR__.'/includes/bootstrap.php';
    require_once __DIR__.'/includes/dbh.php';
    require_once __DIR__.'/top_nav.php';

    //Get db object and menu
    //$db = new Db();
    //$menu = $db -> select("SELECT name FROM type");

    //Render view
    echo $twig->render('index.html', ['menuTypes' => $menuTypes]);