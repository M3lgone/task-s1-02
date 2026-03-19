<?php

declare(strict_types=1);

use Dom\Notation;

//Exercise 1

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

echo "Result exercise 3.B: " . "<br>" . calculate(0, 8, "division") . "<br>";

echo "<br>" . "-------------" . "<br>" . "<br>";


//Exercise 4

  function countUp (int $max = 10, int $jump = 1) {
    for ($x = 0; $x <= $max; $x += $jump) {
        echo $x . ", ";
    }
    }

echo "Result exercise 4:<br>";
countUp(20,3);


echo "<br>" . "-------------" . "<br>" . "<br>";


//Exercise 5

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


echo "Result exercise 5 = " . verify(32) . "<br>";
echo "Result test = " . verify(33) . "<br>";
echo "Result test = " . verify(44) . "<br>";
echo "Result test = " . verify(45) . "<br>";
echo "Result test = " . verify(59) . "<br>";
echo "Result test = " . verify(60) . "<br>";

echo "<br>" . "-------------" . "<br>" . "<br>";

//Exercise 6
function isBitten() {
$probability = rand(0, 1);
if ($probability == 0) {
    return false;
}
else {
return true;
}
}

echo "Result exercise 6: <br>" . isBitten() . "<br>";

echo "<br>" . "-------------" . "<br>" . "<br>";


//Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:

//Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
//Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.

//Exercise 1-level2

function phonePay(int $minutes) {
    $toPay = 0;
            if ($minutes < 3) {
                return $toPay = 0.10;
            }
                else {
                    return $toPay += 0.15;
                }
            }

echo "Result exercise 1-level-2 : " . phonePay(5);

//Imagina que estàs programant part de la lògica de la classificació de punts d'un joc. En aquest programa necessitem entrar 3 puntuacions diferents(les puntuacions són entre 0 i 9999). D'aquestes puntuacions necessitarem:
//La seva suma
//La seva mitjana
//La classificació. Sent "Principiant" menor de 4000. "Intermedi" menor de 8000 i "Professional" la resta.
//Pensa a fer més d'una funció per resoldre aquest problema.
//Exercise 2-level2
 
function classification(int $punctuation1, int $punctuation2, int $punctuation3) {
    if () {
        
    }

?>





