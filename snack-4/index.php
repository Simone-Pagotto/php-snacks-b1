<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non
dovrà contenere lo stesso numero più di una volta -->

<?php

$ranNumArray = [];

while(count($ranNumArray)<15){
    $myNewInt = rand(1,15);
    if(is_numeric(array_search($myNewInt,$ranNumArray))){
    }else{
        $ranNumArray[] = $myNewInt;
    }
}

var_dump($ranNumArray);



?>