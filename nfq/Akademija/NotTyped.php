<?php

namespace Nfq\Akademija;

class NotTyped
{
    public function calculateHomeWorkSum(...$numbers): int
    {
        $acc = 0;
        foreach ($numbers as $n) {
            $acc += $n;
        }
        return $acc;
    }
}