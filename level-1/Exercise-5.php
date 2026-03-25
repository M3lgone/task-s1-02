<?php

declare(strict_types=1);

//Exercise 5

function verify(int $nota)
{

    if ($nota < 33) {
        return "Reprove :(";
    } elseif ($nota <= 44) {
        return "Third division :)";
    } elseif ($nota <= 59) {
        return "Second division :D";
    } else {
        return "First division :O";
    }
}


echo "Result exercise 5 = " . verify(32) . "<br>";
echo "Result test = " . verify(33) . "<br>";
echo "Result test = " . verify(44) . "<br>";
echo "Result test = " . verify(45) . "<br>";
echo "Result test = " . verify(59) . "<br>";
echo "Result test = " . verify(60) . "<br>";

echo "<br>" . "-------------" . "<br>" . "<br>";
