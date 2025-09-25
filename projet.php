<?php
// projet.php - gestion des erreurs ajoutée

if (isset($_GET['id'])) {
    include 'get-projets.php';

    $id = $_GET['id'];
    $id_safe = htmlspecialchars($id, ENT_QUOTES, 'UTF-8');

    // Vérifier que l'id existe dans la liste des projets
    if (!isset($projects[$id])) {
        http_response_code(404);
        echo '<script>window.location.replace("404.php");</script>';
        exit;
    }

    $project = $projects[$id];
    $projectIndex = __DIR__ . "/projets/{$id}/index.php";

    // Vérifier que le fichier du projet est présent
    if (!file_exists($projectIndex)) {
        http_response_code(500);
        echo '<h1>Erreur 500 - Fichier manquant</h1>';
        echo "<p>Le dossier du projet existe dans la liste, mais le fichier <code>projets/{$id}/index.php</code> est introuvable.</p>";
        echo '<p>Vérifiez la présence du fichier et réessayez.</p>';
        echo '<p><a href="index.php">Retour à l\'accueil</a></p>';
        exit;
    }

    // Inclure la page du projet
    include $projectIndex;
} else {
    http_response_code(400);
    echo '<h1>Erreur 400 - Requête invalide</h1>';
    echo '<p>Aucun identifiant de projet fourni dans l\'URL.</p>';
    echo '<p><a href="index.php">Retour à l\'accueil</a></p>';
    exit;
}
