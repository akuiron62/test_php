<?php
$age = 18;

if ($age >= 18) {
    echo 'Vous êtes majeur';
} elseif ($age < 18 && $age >= 16) {
    echo 'Vous êtes presque majeur';
} elseif ($age < 16 && $age >= 14) {
    echo 'Vous êtes jeune';
} else {
    echo 'Vous êtes trop jeune';
}