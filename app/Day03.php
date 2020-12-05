<?php

namespace App;

class Day03
{
    public function countEncounterTrees(array $map, int $horizontalMove, int $verticalMove): int {
        $encounterTrees = 0;
        $currentHorizontalPos = 0;

        for ($currentVerticalPos = $verticalMove; $currentVerticalPos < count($map); $currentVerticalPos+=$verticalMove) {
            $currentHorizontalPos += $horizontalMove;
            $intDiv = intdiv($currentHorizontalPos, strlen($map[$currentVerticalPos]));
            $tempHorizontalPos = $currentHorizontalPos - (strlen($map[$currentVerticalPos])*$intDiv);

            if ($map[$currentVerticalPos][$tempHorizontalPos]=='#') {
                $encounterTrees++;
            }
        }

        return  $encounterTrees;
    }
}
