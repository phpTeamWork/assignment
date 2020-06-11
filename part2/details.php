<?php
    require_once __DIR__.'/top_nav.php';
    require_once __DIR__.'/bottom_nav.php';
    require_once __DIR__.'/includes/bootstrap.php';
    require_once __DIR__.'/includes/dbh.php';

    if(!isset($_GET['item'])) {
        echo $twig->render('404.html', ['menuTypes' => $menuTypes, 'bottomDetails' => $details]);
    } else {
        $item = $_GET['item'];
        $itemDetails = $db -> select("SELECT m.id, m.name, m.price, m.image, m.description, m.ingredients, t.name as type, c.name as category FROM menu m INNER JOIN type t ON m.type=t.id INNER JOIN category c ON m.category=c.id WHERE m.id='".$item."'");

        //Render view
        echo $twig->render('details.html', ['itemDetails' => $itemDetails, 'menuTypes' => $menuTypes, 'bottomDetails' => $details, 'favourites' => $_SESSION['favourites']]);
    }