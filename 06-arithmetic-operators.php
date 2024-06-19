<?php
$output = null;

$num1 = 11;
$num2 = 5;

$output = "$num1 + $num2" . $num1 + $num2;
$output = "$num1 - $num2" . $num1 - $num2;
$output = "$num1 * $num2" . $num1 * $num2;
$output = "$num1 / $num2" . $num1 / $num2;
$output = "$num1 % $num2" . $num1 % $num2;

// assingnment operator
$num3 = 10;

$num3 += 10;

$num3 -= 10;

$num3 *= 10;

$num3 /= 10;

// rend()
$output = rand();
$output = getrandmax();
$output = rand(1, 10);

// ceil()
$output = ceil(4.2);

// floor()
$output = floor(4.2);

//sqrt()
$output = sqrt(16);

// pi()
$output = pi();

//abs()
$output = abs(-4.5);

// max()
$output = max(1,5,9,52,85,25,8,5,5);
$output = max([4,5,9,65,51,45,32,85]);

// min()
$output = min(4,5,9,65,51,45,32,85);
$output = min([4,5,9,65,51,45,32,85])

 

?>
