<?php


use App\Day03;
use PHPUnit\Framework\TestCase;

class Day03Test extends TestCase
{
    private Day03 $day03;

    public function setup(): void {
        $this->day03 = new Day03;
    }

    public function testCountEncounterTrees() {
        $map = [];
        $map[] = '..##.......';
        $map[] = '#...#...#..';
        $map[] = '.#....#..#.';
        $map[] = '..#.#...#.#';
        $map[] = '.#...##..#.';
        $map[] = '..#.##.....';
        $map[] = '.#.#.#....#';
        $map[] = '.#........#';
        $map[] = '#.##...#...';
        $map[] = '#...##....#';
        $map[] = '.#..#...#.#';
        $this->assertEquals(7, $this->day03->countEncounterTrees($map, 3, 1));
    }
}
