<?php
    require_once __DIR__.'/top_nav.php';
    require_once __DIR__.'/bottom_nav.php';
    require_once __DIR__.'/includes/bootstrap.php';
    require_once __DIR__.'/includes/dbh.php';

    //Check if full menu or one type
    if (empty($_GET["type"])) { //full menu to be displayed, containing all types
        $menuItems = $db -> select("SELECT m.id, m.name, m.price, m.image, t.name as type, c.name as category FROM menu m INNER JOIN type t ON m.type=t.id INNER JOIN category c ON m.category=c.id");
        $type = $db -> select("SELECT name, id FROM type");
    } else { //only menu items of a certain type are to be displayed
        $type = array(array("name" => $_GET["type"])); //create the same array format as created when all types are present
        $menuItems = $db -> select("SELECT m.id, m.name, m.price, m.image, t.name as type, c.name as category FROM menu m INNER JOIN type t ON m.type=t.id INNER JOIN category c ON m.category=c.id WHERE t.name='".$type[0]["name"]."'");
    }

    if(!isset($_SESSION['favourites'])) { //creating array only once
        $_SESSION['favourites'] = array();
    }

    //Render view
    echo $twig->render('menu.html', ['menuItems' => $menuItems, 'types' => $type, 'menuTypes' => $menuTypes, 'bottomDetails' => $details, 'favourites' => $_SESSION['favourites']]);