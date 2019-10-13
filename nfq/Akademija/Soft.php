<?php

namespace Nfq\Akademija;

class Soft
{
    public function calculateHomeWorkSum(int...$numbers): int
    {
        $acc = 0;
        foreach ($numbers as $n) {
            $acc += $n;
        }
        return $acc;
    }
}