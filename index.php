<?php

require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/db.php';







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