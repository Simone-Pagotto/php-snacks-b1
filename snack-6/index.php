<!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio
e i PM in un rettangolo verde. -->
<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include 'css/style.css';?></style>
    <title>Document</title>
</head>
<body>
    <div class="square grey">
        <p>Teachers</p>
        <ul>
            <?php 
                foreach($db as $key => $person){
                    if($key === 'teachers'){
                        foreach( $person as $p){
                            echo '<li>' . $p['name'] . ' ' . $p['lastname'] . '</li>';
                        }
                    }
                }
            ?>
        </ul>
    </div>    
    <div class="square green">
        <p>PM</p>
        <ul>
            <?php 
                foreach($db as $key => $person){
                    if($key === 'pm'){
                        foreach( $person as $p){
                            echo '<li>' . $p['name'] . ' ' . $p['lastname'] . '</li>';
                        }
                    }
                }
            ?>
        </ul>
    </div>    
    
</body>
</html>