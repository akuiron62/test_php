<?php
echo '<strong><-- Compter de 10 a 1 --></strong><br/>';
for ($i=10; $i >= 1; $i--) {
    echo "i = $i <br/>";
}

echo '<br/>';

echo '<strong><-- Nombres paires de 1 a 100 --></strong><br/>';
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo "$i". "<br/>";
    }
}
echo '<strong><-- PGCD --></strong><br/>';
$a = 96;
$b = 36;

while ($a != $b) {
    if ($a > $b) {
        $a = $a - $b;
    } else {
        $b = $b - $a;
    }
}
echo "$a <br />";


echo '<strong><-- LE FIZZBUZZ --></strong><br/>';
for ($i = 1; $i <= 100; $i++) {
    if ($i % 15 == 0) {
        echo "$i fizzbuzz". "<br/>";
    } elseif ($i % 3 == 0) {
        echo "$i fiz". "<br/>";
    } elseif ($i % 5 == 0) {
        echo "$i buzz". "<br/>";
    } else {
        echo $i ."<br/>";
    }
}

echo '<strong><-- Etoiles --></strong><br/>';

for ($i = 0; $i <= 10; $i++) {
    for ($j = 0; $j < $i + 1; $j++) {
        echo "🎄";
    }
    echo '<br />';
}

echo '<strong><-- Tables de multiplication --></strong><br/>';
for ($i = 0; $i <=10; $i++) {
    echo "Tables de multiplication de $i<br/>";
    for ($j = 0; $j <= 10 ; $j++) {
    echo "$i * $j = " . $i * $j . "<br/>";
    }
}