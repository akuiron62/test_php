<?php

/**
 * La boucle for
 * 
 * Le for est composée d'une instruction d'initialisation
 * 
 * d'une condition d'execution et d'une instruction qui est a exécuter à chaque itération (nouvelle répétition de la boucle)
 * 
 */

 for ($i=0; $i < 10; $i++) {
    echo "i = $i <br/>";
 }

 /* La boucle foreach

    s'execute trois fois car trois prénoms
    $contact représente chaque prénom un à un
  */

$contacts = ['Yves, Valérie, Axelle'];

foreach ($contacts as $contact) {
    echo "$contact <br/>";
}

/*
La boucle while
est similaire au for si ce n'est que la seule instruction nécessaire est la condition d'execution
*/
$i = 0;

while ($i <10) {
    echo "$i <br/>";
    $i++;
}

/*
Le do while va s'executer au moins une fois
*/

echo "<h2>DO WHILE</h2>";
$i = 10;
do {
  echo "Do while $i <br/>";
} while ($i < 10);