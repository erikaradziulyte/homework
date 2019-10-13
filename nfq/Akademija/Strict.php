<?php

declare(strict_types=1);

namespace Nfq\Akademija;

class Strict
{
    public function calculateHomeWorkSum(...$numbers): int
    {
        try {
            $rez = $this->caclRez(...$numbers);
        } catch (\TypeError $e) {
            echo 'Arguments must be of the type int ';
            $rez = 0;
        }
        return $rez;
    }

    private function caclRez(int...$numbers)
    {
        $acc = 0;
        foreach ($numbers as $n) {
            $acc += $n;
        }
        return $acc;
    }

}