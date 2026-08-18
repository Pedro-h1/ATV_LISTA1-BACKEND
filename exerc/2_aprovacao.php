<?php
echo "<h1>Verificação de aprovação</h1><br>";
$nota = 6;
$freq = 2;
if ($nota >= 6 && $freq <= 15){
    echo "<h3>Parabéns! Você passou.</h3>";
} else {
echo "<h3>Que pena! Você foi reprovado.</h3>";
}
?>