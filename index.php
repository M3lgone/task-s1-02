<?php

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

//Exercici 2

$saludar = "Hello, World!";

echo $saludar . "<br>";

echo strtoupper($saludar) . "<br>";

echo strlen($saludar) . "<br>";

echo strrev($saludar) . "<br>";

$especializacion = "Aquest es el curs PHP";

echo $especializacion . " " . $saludar . "<br>";

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

//Exercici 3.B




?>

<!DOCTYPE html>
<html>
<body>

echo "<h1>" . APELLIDO . "</h1>";

</body>
</html>