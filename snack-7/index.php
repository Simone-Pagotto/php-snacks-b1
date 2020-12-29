<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni
alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$alumns = [
    [
        'name' => 'Simone',
        'surname' => 'Pagotto',
        'votes' => [5,6,7,8,9,10],
    ],
    [
        'name' => 'Mario',
        'surname' => 'Pagotto',
        'votes' => [5,6,7,8,9,15],
    ],
    [
        'name' => 'Gennaro',
        'surname' => 'Pagotto',
        'votes' => [5,6,7,8,9,20],
    ],
];

foreach($alumns as $alumn){
    echo $alumn['name'] . " " . $alumn['surname'] . " media voti : " . intval(array_sum($alumn['votes']) / count($alumn['votes']));
}


?>