<?php

require __DIR__ . '/vendor/autoload.php';

use Nfq\Akademija\NotTyped;
use Nfq\Akademija\Soft;
use Nfq\Akademija\Strict;

function calculateHomeWorkSum(...$numbers)
{
    $acc = 0;
    foreach ($numbers as $n) {
        $acc += $n;
    }
    return $acc;
}

$notTyped = new NotTyped();
$soft = new Soft();
$strict = new Strict();
$consoleColor = new JakubOnderka\PhpConsoleColor\ConsoleColor();

echo $consoleColor->apply('dark_gray', 'calculateHomeWorkSum: ');
echo $consoleColor->apply('green', calculateHomeWorkSum(3, 2.2, '1')) . PHP_EOL;
echo $consoleColor->apply('dark_gray', 'Nfq\Akademija\NotTyped\calculateHomeWorkSum: ');
echo $consoleColor->apply('green', $notTyped->calculateHomeWorkSum(3, 2.2, '1')) . PHP_EOL;
echo $consoleColor->apply('dark_gray', 'Nfq\Akademija\Soft\calculateHomeWorkSum: ');
echo $consoleColor->apply('green', $soft->calculateHomeWorkSum(3, 2.2, '1')) . PHP_EOL;
echo $consoleColor->apply('dark_gray', 'Nfq\Akademija\Strict\calculateHomeWorkSum: ');
echo $consoleColor->apply('green', $strict->calculateHomeWorkSum(3, 2.2, '1')) . PHP_EOL;


