<?php
$numbre0 = 0 ;
$numbre1 = 5;
$numbre2 = 10;
$numbre3 = '20';
$fruits = 'apple';
$bool1 = true;
$bool2 = false;
$null = null;


// implicit conversion
$result1 = $numbre1 + $numbre2 ;//int
$result2 = $numbre1 + $numbre3 ;//int(string to int)
$result3 = $numbre3 + $numbre3 ;//int(string to int)
$result4  = $numbre2 . $numbre1 ;//string (int to string)
//$result5 = $fruits + $numbre1; // error
$result6 = $numbre1 + $bool1 ;// int (bool to int)
$result7 = $numbre1 + $bool2 ;// int (bool to int)
$result8 = $numbre1 + $null ;// int (null to int)



var_dump($result1);
var_dump($result2);
var_dump($result3);
var_dump($result4);
//var_dump($result5);
var_dump($result6);
var_dump($result7);
var_dump($result8);

// explicit conversion
$result9 = (string) $numbre1;
$result10 = (int) $numbre3;
$result11 = (bool) $numbre0;
$result12 = (bool) $numbre1;


var_dump($result9);
var_dump($result10);
var_dump($result11);
var_dump($result12);
?>