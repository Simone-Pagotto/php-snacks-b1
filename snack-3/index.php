<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in
questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di
post associati a quella data.
Stampare ogni data con i relativi post. -->
<?php

$posts = [
    '28/12/2020' => [
        [
            'title' => "post 1",
            'author' => 'Simone Pagotto',
            'text' => 'questo è il primo messaggio '
        ]
    ],

    '29/12/2020' => [
        [
            'title' => "post 2",
            'author' => 'Simone Pagotto',
            'text' => 'questo è il secondo messaggio '
        ],
        [
            'title' => "post 2.5",
            'author' => 'Simone Pagotto',
            'text' => 'questo è il secondo messaggio again '
        ]
    ],
    '30/12/2020' => [
        [
            'title' => "post 3",
            'author' => 'Simone Pagotto',
            'text' => 'questo è il terzo messaggio '
        ]
    ],
    '31/12/2020' => [
        [
            'title' => "post 4",
            'author' => 'Simone Pagotto',
            'text' => 'Capodanno!'
        ]
    ]
        ];

foreach ($posts as $key => $post) {
    echo $key . '<br>';
    foreach ($post as $thing){
        echo $thing['title'] . '<br>';
        echo $thing['author']. '<br>' ;
        echo $thing['text'] . '<br>';
    }
}

?>