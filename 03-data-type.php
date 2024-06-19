<?php
//string 
$name = "Taha Goulzima";
$name2 = "david doe";


var_dump( $name );
echo"<br>";
echo gettype( $name2 );

// integer
$age = 22;
var_dump( $age );
echo "<br>";

// float
$rating = 4.5;
var_dump( $rating );
echo "<br>";

// boolean
$isLoaded = true;
var_dump( $isLoaded );
echo "<br>";

// array
$friends = array("ali","jawad","ahmed","badr","mido","hassan") ;

$friends2 = ["amin","jamal","achref","bilal","khaled","hamza"] ;
var_dump($friends);
var_dump( $friends2 );

//object
$person = new stdClass();
var_dump( $person );
echo "<br>";

//null
$car = null;
var_dump( $car );
echo "<br>";

// resource
$fill = fopen('test.txt', 'r');
var_dump( $fill );
?>