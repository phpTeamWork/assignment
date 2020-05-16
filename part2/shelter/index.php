<?php 
    require_once __DIR__.'/bootstrap.php';
    require_once __DIR__.'/database.php';
    require_once __DIR__.'/menu.php';

    if (isset($_GET['type']))
    {
        $typeSelected = $db -> quote($_GET["type"]);
    }
    else
    {
        $typeSelected = -1;
    }

    //Get db object
    $db = new Db();
    $animals = $db -> select("SELECT a.id, a.image, a.name as animalName, a.bio, t.name as typeName FROM animals a inner join type t on a.type = t.id where (t.id = $typeSelected or $typeSelected = -1) order by a.rescued desc");

    //Render view
    echo $twig->render('index.html', ['animals' => $animals, 'animalTypes' => $animalTypes] );
