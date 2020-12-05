<?php

use App\Day01;
use \PHPUnit\Framework\TestCase;

class Day01Test extends TestCase
{
    private Day01 $day01;

    public function setup(): void {
        $this->day01 = new Day01;
    }

    public function testFindTwoEntriesFactor() {
        $this->assertEquals(514579, $this->day01->findTwoEntriesFactor([1721, 979, 366, 299, 675, 1456,]));
    }

    public function testFindTheeEntriesFactor() {
        $this->assertEquals(241861950, $this->day01->findThreeEntriesFactor([1721, 979, 366, 299, 675, 1456,]));
    }
}
