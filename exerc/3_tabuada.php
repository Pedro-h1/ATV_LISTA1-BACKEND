<?php

$numero = 7;

echo "<h2>Tabuada do 7</h2> <p>";
echo "Tabuada do número {$numero}:\n <p>";

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "{$numero} x {$i} = {$resultado}\n <p>";
}
?>