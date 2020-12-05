<?php

use App\Day02;
use PHPUnit\Framework\TestCase;

class Day02Test extends TestCase
{
    private Day02 $day02;

    public function setup(): void {
        $this->day02 = new Day02;
    }

    public function testCountActualValidPassword() {
        $this->assertEquals(2, $this->day02->countActualValidPassword(['1-3 a: abcde', '1-3 b: cdefg', '2-9 c: ccccccccc']));
    }

    public function testCountOldValidPassword() {
        $this->assertEquals(1, $this->day02->countOldValidPassword(['1-3 a: abcde', '1-3 b: cdefg', '2-9 c: ccccccccc']));
    }
}
