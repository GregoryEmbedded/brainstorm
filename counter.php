<?php
// Fichier pour stocker le nombre de visites
$file = 'counter.txt';

// Vérifier si le fichier existe, sinon le créer
if (!file_exists($file)) {
    file_put_contents($file, 0); // Initialise à 0 si le fichier n'existe pas
}

// Lire le nombre actuel de visites
$counter = (int) file_get_contents($file);

// Incrémenter le compteur
$counter++;

// Mettre à jour le fichier avec le nouveau compteur
file_put_contents($file, $counter);

// Retourner le compteur
echo $counter;
?>
