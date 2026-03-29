<?php

declare(strict_types=1);

//Exercise 6

function isBitten(): bool
{
    $probability = rand(0, 1);
    if ($probability === 0) {
        return false;
    } else {
        return true;
    }
}

echo "Result exercise 6: <br>" . isBitten() . "<br>";

echo "<hr>";
