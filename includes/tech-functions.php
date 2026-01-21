<?php
/**
 * Fonctions pour la gestion des technologies et compétences
 */

/**
 * Génère une bulle technologique avec style flottant
 * 
 * @param string $file Nom du fichier d'icône
 * @param string $fileName Nom nettoyé du fichier
 * @param int $size Taille de la bulle
 * @param int $x Position X en pourcentage
 * @param int $y Position Y en pourcentage
 * @param float $delay Délai d'animation
 * @param bool $isClickable Si la bulle est cliquable
 * @param string $iconPath Chemin vers l'icône
 */
function generateTechBubble($file, $fileName, $size, $x, $y, $delay, $isClickable = false, $iconPath = '') {
    // Wrapper pour permettre au tooltip de dépasser
    echo '<div class="skill-bubble-wrapper" style="--size: ' . $size . 'px; --x: ' . $x . '%; --y: ' . $y . '%;">';
    
    if ($isClickable) {
        echo '<a href="index.php?page=projets&techno=' . $fileName . '" target="_blank" class="skill-bubble clickable liquid-glass draggable-bubble" style="--delay: ' . $delay . 's;" data-tech-name="' . ucfirst($fileName) . '">';
        echo '<img src="assets/icons/technos/' . $file . '" alt="' . $fileName . '" class="skill-icon">';
        echo '<span class="tech-label hidden md:hidden">' . ucfirst($fileName) . '</span>';
        echo '</a>';
    } else {
        echo '<div class="skill-bubble liquid-glass draggable-bubble" style="--delay: ' . $delay . 's;" data-tech-name="' . ucfirst($fileName) . '">';
        echo '<img src="' . $iconPath . $file . '" alt="' . $fileName . '" class="skill-icon">';
        echo '<span class="tech-label hidden md:hidden">' . ucfirst($fileName) . '</span>';
        echo '</div>';
    }
    
    // Tooltip en dehors de la bulle pour éviter overflow:hidden
    echo '<span class="tech-tooltip">' . ucfirst($fileName) . '</span>';
    echo '</div>';
}

/**
 * Vérifie les collisions entre bulles technologiques
 * 
 * @param int $x Position X de la nouvelle bulle
 * @param int $y Position Y de la nouvelle bulle
 * @param int $radius Rayon de la nouvelle bulle
 * @param array $positions Tableau des positions existantes
 * @return bool True si collision détectée
 */
function checkOverlap($x, $y, $radius, $positions) {
    foreach ($positions as $pos) {
        $distance = hypot($pos['x'] - $x, $pos['y'] - $y);
        if ($distance < (($radius / 6) + $pos['radius'] / 6)) {
            return true;
        }
    }
    return false;
}

/**
 * Récupère les fichiers d'icônes d'un répertoire
 * 
 * @param string $directory Chemin du répertoire
 * @return array Liste des fichiers
 */
function getTechFiles($directory) {
    return file_exists($directory) ? array_diff(scandir($directory), array('..', '.')) : [];
}

/**
 * Configuration des paramètres d'affichage des bulles
 * 
 * @return array Configuration avec tailles et délais
 */
function getTechConfig() {
    return [
        'sizes' => [90, 95, 100, 105, 110, 115, 120, 125],
        'delays' => [0, 0.3, 0.5, 0.7, 1, 1.5, 1.7, 2, 2.2, 2.5],
        'maxAttempts' => 10000
    ];
}
?>
