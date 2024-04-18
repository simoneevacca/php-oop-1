<?php

require_once __DIR__ . '/Models/Production.php';


$starWors = new Production('Star Wars', 'English', 9);
$killBill = new Production('Kill Bill', 'English', 7);
$kinkLion = new Production('The King Lion', 'English', 6);



$productions = [];

$productions[] = $starWors->getDataObject();
$productions[] = $kinkLion->getDataObject();
$productions[] = $killBill->getDataObject();
var_dump($productions);