<?php
$directory = __DIR__ . '/assets/icons/technos';
$files = array_diff(scandir($directory), array('..', '.'));
$fileNames = array_map(function ($file) {
    return pathinfo($file, PATHINFO_FILENAME);
}, $files);
?>

<!-- Background circles for visual interest -->
<div class="circle top-20 left-10 bg-orange-600/20"></div>
<div class="circle top-160 right-0 bg-yellow-400/20"></div>


<section class="flex flex-col items-center justify-center py-8 antialiased md:py-16 section">
  <div class="text-center mb-8">
    <h1 class="text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl xl:text-6xl">
      Mes Projets
    </h1>
    <p class="max-w-2xl mx-auto text-gray-400 md:mb-6 md:text-lg mb-3 lg:mb-5 lg:text-xl p-4">
      Découvrez tous mes projets professionnels et étudiants
    </p>
  </div>

  <div class="mb-8">
    <h2 class="text-2xl font-bold text-white mb-4 text-center">Filtrer par technologie</h2>
    <div class="flex flex-wrap p-2 gap-3 justify-center w-full max-w-4xl mx-auto bg-stone-600/30 rounded-lg">
      <a href="index.php?page=projets" class="<?= !isset($_GET['techno']) ? 'bg-gradient-to-r from-orange-600 to-yellow-400' : 'bg-stone-700 hover:bg-stone-600' ?> py-2 px-4 rounded-full transition duration-300 text-white">
        Tous
      </a>
      <?php
    foreach ($fileNames as $fileName) {
        if (isset($_GET['techno']) && $_GET['techno'] === $fileName) {
            $isActive = true;
        } else {
            $isActive = false;
        }
        $nom_techno = $fileName;
        include 'base.php';
    }
    ?>
    </div>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-6xl mx-auto">
    <?php
    include 'get-projets.php';
    $projectCount = 0;
    
    foreach ($projects as $project) {
        if (isset($_GET['techno']) && !in_array($_GET['techno'], $project['technologies'])) {
            continue; // Skip this project if the technology doesn't match
        }
        
        $projectCount++;
        include 'projet-preview.php';
    }
    
    if ($projectCount === 0) {
        echo '<div class="col-span-2 text-center py-12">';
        echo '<p class="text-gray-400 text-xl">Aucun projet ne correspond à ce filtre.</p>';
        echo '<a href="projets.php" class="inline-block mt-4 bg-gradient-to-r from-orange-600 to-orange-600 py-2 px-4 rounded-full transition duration-300 hover:shadow-lg hover:to-yellow-400 text-white">Voir tous les projets</a>';
        echo '</div>';
    }
    ?>
  </div>
</section>