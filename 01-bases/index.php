<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP : Les bases</title>
</head>
<body>
    <h2>Coucou les amis !!!</h2>

    <?php 
        echo 'Rebonjour les amis en PHP <br/>'; 
        echo 'une autre ligne';
        echo "<h1 class=\"title\">Le title</h1>"; // Le \ pour échapper
    ?>

    <h2>La concaténation</h2>

    <?php 
    $age = 51;

    echo 'J\'ai '. $age .' ans';
    echo "la variable \$age contient $age"; // avec les ", pas besoin de concatener
    
    ?>
</body>
</html>

