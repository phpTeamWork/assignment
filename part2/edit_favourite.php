<?php
    require_once __DIR__.'/includes/bootstrap.php';
    require_once __DIR__.'/includes/dbh.php';

    //Get the db object
    $db = new Db();

    if(isset($_POST['favourite'])) {
        $itemID = substr($_POST['favourite'], 3); //get ID of item favourited
        $action = substr($_POST['favourite'], 0, 3); //add favourite or remove
        if($action == "add") { //adding item id in array
            array_push($_SESSION['favourites'], $itemID);
        } elseif ($action == "rem") { //removing item id from array
            if (($key = array_search($itemID, $_SESSION['favourites'])) !== false) {
                unset($_SESSION['favourites'][$key]);
            }
        }
        header ("Location: menu.php#".$_POST['id']);
    } else {
        echo $twig->render('404.html');
    }