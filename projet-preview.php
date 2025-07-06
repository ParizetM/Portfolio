<?php
// Data array


ob_start();
?>
<div class="mb-4 border-2 border-gray-500 rounded-lg p-3 sm:p-6 max-w-2xl mx-auto">
    <a class="flex flex-col sm:flex-row items-start sm:items-center justify-between hover:shadow-lg rounded-xl p-2 hover:bg-stone-700/50 hover:cursor-pointer transition-all duration-200 hover:scale-105 "
        title="Afficher le projet" href="index.php?page=projet&id=<?= $project['id'] ?>">
        <h2 class="text-xl sm:text-2xl font-bold text-white flex items-center mb-2 sm:mb-0">
            <img src="<?= $project['logo'] ?>" alt="logo" class="w-5 sm:w-6 mr-2">
            <span class="break-words sm:whitespace-nowrap"><?= $project['title'] ?></span>
        </h2>
        <img src="assets/icons/open_in_new.svg" alt="" class="w-5 h-5 sm:w-6 sm:h-6 fill-white self-end sm:self-auto">
    </a>
    <small class="text-orange-600 ml-2 block sm:inline-block"><?= $project['date'] ?></small>
    <p class="text-gray-400 ml-2 text-sm sm:text-base mt-1 sm:mt-0"><?= $project['location'] ?></p>
    <p class="text-gray-400 ml-2 text-sm sm:text-base mt-2"><?= $project['description'] ?></p>
    <div class="flex flex-row flex-wrap gap-2 sm:gap-4 mt-3 sm:mt-4">
        <?php foreach ($project['technologies'] as $tech): ?>
            <?php $nom_techno = $tech;
            include 'base.php'; ?>
        <?php endforeach; ?>
    </div>
</div>
<?php
echo ob_get_clean();


// Render all projects



?></h2>