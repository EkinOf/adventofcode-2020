<?php

namespace App;

class Day02
{
    public function countActualValidPassword($passwords): int {
        $validPasswordCount = 0;

        foreach ($passwords as $password) {
            $tempString = explode(':', $password);
            $passwordString = $tempString[1];
            $tempString = explode(' ', $tempString[0]);
            $letterToCheck = $tempString[1];
            $tempString = explode('-', $tempString[0]);
            $letterCountMin = $tempString[0];
            $letterCountMax = $tempString[1];

            $letterCount = substr_count($passwordString, $letterToCheck);

            if ($letterCount>=$letterCountMin && $letterCount<=$letterCountMax) {
                $validPasswordCount++;
            }
        }

        return $validPasswordCount;
    }

    public function countOldValidPassword($passwords): int {
        $validPasswordCount = 0;

        foreach ($passwords as $password) {
            $tempString = explode(':', $password);
            $passwordString = $tempString[1];
            $tempString = explode(' ', $tempString[0]);
            $letterToMatch = $tempString[1];
            $tempString = explode('-', $tempString[0]);
            $letterToMatchFirstIndex = $tempString[0];
            $letterToMatchSecondIndex = $tempString[1];

            if ($passwordString[$letterToMatchFirstIndex] == $letterToMatch xor $passwordString[$letterToMatchSecondIndex] == $letterToMatch) {
                $validPasswordCount++;
            }
        }

        return $validPasswordCount;
    }
}
