<!-- Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->

<?php

$posts = [

    '10/03/2022' => [
        [
            'title' => 'Post 1',
            'author' => 'Giorgio Rossi',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Giorgio Rossi',
            'text' => 'Testo post 2'
        ],
    ],
    '22/02/2029' => [
        [
            'title' => 'Post 3',
            'author' => 'Giorgio Rossi',
            'text' => 'Testo post 3'
        ]
    ],
    '31/05/2001' => [
        [
            'title' => 'Post 4',
            'author' => 'Giorgio Rossi',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Giorgio Rossi',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Giorgio Rossi',
            'text' => 'Testo post 6'
        ]
    ],
];


    for ($i = 0; $i < count($posts); $i++){
        echo '<br>';

        $arrayDate = array_keys($posts)[$i];

        

        echo $arrayDate;

        for($j = 0; $j < count(($posts)[$arrayDate]); $j++){

            $postArray = ($arrayDate)[$j];
            echo '<br>';
      
            echo $posts[$arrayDate][$j]['title'] . '<br/>';
            echo $posts[$arrayDate][$j]['author'] . '<br/>';
            echo $posts[$arrayDate][$j]['text'] . '<br/>' . '<br/>';
      
         }
         /* echo '<br>'; */

    }
?>

