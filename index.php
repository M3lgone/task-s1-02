<?php

declare(strict_types=1);

use Dom\Notation;

//Exercici 1

$name = "Isma";

$age = 36;

$price = 10.40;

$soyJoven = true;

const APELLIDO ='Gonzalez';

echo "Nombre: " . $name . "<br>";
echo "Edad: " . $age . "<br>";
echo "Precio: " . $price . "<br>";
echo "Soy joven: " . $soyJoven . "<br>";
echo "Apellido: " . APELLIDO . "<br>";

echo "<br>" . "-------------" . "<br>" . "<br>";

//Exercici 2

$saludar = "Hello, World!";

echo $saludar . "<br>";

echo strtoupper($saludar) . "<br>";

echo strlen($saludar) . "<br>";

echo strrev($saludar) . "<br>";

$especializacion = "Aquest es el curs PHP";

echo $especializacion . " " . $saludar . "<br>";

echo "<br>" . "-------------" . "<br>" . "<br>";

//Exercici 3

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

//Exercici 3.B





function calculate(int $a, int $b, string $operation) {

    switch ($operation) {

        case "suma":
            return $a + $b;
            break;

        case "resta":
            return $a - $b;
            break;

        case "multiplicacion":
            return $a * $b;
            break;

        case "division":
            if ($b == 0) {
            return "error";
            }
            else {
            return $a / $b;
            break;
            }
        default:
            return "Invalid parameter";
        }
    }

echo "Resultado 3.B = " . calculate(0, 8, "division"). "<br>";

echo "<br>" . "-------------" . "<br>" . "<br>";
/*
   count(int $c) {
    for ($c = 0; $c <= 10; $c++) {
        echo "The number is: $c <br>";
        }
    }

echo "Resultado 4 = " . count(2). "<br>";
*/



function verify (int $nota) {

if ($nota < 33) {
return "Reprove";
}

elseif ($nota >= 33 && $nota <= 44) {
return "Third division";
}

else if ($nota >= 45 && $nota <= 59) {
return "Second division";
}

else {
return "First division";
}
}


echo "Resultado 5 = " . verify(32) . "<br>";
echo "Resultado 5 = " . verify(33) . "<br>";
echo "Resultado 5 = " . verify(44) . "<br>";
echo "Resultado 5 = " . verify(45) . "<br>";
echo "Resultado 5 = " . verify(59) . "<br>";
echo "Resultado 5 = " . verify(60) . "<br>";

?>





<h2><?= $output?></h2>