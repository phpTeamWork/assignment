<?php
    require_once __DIR__.'/top_nav.php';
    require_once __DIR__.'/bottom_nav.php';
    require_once __DIR__.'/includes/bootstrap.php';
    require_once __DIR__.'/includes/dbh.php';

    //db object
    $db = new Db();

    //Render view
    if (empty($_GET["type"])) { //full menu to be displayed, containing all types
        $allMenuItems = $db -> select("SELECT m.id, m.name, m.price, m.image, t.name as type FROM menu m INNER JOIN type t ON m.type=t.id");
        //print_r($allMenuItems);
        $types = $db -> select("SELECT name, id FROM type");
        echo $twig->render('menu.html', ['menuItems' => $allMenuItems, 'types' => $types, 'menuTypes' => $menuTypes, 'bottomDetails' => $details]);
    } else { //only menu items of a certain types are to be displayed
        $type = array(array("name" => $_GET["type"])); //create the same array format as created when all types are present
        $menuItems = $db -> select("SELECT m.id, m.name, m.price, m.image, t.name as type FROM menu m INNER JOIN type t ON m.type=t.id WHERE t.name='".$type[0]["name"]."'");
        print_r($menuItems);
        echo $twig->render('menu.html', ['menuItems' => $menuItems, 'types' => $type, 'menuTypes' => $menuTypes, 'bottomDetails' => $details]);
    }