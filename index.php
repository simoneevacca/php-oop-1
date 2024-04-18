<?php

require_once __DIR__ . '/Models/Production.php';

$starWors = new Production('Star Wars', 'English', 9);
$killBill = new Production('Kill Bill', 'English', 7);




echo $starWors->getData();
echo $killBill->getData();