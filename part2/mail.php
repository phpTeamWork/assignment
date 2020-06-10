<?php
    require_once __DIR__.'/top_nav.php';
    require_once __DIR__.'/bottom_nav.php';
    require_once __DIR__.'/includes/bootstrap.php';
    require_once __DIR__.'/includes/dbh.php';
    require_once __DIR__.'/mailer.php';

    //Render view
    echo $twig->render('mail.html', ['menuTypes' => $menuTypes, 'bottomDetails' => $details]);