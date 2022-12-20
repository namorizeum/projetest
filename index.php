<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .rouge {
            color: #ff0000;
        }
    </style>
</head>
<body>
    <h1>FICHIER PHP</h1>
    <h1>test</h1>
    
    <?php
    echo "cette fois, mon PHP est <strong>interprété</strong><br>";
    echo "le resultat de l'adition est "  . (75+10) . "<br>";
    echo "teste 3<br>";
    echo "<hr>";

    $chaine = "c'est le cours de logique informatique";
    echo "la logueur de la chaine de caractères est " . strlen($chaine);
    echo "<br>";
    echo "tst<br>";
    echo "<hr>";

    $mdp = "123456789009";

    if ( strlen($mdp) == 12) {
        echo "<div class='rouge'>felicitation 12</div>";
    }
    elseif( strlen($mdp) >= 10 )   {
        if(strlen($mdp) <=15) {
            echo 'le mot de passe est valide';
        } else {
            echo 'le mot de passe invalide';
        }
    }
    
    echo "<hr>";

    if ( strlen($mdp) == 12) {
        echo "felicitation 12";
    }
    elseif( strlen($mdp) >= 10 )   {
        if(strlen($mdp) <=15) {
            echo 'le mot de passe est valide';
        } else {
            echo 'le mot de passe invalide';
        }
    }
        
            


/*
    si longueur(mdp) >= 10 et longueur(mdp) <=15 alors afficher "mot de passe valide" sinon afficher 'mot de passe invalide';
    if elseif else echo         finsi   strlen
    si alors sinon affficher            longueur






*/
    ?>
</body>
</html>