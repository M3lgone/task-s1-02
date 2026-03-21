<?php

declare(strict_types=1);

//Exercise 1

$name = "Isma";

$age = 36;

$price = 10.40;

$soyJoven = true;

define("APELLIDO", "Gonzalez");

echo "Nombre: " . $name . "<br>";
echo "Edad: " . $age . "<br>";
echo "Precio: " . $price . "<br>";
echo "Soy joven: " . $soyJoven . "<br>";
echo "Apellido: " . APELLIDO . "<br>";

echo "<br>" . "-------------" . "<br>" . "<br>";

//Exercise 2

$saludar = "Hello, World!";

echo $saludar . "<br>";

echo strtoupper($saludar) . "<br>";

echo strlen($saludar) . "<br>";

echo strrev($saludar) . "<br>";

$especializacion = "Aquest es el curs PHP";

echo $especializacion . " " . $saludar . "<br>";

echo "<br>" . "-------------" . "<br>" . "<br>";

//Exercise 3

$X = 4;
$Y = 7;
$N = 20.00;
$M = 30.00;


echo "X = " . $X . "<br>";
echo "Y = " . $Y . "<br>";
echo "N = " . $N . "<br>";
echo "M = " . $M . "<br>";


echo "Operacions X i Y: " . "<br>";
echo "X + Y = " . $X + $Y . "<br>";
echo "X - Y = " . $X - $Y . "<br>";
echo "X * Y = " . $X * $Y . "<br>";
echo "X % Y = " . $X % $Y . "<br>";


echo "Operacions N i M: " . "<br>";
echo "N + M = " . $N + $M . "<br>";
echo "N - M = " . $N - $M . "<br>";
echo "N * M = " . $N * $M . "<br>";
echo "N % M = " . $N % $M . "<br>";


echo "X * 2 = " . $X * 2 . "<br>";
echo "Y * 2 = " . $Y * 2 . "<br>";
echo "N * 2 = " . $N * 2 . "<br>";
echo "M * 2 = " . $M * 2 . "<br>";

echo "Suma de totes = " . $X + $Y + $N + $M . "<br>";

echo "Producte de totes = " . $X * $Y * $N * $M . "<br>";

echo "<br>" . "-------------" . "<br>" . "<br>";


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

//Exercise 6
function isBitten()
{
    $probability = rand(0, 1);
    if ($probability == 0) {
        return false;
    } else {
        return true;
    }
}

echo "Result exercise 6: <br>" . isBitten() . "<br>";

echo "<br>" . "-------------" . "<br>" . "<br>";
//Exercise 1-level2

function phonePay(int $minutes)
{
    if ($minutes < 3) {
        return $minutes * 0.10;
    } else {
        $base = 3 * 0.10;
        $extraMinutes = $minutes - 3;
        return $base + ($extraMinutes * 0.15);
    }
}

echo "Result exercise 1-level-2 : " . (float) phonePay(5) . "$ costs your call" . "<br>";


echo "<br>" . "-------------" . "<br>" . "<br>";

function addUp(int $score1, int $score2, int $score3)
{
    if (($score1 >= 0 && $score1 <= 9999) && ($score2 >= 0 && $score2 <= 9999) && ($score3 >= 0 && $score3 <= 9999)) {
        $sum = $score1 + $score2 + $score3;
        return $sum;
    } else {
        return false;
    }
}

function average(int $sum)
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
    echo "Error: scores must be between 0 and 9999";
}



?>





