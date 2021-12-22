<?php

echo '<h2>Opérations en PHP</h2>';

$a = 3;
$b = 4;
$c = 5;
$d = 17;

echo '3 + 4 = ';
echo $a + $b . '<br />';

echo '3 * 4 = ';
echo $a * $b . '<br />';

echo '3 / 4 = ';
echo $a / $b . '<br />';

// Le modulo est le reste de la division entre deux nombres

echo 'Modulo de d % b = ';
echo $d % $b . '<br/>'; 

// exponentielle => 2 ** 3 = 8

echo 'Exponentielle de a ^ b = ';
echo $a ** $b . '<br/>'; 

/* Incrémentation

$a = += 4 : ajouter 4 à $a
a$ = "hello"
a$ .= ' Fiorella' : $a vaut hello Fiorella

*/

/* Comparaisons */

$a === 3; // Est ce que $a est égal à 3
$a == $b; // renvoi false

$c === '5';

/* Conditions */

$logged = true;

if ($logged) {
    echo 'Vous etes connecté <br>';
} else {
    echo 'Vous n\'etes pas connecté <br>';
}



$credit = -10;

if ($credit >= 1000) {
    echo 'Vous êtes premium';
} elseif ($credit >= 500) {
    echo 'acces au compte standard';
} elseif ($credit <500 && $credit >0) {
    $keep = 500 - $credit;
    echo 'Il manque ' . $keep . ' Euros pour arriver à 500';
} elseif ($credit <0) {
    $credit = abs($credit);
    echo 'Vous nous devez ' . $credit . ' euros';
} else {
    echo 'Reviens avec le cash';
}

/* Opérateurs logiques
$a && $b; $a and $b; // True si $a ET $b sont true
$a || $b; $a or $b; // True si $a OU $b est true
$a xor $b; // True si $a OU $b est true mais pas les 2 à la fois
*/

