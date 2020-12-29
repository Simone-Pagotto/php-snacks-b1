<?php

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

/* var_dump(strlen($name)> 3);
var_dump(stripos($mail,"@")!==false);
var_dump(stripos($mail,".")!==false);
var_dump(is_nan($age) == false); */

if(strlen($name)> 3 && 
   strpos($mail,"@")!== false && 
   strpos($mail,".")!== false && 
   is_numeric($age))  {
    echo "Accesso riuscito!";
} else {
    echo "Accesso negato!!!";
}

?>
