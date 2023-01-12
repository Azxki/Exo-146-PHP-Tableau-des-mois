<?php
    $myArray = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet',
        'aout', 'septembre', 'octobre', 'novembre', 'décembre'];

    echo $myArray[2];
    echo $myArray[4];

    echo $myArray[7] = "août";

    $departement = [59 => 'Nord', 80 => 'Somme', 62 => 'Pas-de-Calais', 60 => 'Oise', 02 => 'Aisne'];
    echo $departement[59];

    foreach ($myArray as $afficher) {
        echo $afficher;
    }

    foreach ($departement as $key => $value) {
        echo $value;
    }

    foreach ($departement as $key => $value) {
        echo "Le département " . $value . " a pour numéro " . $key;
    }
?>