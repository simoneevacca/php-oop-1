<?php

require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Genre.php';
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/TVserie.php';





$starWors = new Movie('Star Wars', 'English', 9, new Genre('Fantasy', 'Movie'), 8000000, '2:10');
$killBill = new Movie('Kill Bill', 'English', 7,  new Genre('Action', 'Movie'), 8000000, '2:10');
$kinkLion = new Movie('The King Lion', 'English', 6,  new Genre('Animation', 'Movie'), 8000000, '2:10');
$brakingBad = new TVserie('Braking Bad', 'English', 8,  new Genre('Drama', 'TV'), 7);







$productions = [];

$productions[] = $starWors->getDataObject();
$productions[] = $kinkLion->getDataObject();
$productions[] = $killBill->getDataObject();
$productions[] = $brakingBad->getDataObject();


var_dump($productions);
