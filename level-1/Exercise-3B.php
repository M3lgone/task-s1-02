<?php

declare(strict_types=1);

//Exercise 3.B

function calculate(int $a, int $b, string $operation): float
{
    switch ($operation) {

        case "suma":
            return $a + $b;

        case "resta":
            return $a - $b;

        case "multiplicacion":
            return $a * $b;

        case "division":
            if ($b == 0) {
                throw new Exception("Error");
            }
            return $a / $b;

        default:
            throw new Exception("Invalid parameter");
    }
}

echo "Result exercise 3.B: " . "<br>" . calculate(0, 8, "division") . "<br>";

echo "<br>" . "-------------" . "<br>" . "<br>";
