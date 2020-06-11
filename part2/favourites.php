<?php
    require_once __DIR__.'/top_nav.php';
    require_once __DIR__.'/bottom_nav.php';
    require_once __DIR__.'/includes/bootstrap.php';
    require_once __DIR__.'/includes/dbh.php';

    $favouriteItems = array(); //declaring array to host favourite items

    $favourites = array_unique($_SESSION['favourites']); //remove any accidental double addition of an item

    foreach($favourites as $item) {
        $result = $db -> select("SELECT m.id, m.name, m.price, m.image, m.description, m.ingredients, t.name as type, c.name as category FROM menu m INNER JOIN type t ON m.type=t.id INNER JOIN category c ON m.category=c.id WHERE m.id='".$item."'");
        array_push($favouriteItems, $result);
    }

    echo $twig->render('favourites.html', ['favouriteItems' => $favouriteItems, 'menuTypes' => $menuTypes, 'bottomDetails' => $details, 'favourites' => $favourites]);