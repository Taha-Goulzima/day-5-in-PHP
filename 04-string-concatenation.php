<?php
$firstName = 'Taha';
$lastName = 'Goulzima';

$fullName= $firstName.' '.$lastName;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<p><?= 'Hello my name is'.' '.$fullName?></p>
<?= '<br>'?>

<!-- the diffrent between '' and ""<?= 'Hello my name is $fullName'?> -->
<?= "Hello my name is {$fullName}"?>
</body>
</html>