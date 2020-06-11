<?php
    require_once __DIR__.'/includes/bootstrap.php';
    require_once __DIR__.'/includes/dbh.php';
    require_once __DIR__.'/mailer.php';

    //Get the db object
    $db = new Db();

    if(!isset($_POST['email'])) {
        echo $twig->render('404.html');
    } else {
        $email = $db -> safe($_POST["email"]); //passing the address entered by the user through safety nets
        $counter = $_POST["count"]; //getting the number of items are favourited
        $body = "Dear customer,\n\nthank you for choosing HOT WOK! We hope that we will ever more impress you with these dishes which you have selected as favourites\n\n"; //introduction
        for ($count = 1; $count<=$counter; $count++) {
            $body = $body."Dish ".$count.":\n";
            $item = "Name: ".$_POST["name".$count]."\nCategory: ".$_POST["category".$count]."\nType: ".$_POST["type".$count]."\nIngredients: ".$_POST["ingredients".$count]."\nDescription: ".$_POST["description".$count]."\nPrice: ".$_POST["price".$count]."\n\n";
            $body = $body.$item; //concatenating all the details of each item to the body of the email
        }
        $body = $body."\n\nFeel free to continue browsing our extensive menu from our site!\n\nHOT WOK"; //conclusion
        sendFavourites($email, $body);
        header("Location: favourites.php");
    }