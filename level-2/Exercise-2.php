<?php

declare(strict_types=1);

function addUp(int $score1, int $score2, int $score3)
{
    if ($score1 >= 0 && $score1 <= 9999 && $score2 >= 0 && $score2 <= 9999 && $score3 >= 0 && $score3 <= 9999) {
        $sum = $score1 + $score2 + $score3;
        return $sum;
    } else {
        throw new Exception("Error: scores must be between 0 and 9999");
    }
}

function average(int $sum): float
{
    $average = $sum / 3;
    return $average;
}

function classification(float $average)
{
    if ($average < 4000) {
        return "You are Beginner :)";
    } elseif ($average < 8000) {
        return "You are Amateur :D";
    } else {
        return "You are Pro :O";
    }
}

$sum = addUp(7000, 8999, 9000);
if ($sum !== false) {
    $average = average($sum);
    echo classification($average);
} else {
    throw new Exception("Error: scores must be between 0 and 9999");
}
