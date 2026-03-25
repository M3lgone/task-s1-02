<?php

declare(strict_types=1);

//Exercise 1

function phonePay(int $minutes): float
{
    if ($minutes < 3) {
        return $minutes * 0.10;
    } else {
        $base = 3 * 0.10;
        $extraMinutes = $minutes - 3;
        return $base + ($extraMinutes * 0.15);
    }
}

echo "Result exercise 1-level-2 : " . phonePay(5) . "$ costs your call" . "<br>";


echo "<br>" . "-------------" . "<br>" . "<br>";
