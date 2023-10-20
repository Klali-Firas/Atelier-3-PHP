<?php

use function PHPSTORM_META\type;

if (isset($_GET['sub'])) {
    $prenom = htmlspecialchars($_GET['prenom']);
    $rep = htmlspecialchars($_GET['rep']);
    if ($prenom and $rep) {
        if ($rep < 10 or gettype($rep) == "integer") {
            for ($i = 0; $i < $_GET['rep']; $i++) {
                echo "Bienvenue {$_GET['prenom']}<br>";
            }
        } else
            echo "la nombre de repitions est entier et < 10";
    } else
        echo "Il faut remplire la <a href='Accueil.php'>formulaire</a>";
} else {
    echo "Il faut passer a la <a href='Accueil.php'>formulaire</a>";


}
?>