<?php

echo 'Calculadora IMC <br>';

$peso = 52;
$altura = 1.65;

$imc = $peso / ($altura * $altura);

echo "Seu IMC é: $imc <br>";

if ($imc < 18.5) {
    echo "Cuidado, você está abaixo do peso";
} elseif ($imc < 25) {
    echo "Parabéns! Você está normal.";
} elseif ($imc < 30) {
    echo "Cuidado, você está com sobrepeso.";
} else {
    echo "💀";
}

?>