<?php

require_once __DIR__.'/bootstrap.php';
require_once __DIR__.'/database.php';
require_once __DIR__.'/menu.php';

if (isset($_GET['a']))
{
        //Get db object
        $db = new Db();
        $animalId = $db -> quote($_GET['a']); //makes param safe for use in query
        $result = $db -> select("SELECT a.*, t.name as typeName FROM animals a inner join type t on a.type = t.id WHERE a.id = " . $animalId);

        if (count($result) > 0) {
                //Animal has been found
                $animal = [
                        'id'                    => $result[0]['id'],
                        'type'                  => $result[0]['typeName'],
                        'image'                 => $result[0]['image'],
                        'name'                  => $result[0]['name'],
                        'bio'                   => $result[0]['bio'],
                        'breed'                 => $result[0]['breed'],
                        'family_friendly'       => $result[0]['family_friendly'],
                        'exercise_frequency'    => $result[0]['exercise_frequency'],
                        'born'                  => $result[0]['born'],
                        'rescued'               => $result[0]['rescued']
                ];

                // Render view
                echo $twig->render('details.html', ['animal' => $animal, 'animalTypes' => $animalTypes] );
        }
        else   
                echo $twig->render('404.html');
}
else   
        echo $twig->render('404.html');

