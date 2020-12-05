<?php

namespace App;

class Day04
{
    public function countValidPassportWithRowExistence(string $passports):int {
        $validPassportCount = 0;

        $passports = str_replace(PHP_EOL, ' ', $passports);
        $passports = str_replace('  ', PHP_EOL, $passports);
        $passports = str_getcsv($passports, PHP_EOL);

        foreach ($passports as $passport) {
            if (!preg_match('/ecl\:.*/i', $passport)) {
                continue;
            }
            if (!preg_match('/pid\:.*/i', $passport)) {
                continue;
            }
            if (!preg_match('/eyr\:.*/i', $passport)) {
                continue;
            }
            if (!preg_match('/iyr\:.*/i', $passport)) {
                continue;
            }
            if (!preg_match('/hcl\:.*/i', $passport)) {
                continue;
            }
            if (!preg_match('/byr\:.*/i', $passport)) {
                continue;
            }
            if (!preg_match('/hgt\:.*/i', $passport)) {
                continue;
            }
            $validPassportCount++;
        }

        return $validPassportCount;
    }

    public function countValidPassport(string $passports):int {
        $validPassportCount = 0;

        $passports = str_replace(PHP_EOL, ' ', $passports);
        $passports = str_replace('  ', PHP_EOL, $passports);
        $passports = str_getcsv($passports, PHP_EOL);

        foreach ($passports as $passport) {
            if (!preg_match('/byr\:(?:19[2-9][0-9]|200[0-2])(?: |$)/i', $passport)) {
                continue;
            }
            if (!preg_match('/iyr\:20(?:1[0-9]|20)(?: |$)/i', $passport)) {
                continue;
            }
            if (!preg_match('/eyr\:20(?:2[0-9]|30)(?: |$)/i', $passport)) {
                continue;
            }
            if (!preg_match('/hgt\:(?:1(?:[5-8][0-9]|9[0-3])cm|(?:59|6[0-9]|7[0-6])in)(?: |$)/i', $passport)) {
                continue;
            }
            if (!preg_match('/hcl\:#[a-f0-9]{6}(?: |$)/i', $passport)) {
                continue;
            }
            if (!preg_match('/ecl\:(?:amb|blu|brn|gry|grn|hzl|oth)(?: |$)/i', $passport)) {
                continue;
            }
            if (!preg_match('/pid\:[0-9]{9}(?: |$)/i', $passport)) {
                continue;
            }
            $validPassportCount++;
        }

        return $validPassportCount;
    }
}
