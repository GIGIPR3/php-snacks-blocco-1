Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60


<?php
$partite = [

    [
        'casa' => 'Milano',
        'ospiti' => 'Cantù',
        'punticasa' => '55',
        'puntiospiti' => '60',
    ],
    [
        'casa' => 'Vieste',
        'ospiti' => 'Peschici',
        'punticasa' => '80',
        'puntiospiti' => '63',
    ],
    [
        'casa' => 'Roma',
        'ospiti' => 'Napoli',
        'punticasa' => '122',
        'puntiospiti' => '101',
    ],
    [
        'casa' => 'Parmalat',
        'ospiti' => 'Salernithanos',
        'punticasa' => '52',
        'puntiospiti' => '12',
    ],
    [
        'casa' => 'Sparta',
        'ospiti' => 'Grecia',
        'punticasa' => '99',
        'puntiospiti' => '100',
    ],
    [
        'casa' => 'Salvini',
        'ospiti' => 'Meloni',
        'punticasa' => '100',
        'puntiospiti' => '101',
    ],
    
];

for($i = 0; $i < count($partite); $i++){
    echo '<br>';
    echo $partite[$i]['casa']. '-' . $partite[$i]['ospiti']. ' ' . '|' . $partite[$i]['punticasa']. '-' . $partite[$i]['puntiospiti'];
    echo '<br>';
}


?>