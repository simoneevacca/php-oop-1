<?php

require_once __DIR__ . '/Models/Production.php';

$starWors = new Production('Star Wars', 'English', 9);
$killBill = new Production('Kill Bill', 'English', 7);
$kinkLion = new Production('The King Lion', 'English', 6);





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><?=$starWors->getData();?></div>
    <div><?=$killBill->getData();?></div>
    <div><?=$kinkLion->getData();?></div>

    

</body>
</html>