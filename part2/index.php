<?php 
    require_once __DIR__.'/includes/bootstrap.php';
    require_once __DIR__.'/includes/dbh.php';
    require_once __DIR__.'/top_nav.php';
    require_once __DIR__.'/bottom_nav.php';


    
echo $twig->render('index.html', ['menuTypes' => $menuTypes, 'bottomDetails' => $details]);

