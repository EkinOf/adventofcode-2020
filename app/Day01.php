<?php

namespace App;

class Day01
{
    public function findTwoEntriesFactor(array $expenseReport):? int {
        $entry1 = 0;
        $entry2 = 0;

        $i = 0;
        while ($i < count($expenseReport) && ($entry1+$entry2!=2020)) {
            $j = 0;
            while($j < count($expenseReport) && ($entry1+$entry2!=2020)) {
                if ($i != $j) {
                    if ($expenseReport[$i]+$expenseReport[$j]==2020) {
                        $entry1 = $expenseReport[$i];
                        $entry2 = $expenseReport[$j];
                    }
                }
                $j++;
            }
            $i++;
        }

        if ($entry1+$entry2==2020) {
            return $entry1*$entry2;
        } else {
            return null;
        }
    }

    public function findThreeEntriesFactor(array $expenseReport):? int {
        $entry1 = 0;
        $entry2 = 0;
        $entry3 = 0;

        $i = 0;
        while ($i < count($expenseReport) && ($entry1+$entry2+$entry3!=2020)) {
            $j = 0;
            while($j < count($expenseReport) && ($entry1+$entry2+$entry3!=2020)) {
                $k = 0;
                while($k < count($expenseReport) && ($entry1+$entry2+$entry3!=2020)) {
                    if ($i != $j && $i!=$k && $j!=$k) {
                        if ($expenseReport[$i] + $expenseReport[$j] + $expenseReport[$k]== 2020) {
                            $entry1 = $expenseReport[$i];
                            $entry2 = $expenseReport[$j];
                            $entry3 = $expenseReport[$k];
                        }
                    }
                    $k++;
                }
                $j++;
            }
            $i++;
        }

        if ($entry1+$entry2+$entry3==2020) {
            return $entry1*$entry2*$entry3;
        } else {
            return null;
        }
    }
}
