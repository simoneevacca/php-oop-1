<?php

require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Genre.php';



$starWors = new Production('Star Wars', 'English', 9, new Genre('Fantasy', 'Movie'));
$killBill = new Production('Kill Bill', 'English', 7,  new Genre('Action', 'Movie'));
$kinkLion = new Production('The King Lion', 'English', 6,  new Genre('Animation', 'Movie'));
$brakingBad = new Production('Braking Bad', 'English', 8,  new Genre('Drama', 'TV'));





$productions = [];

$productions[] = $starWors->getDataObject();
$productions[] = $kinkLion->getDataObject();
$productions[] = $killBill->getDataObject();
$productions[] = $brakingBad->getDataObject();

