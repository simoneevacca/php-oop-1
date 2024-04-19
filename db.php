<?php

require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Genre.php';
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/TVserie.php';





$starWors = new Movie('Star Wars', 'English', 9, new Genre('SCI-FI', 'Movie'), 8000000, '2:10');
$killBill = new Movie('Kill Bill', 'English', 7,  new Genre('Action', 'Movie'), 4000000, '1:45');
$kinkLion = new Movie('The King Lion', 'English', 6,  new Genre('Animation', 'Movie'), 2000000, '1:30');
$brakingBad = new TVserie('Braking Bad', 'English', 8,  new Genre('Drama', 'TV'), 7);
$brooklin99 = new TVserie('Brooklin 99', 'English',8,   new Genre('Comedy', 'TV'), 8);
$velocecomeilvento = new Movie('Veloce come il vento', 'Italiano',8, new Genre('Action/Drama', 'Movie'), 1500000, '1:50');







$productions = [];

$productions[] = $starWors->getDataObject();
$productions[] = $kinkLion->getDataObject();
$productions[] = $killBill->getDataObject();
$productions[] = $brakingBad->getDataObject();
$productions[] = $brooklin99->getDataObject();
$productions[] = $velocecomeilvento->getDataObject();



