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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div><?= $starWors->getData(); ?></div>
    <div><?= $killBill->getData(); ?></div>
    <div><?= $kinkLion->getData(); ?></div>

    <div class="container">
        <div class="row">
            <?php foreach ($productions as $key => $prod): ?>
            <div class="col-4">
                    <div class="card">
                        <div><?=$prod['title']?></div>
                        <div><?=$prod['language']?></div>
                        <div><?=$prod['vote']?></div>
                    </div>
                    
                </div>
                <?php endforeach; ?>
        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    
</body>

</html>