<?php

declare(strict_types=1);

//Exercise 4

function countUp(int $max = 10, int $jump = 1)
{
    for ($x = 0; $x <= $max; $x += $jump) {
        echo $x . ", ";
    }
}

echo "Result exercise 4:<br>";
countUp(20, 3);


echo "<br>" . "-------------" . "<br>" . "<br>";
