<!-- Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$studenti = [
    [
        'name' => 'Dario',
        'lastname' => 'Rossi',
        'vote' => [7,8,8,5,7,4]
    ],
    [
        'name' => 'Paolo',
        'lastname' => 'Nicoletti',
        'vote' => [2,3,4,8,1,3]
    ],
    [
        'name' => 'Luigi',
        'lastname' => 'Prencipe',
        'vote' => [10,9,8,7,6,5]
    ]
    ];

    foreach($studenti as $value){
        echo $value['name']. ' ';
        echo $value['lastname']. ' ';
        echo array_sum($value['vote']) / count($value['vote']) . '<br/>' ;
    }

?>

