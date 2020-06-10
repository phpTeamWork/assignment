<?php
     require_once __DIR__.'/top_nav.php';
     require_once __DIR__.'/bottom_nav.php';
     require_once __DIR__.'/includes/bootstrap.php';
     require_once __DIR__.'/includes/dbh.php';
    
if (isset($_GET['item'])){
     //Get db object
     $db = new Db();
     $result = $db -> select("SELECT m.id, m.name, m.description, m.ingredients, m.price, m.image, t.name as type, c.name as category FROM menu m INNER JOIN type t ON m.type=t.id INNER JOIN category c ON m.category=c.id");

     if (count($result) > 0) {
          //Menu item found
          $item = [
               'category'         => $result[0]['category'],
               'type'             => $result[0]['type'],
               'image'            => $result[0]['image'],
               'name'             => $result[0]['name'],
               'description'      => $result[0]['description'],
               'ingredients'      => $result[0]['ingredients'],
               'price'            => $result[0]['price']
          ];

          // Render view
          echo $twig->render('details.html', ['item' => $item, 'menuTypes' => $menuTypes, 'bottomDetails' => $details]);
     }
}
