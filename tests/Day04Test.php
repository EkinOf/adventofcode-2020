<?php


use App\Day04;
use PHPUnit\Framework\TestCase;

class Day04Test extends TestCase
{
    private Day04 $day04;

    public function setup(): void {
        $this->day04 = new Day04;
    }

    public function testCountValidPassportWithRowExistence() {
        $passports = 'ecl:gry pid:860033327 eyr:2020 hcl:#fffffd'.PHP_EOL;
        $passports .= 'byr:1937 iyr:2017 cid:147 hgt:183cm'.PHP_EOL;
        $passports .= PHP_EOL;
        $passports .= 'iyr:2013 ecl:amb cid:350 eyr:2023 pid:028048884'.PHP_EOL;
        $passports .= 'hcl:#cfa07d byr:1929'.PHP_EOL;
        $passports .= PHP_EOL;
        $passports .= 'hcl:#ae17e1 iyr:2013'.PHP_EOL;
        $passports .= 'eyr:2024'.PHP_EOL;
        $passports .= 'ecl:brn pid:760753108 byr:1931'.PHP_EOL;
        $passports .= 'hgt:179cm'.PHP_EOL;
        $passports .= PHP_EOL;
        $passports .= 'hcl:#cfa07d eyr:2025 pid:166559648'.PHP_EOL;
        $passports .= 'iyr:2011 ecl:brn hgt:59in'.PHP_EOL;

        $this->assertEquals(2, $this->day04->countValidPassportWithRowExistence($passports));
    }

    public function testCountValidPassport() {
        $invalidPassports = 'eyr:1972 cid:100'.PHP_EOL;
        $invalidPassports = 'hcl:#18171d ecl:amb hgt:170 pid:186cm iyr:2018 byr:1926'.PHP_EOL;
        $invalidPassports = PHP_EOL;
        $invalidPassports = 'iyr:2019'.PHP_EOL;
        $invalidPassports = 'hcl:#602927 eyr:1967 hgt:170cm'.PHP_EOL;
        $invalidPassports = 'ecl:grn pid:012533040 byr:1946'.PHP_EOL;
        $invalidPassports = PHP_EOL;
        $invalidPassports = 'hcl:dab227 iyr:2012'.PHP_EOL;
        $invalidPassports = 'ecl:brn hgt:182cm pid:021572410 eyr:2020 byr:1992 cid:277'.PHP_EOL;
        $invalidPassports = PHP_EOL;
        $invalidPassports = 'hgt:59cm ecl:zzz'.PHP_EOL;
        $invalidPassports = 'eyr:2038 hcl:74454a iyr:2023'.PHP_EOL;
        $invalidPassports = 'pid:3556412378 byr:2007'.PHP_EOL;

       // $this->assertEquals(0, $this->day04->countValidPassport($invalidPassports));

        $validPassports = 'pid:087499704 hgt:74in ecl:grn iyr:2012 eyr:2030 byr:1980'.PHP_EOL;
        $validPassports .= 'hcl:#623a2f'.PHP_EOL;
        $validPassports .= PHP_EOL;
        $validPassports .= 'eyr:2029 ecl:blu cid:129 byr:1989'.PHP_EOL;
        $validPassports .= 'iyr:2014 pid:896056539 hcl:#a97842 hgt:165cm'.PHP_EOL;
        $validPassports .= PHP_EOL;
        $validPassports .= 'hcl:#888785'.PHP_EOL;
        $validPassports .= 'hgt:164cm byr:2001 iyr:2015 cid:88'.PHP_EOL;
        $validPassports .= 'pid:545766238 ecl:hzl'.PHP_EOL;
        $validPassports .= 'eyr:2022'.PHP_EOL;
        $validPassports .= PHP_EOL;
        $validPassports .= 'iyr:2010 hgt:158cm hcl:#b6652a ecl:blu byr:1944 eyr:2021 pid:093154719'.PHP_EOL;

        $this->assertEquals(4, $this->day04->countValidPassport($validPassports));
    }
}
