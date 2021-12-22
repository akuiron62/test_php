<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les tableaux</title>
</head>
<body>
    <?php
        // Un tableau est un type de données qui permet de stocker plusieurs données. Ex de tableau numérique :
        $firstnames = ['Zak', 'Laurent', 'Madeline', 'Yves', 'Colinne', 'Annabelle', 'Nadir', 'Maxime', 'Rudy', 'Matthieu', 'Thomas', 'Ottilie', 'Alexandre'];

        // On peut avoir toutes sortes de types
        $anything = [10, 'Toto', [12, 'Salut']];

        // Comment afficher Matthieu
        echo $firstnames[9] . '<br/>';

        // Afficher tous les prenoms
        // var_dump($firstnames) .'<br/>';

        foreach ($firstnames as $index => $firstname) {
            echo "$index : $firstname <br/>"; 
        }

        // On peut créer un tableau associatif :
        // on n'est pas obligé de définir tous les index
        echo '<h2>Tableau associatif</h2>';
        $fruits = ['rouge' => 'fraise', 'jaune' => 'Banane', 'verte' => 'Tomate'];

        foreach ($fruits as $index => $fruit) {
            echo "$index : $fruits <br/>"; 
        }
?>
</body>
</html>