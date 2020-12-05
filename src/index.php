<?php

require __DIR__.'/../vendor/autoload.php';

use App\Day01;
use App\Day02;
use App\Day03;
use App\Day04;

$day01 = new Day01;
$fileContent = file_get_contents('resources/day_01.txt');
$expenseReport = str_getcsv($fileContent, PHP_EOL);
echo 'Day 01 answer 1 : '.$day01->findTwoEntriesFactor($expenseReport).PHP_EOL;
echo 'Day 01 answer 2 : '.$day01->findThreeEntriesFactor($expenseReport).PHP_EOL;

$day02 = new Day02;
$fileContent = file_get_contents('resources/day_02.txt');
$passwords = str_getcsv($fileContent, PHP_EOL);
echo 'Day 02 answer 1 : '.$day02->countActualValidPassword($passwords).PHP_EOL;
echo 'Day 02 answer 2 : '.$day02->countOldValidPassword($passwords).PHP_EOL;

$day03 = new Day03;
$fileContent = file_get_contents('resources/day_03.txt');
$map = str_getcsv($fileContent, PHP_EOL);
echo 'Day 03 answer 1 : '.$day03->countEncounterTrees($map, 3, 1).PHP_EOL;

$try1 = $day03->countEncounterTrees($map, 1, 1);
$try2 = $day03->countEncounterTrees($map, 3, 1);
$try3 = $day03->countEncounterTrees($map, 5, 1);
$try4 = $day03->countEncounterTrees($map, 7, 1);
$try5 = $day03->countEncounterTrees($map, 1, 2);
$day03Result = $try1*$try2*$try3*$try4*$try5;
echo 'Day 03 answer 2 : '.$day03Result.PHP_EOL;

$day04 = new Day04;
$passports = file_get_contents('resources/day_04.txt');
echo 'Day 04 answer 1 : '.$day04->countValidPassportWithRowExistence($passports).PHP_EOL;
echo 'Day 04 answer 2 : '.$day04->countValidPassport($passports).PHP_EOL;
