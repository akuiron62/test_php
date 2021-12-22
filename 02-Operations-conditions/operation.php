<?php

$a = 15;
$b = 5;
$c = 8;

$result1 = $a + $b + $c;
$result2 = $a * ($b - $c);
$result3 = ($c - $b) / $a;

echo "$a + $b + $c = $result1<br/>";
echo "$a * ($b - $c) = $result2<br/>";
echo "($c - $b) / $a = $result3<br/>";

if ($result1 < 20 || $result2 < 20 || $result3 <= 20) {
    echo 'Au moins une des opérations renvoie moins de 20';
} else {
    echo 'toutes les opérations renvoie plus de 20';
}
echo '<br>';

