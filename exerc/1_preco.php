<?php
    echo "<h1>Calculadora de desconto</h1> <br>";
    $preco = 500;
    if ($preco >= 200){
        echo "O preço pode receber desconto!! o valor com desconto é: ";
        echo $preco * 0.80;
    } else {
        echo "O preço não pode receber desconto :((, o valor final é: $preco";
    }
?>