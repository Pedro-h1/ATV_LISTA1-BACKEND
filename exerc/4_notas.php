<?php
// Array armazenando as notas dos 5 alunos
$notas = [7.0, 8.5, 5.5, 9.5, 6.0];

$soma = 0;

// Percorre o vetor apenas para somar as notas
foreach ($notas as $nota) {
    $soma += $nota;
}

// Cálculo da média e resultados que serão exibidos
$media = $soma / 5;
$maiorNota = max($notas);
$menorNota = min($notas);

// Exibição dos resultados
echo "<h2>Análise de notas</h2><P>";
echo "Média da turma: " . $media . "<br><br>";
echo "Maior nota: " . $maiorNota . "<br><br>";
echo "Menor nota: " . $menorNota . "<br><br>";
?>