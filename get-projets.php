<?php
// Chemin vers le fichier CSV
$csvFile = 'projets.csv';

// Initialisation du tableau des projets
$projects = [];
// Lecture du fichier CSV
if (($handle = fopen($csvFile, 'r')) !== false) {
    // Parcourir chaque ligne du fichier CSV
    while (($data = fgetcsv($handle, 1000, ',')) !== false) {
        $projects[] = [
            'id' => $data[0],
            'title' => $data[1],
            'date' => $data[2],
            'location' => $data[3],
            'description' => $data[4],
            'type' => $data[5],
            'technologies' => array_map('trim', explode('&', $data[6])), // Séparer les technologies par le caractère '&' et supprimer les espaces,
            'logo' => $data[7],
        ];
    }
    fclose($handle);
}

?>